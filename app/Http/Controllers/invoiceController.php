<?php

namespace App\Http\Controllers;
use App\Models\invoice_game;
use Illuminate\Http\Request;
use Midtrans\Snap;


class invoiceController extends Controller
{
    public function invoicectrl()
    {
        if (!auth()->check()) {

            return redirect('/login')->with('error', 'Tolong login terlebih dahulu.');
        }

        $userId = auth()->user()->id;
        $invoiceGame = invoice_game::where('status', 'Belum Lunas')
            ->where('id_user', $userId)
            ->orderBy('id_invoice', 'desc')
            ->first();


        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        // Set sanitization on (default)(
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $invoiceGame->kodepembayaran_invoice,
                'gross_amount' => $invoiceGame->hargaitem_game,
            ),
            'customer_details' => array(
                'first_name' => auth()->user()->fullname,
                'last_name' => '',
                'email' => auth()->user()->email,
                'phone' => auth()->user()->phone,
            ),
        );

        $snapToken = Snap::getSnapToken($params);

        return view('/after_login/invoice', compact('invoiceGame','snapToken'));
    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed =  hash("sha512",$request->order_id.$request->status_code.$request->gross_amount.$serverKey);

        if($hashed == $request->signature_key)
        {
            if($request->transaction_status == 'capture' or $request->transaction_status == 'settlement')
            {
                $invoiceGame = invoice_game::find($request->order_id);
                $invoiceGame->update(['status'=>'Lunas']);

                // Call WANotification method with order_id parameter
                $this->WANotification(
                    $request->order_id,
                    $invoiceGame->nama_pembeli,
                    $invoiceGame->nama_game,
                    $invoiceGame->game_id,
                    $invoiceGame->server_game,
                    $invoiceGame->item_game,
                    $invoiceGame->hargaitem_game);

            }
        }
    }

    public function WANotification($order_id, $nama_pembeli, $nama_game, $game_id, $server_game, $item_game, $hargaitem_game)
    {
        $fontteUrl = env('FONTTE_URL');
        $targetPhoneNumber = env('TARGET_PHONE_NUMBER');
        $authorizationToken = env('FONTTE_AUTHORIZATION_TOKEN');

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $fontteUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'target' => $targetPhoneNumber,
                'message' => 'Pembayaran Telah Berhasil, Segera Proses Pengiriman Diamond!' . "\n" .
                            'Order ID : ' . $order_id . "\n" .
                            'Nama Pembeli : ' . $nama_pembeli . "\n" .
                            'Game : ' . $nama_game . "\n" .
                            'ID Game : ' . $game_id . "\n" .
                            'Server : ' . $server_game . "\n" .
                            'Item : ' . $item_game . "\n" .
                            'Harga : ' . $hargaitem_game,
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: '. $authorizationToken
            ),
        ));

        $response = curl_exec($curl);
        if (curl_errno($curl)) {
            $error_msg = curl_error($curl);
        }
        curl_close($curl);

        if (isset($error_msg)) {
            echo $error_msg;
        }
        echo $response;
    }


}
