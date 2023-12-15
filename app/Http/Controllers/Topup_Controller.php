<?php

namespace App\Http\Controllers;

use App\Models\invoice_game;
use Illuminate\Http\Request;
use App\Models\item_game;
use App\Models\type_game;
use Illuminate\Support\Facades\Auth;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\invoiceController;

class Topup_Controller extends Controller
{
    public function topupGIctrl()
    {
         $topup_item = item_game::where('id_typegame', 1)->get();
         $game = type_game::where('id_typegame', 1)->first();

        return view('/after_login/topUpOption',

            compact('topup_item','game'),

            [

            "welkin" => "Welkin",
            "genesis" => "Genesis",

        ]);
    }

    public function topupformGI(Request $request)
    {
        //dd($request->all());
        $index = $request->input('submit_topup');

        $server = $request->input('SERVER');
        $gameid = $request->input('game_id1');
        $namagame = $request->input('namagame');
        $tipGame = $request->input('tipegame');
        $item = $request->input("item.{$index}");
        $promo = $request->input("promo.{$index}");

        $user = Auth::user();
        $faker = Faker::create();

        $topup = new invoice_game ([

            'id_user' => $user->id,
            'nama_pembeli' => $user->fullname,
            'email_pembeli' => $user->email,
            'number_pembeli' => $user->phone,
            'kodepembayaran_invoice' => $faker->unique()->creditCardNumber(),
            'game_id' => $gameid,
            'server_game' => $server,
            'nama_game' => $namagame,
            'tipe_game' => $tipGame,
            'item_game' => $item,
            'hargaitem_game' => $promo,
            'tanggal_pembelian' => now(),

        ]);
        $topup->save();



        return redirect()->route('invoice');
        //return redirect()->action([invoiceController::class, 'invoicectrl'])->name('invoice')->with('success', 'Top-up successful!');
        //return redirect()->action(['\App\Http\Controllers\invoiceController', 'invoicectrl'])->with('success', 'Top-up successful!');

    }

    public function topupHSRctrl()
    {
        $topup_item = item_game::where('id_typegame', 2)->get();
         $game = type_game::where('id_typegame', 2)->first();

        return view('/after_login/topUpOption',

            compact('topup_item','game'),

            [

            "welkin" => "Expess Supply Pass",
            "genesis" => "Oneiric Shard",

        ]);
    }

    public function topupformHSR(Request $request)
    {
        //dd($request->all());
        $index = $request->input('submit_topup');

        $server = $request->input('SERVER');
        $gameid = $request->input('game_id1');
        $namagame = $request->input('namagame');
        $tipGame = $request->input('tipegame');
        $item = $request->input("item.{$index}");
        $promo = $request->input("promo.{$index}");

        $user = Auth::user();
        $faker = Faker::create();

        $topup = new invoice_game ([

            'id_user' => $user->id,
            'nama_pembeli' => $user->fullname,
            'email_pembeli' => $user->email,
            'number_pembeli' => $user->phone,
            'kodepembayaran_invoice' => $faker->unique()->creditCardNumber(),
            'game_id' => $gameid,
            'server_game' => $server,
            'nama_game' => $namagame,
            'tipe_game' => $tipGame,
            'item_game' => $item,
            'hargaitem_game' => $promo,
            'tanggal_pembelian' => now(),

        ]);
        $topup->save();

        return redirect()->back()->with('success', 'Data inserted successfully!');

    }


    public function topupMLctrl()
    {

        $topup_item = item_game::where('id_typegame', 3)->get();
         $game = type_game::where('id_typegame', 3)->first();

        return view('/after_login/topUpInput',

            compact('topup_item','game'),

            [

            "welkin" => "Weekly Diamond",
            "genesis" => "Diamond",

        ]);
    }

    public function topupformML(Request $request)
    {
        //dd($request);

        $index = $request->input('submit_topup');
        $gameid = $request->input('game_id1');
        $namagame = $request->input('namagame');
        $tipeGame = $request->input('tipegame');
        $item = $request->input("item.{$index}");
        $promo = $request->input("promo.{$index}");


        $user = Auth::user();
        $faker = Faker::create();

        $topup = new invoice_game ([

            'id_user' => $user->id,
            'nama_pembeli' => $user->fullname,
            'email_pembeli' => $user->email,
            'number_pembeli' => $user->phone,
            'kodepembayaran_invoice' => $faker->unique()->creditCardNumber(),
            'game_id' => $gameid,
            'nama_game' => $namagame,
            'tipe_game' => $tipeGame,
            'item_game' => $item,
            'hargaitem_game' => $promo,
            'tanggal_pembelian' => now(),

        ]);
        $topup->save();

        return redirect()->back()->with('success', 'Data inserted successfully!');


    }


    public function topupTOFctrl()
    {

        $topup_item = item_game::where('id_typegame', 4)->get();
         $game = type_game::where('id_typegame', 4)->first();

        return view('/after_login/topUpOption1',

            compact('topup_item','game'),

            [

            "welkin" => "Monthly & Pack",
            "genesis" => "Tanium",

        ]);
    }

    public function topupformTOF(Request $request)
    {
        //dd($request->all());
        $index = $request->input('submit_topup');

        $server = $request->input('SERVER');
        $gameid = $request->input('game_id1');
        $namagame = $request->input('namagame');
        $tipGame = $request->input('tipegame');
        $item = $request->input("item.{$index}");
        $promo = $request->input("promo.{$index}");

        $user = Auth::user();
        $faker = Faker::create();

        $topup = new invoice_game ([

            'id_user' => $user->id,
            'nama_pembeli' => $user->fullname,
            'email_pembeli' => $user->email,
            'number_pembeli' => $user->phone,
            'kodepembayaran_invoice' => $faker->unique()->creditCardNumber(),
            'game_id' => $gameid,
            'server_game' => $server,
            'nama_game' => $namagame,
            'tipe_game' => $tipGame,
            'item_game' => $item,
            'hargaitem_game' => $promo,
            'tanggal_pembelian' => now(),

        ]);
        $topup->save();

        return redirect()->back()->with('success', 'Data inserted successfully!');


    }

}
