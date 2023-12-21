<?php

namespace App\Http\Controllers;
use App\Models\invoice_game;
use Illuminate\Http\Request;
use Midtrans\Snap;
use Illuminate\Support\Facades\Log;


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
        \Midtrans\Config::$isProduction = false;
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
                'email' => auth()->user()->email,
                'phone' => auth()->user()->phone,
            ),
        );

        $snapToken = Snap::getSnapToken($params);

        return view('/after_login/invoice', compact('invoiceGame','snapToken'));
    }

    public function handleMidtransNotification(Request $request)
    {
        try {
            Log::info('Midtrans Notification Received', $request->all());

            // Get the relevant data from the incoming request
            $orderId = $request->input('order_id');
            $transactionStatus = $request->input('transaction_status');

            // Check if the transaction is successful
            if ($transactionStatus === 'capture') {
                // Find the corresponding invoice in your database
                $invoiceGame = invoice_game::where('kodepembayaran_invoice', $orderId)->first();

                if ($invoiceGame) {
                    // Update the status to "Lunas" or any other status you prefer
                    $invoiceGame->status = 'Lunas';
                    $invoiceGame->save();

                    // You may also perform other tasks here, such as sending email notifications, etc.

                    // Return a response to Midtrans
                    return response('Transaction status updated successfully.', 200);
                } else {
                    Log::error('Invoice not found for order ID: ' . $orderId);
                }
            } else {
                Log::warning('Unexpected transaction status: ' . $transactionStatus);
            }
        } catch (\Exception $e) {
            Log::error('Error handling Midtrans notification: ' . $e->getMessage());
        }

        // If the transaction status is not 'capture' or the invoice is not found, return an error response
        return response('Error updating transaction status.', 400);
    }


    // public function callback(Request $request)
    // {
    //     $serverKey = config('midtrans.server_key');
    //     $hashed =  hash ("sha512",$request->order_id.$request->status_code.$request->gross_amount.$serverKey);

    //     if($hashed == $request->signature_key)
    //     {
    //         if($request->transaction_status == 'capture')
    //         {
    //             $invoiceGame = invoice_game::find($request->order_id);
    //             $invoiceGame->update(['status'=>'Lunas']);
    //         }
    //     }
    // }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture') {
                // Check if the invoice_game with the specified ID exists
                $invoiceGame = invoice_game::find($request->order_id);

                if ($invoiceGame) {
                    // Update the status to 'Lunas'
                    $invoiceGame->update(['status' => 'Lunas']);

                    // Log the successful update
                    Log::info("Invoice {$request->order_id} status updated to 'Lunas'");
                } else {
                    // Log an error if the invoice_game is not found
                    Log::error("Invoice {$request->order_id} not found");
                }

                // Send a response to acknowledge the callback
                return response('Callback received and processed successfully', 200);
            }
        }

        // Log an error if the signature doesn't match or the transaction status is not 'capture'
        Log::error("Invalid callback request");

        // Send an error response
        return response('Invalid callback request', 400);
    }


}
