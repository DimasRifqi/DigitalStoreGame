<?php

namespace App\Http\Controllers;
use App\Models\invoice_game;
use Illuminate\Http\Request;
use Midtrans\Snap;

class invoiceController extends Controller
{
    public function invoicectrl()
    {

        $userId = auth()->user()->id;
        $invoiceGame = invoice_game::where('status', 'Belum Lunas')
            ->where('id_user', $userId)
            ->orderBy('id_invoice', 'desc')
            ->first();


        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $invoiceGame->id_invoice,
                'gross_amount' => $invoiceGame->hargaitem_game,
            ),
            'customer_details' => array(
                'fullname' => auth()->user()->fullname,
                'email' => auth()->user()->email,
                'phone' => auth()->user()->phone,
            ),
        );

        $snapToken = Snap::getSnapToken($params);

        return view('/after_login/invoice', compact('invoiceGame','snapToken'));
    }
}
