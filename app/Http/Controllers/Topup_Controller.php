<?php

namespace App\Http\Controllers;

use App\Models\invoice_game;
use Illuminate\Http\Request;
use App\Models\item_game;
use App\Models\type_game;
use Illuminate\Support\Facades\Auth;
use Faker\Factory as Faker;

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
        $item = $request->input("item.{$index}");
        $promo = $request->input("promo.{$index}");

        $server_text = '';

        if ($server == 1) {
            $server_text = 'America';
        } elseif ($server == 2) {

            $server_text = 'Europe';
        } elseif ($server == 3) {

            $server_text = 'Asia';
        }

        $user = Auth::user();

        $faker = Faker::create();

         $topup = new invoice_game ([

            'id_user' => $user->id,
            'nama_pembeli' => $user->fullname,
            'kodepembayaran_invoice' => $faker->unique()->creditCardNumber(),
            'game_id' => $gameid,
            'server_game' => $server_text,
            'nama_game' => $namagame,
            'item_game' => $item,
            'hargaitem_game' => $promo,

        ]);

        $topup->save();

        return redirect()->back()->with('success', 'Data inserted successfully!');

        // $namaGame = $request->input('namagame');
        // $items = $request->input('item');
        // $promos = $request->input('promo');
        // $kodePembayaran = $request->input('');

        // foreach ($items as $index => $item) {


        //     invoice_game::create([
        //         //'kodepembayaran_invoice' => 3,
        //         //'nama_game' => $namaGame,
        //         'item_game' => $item,
        //         'hargaitem_game' => $promos[$index],
        //     ]);
        // }

        // return redirect('/topUpOption')->with('success', 'Data Berhasil Terkirim !');



        // $index = $request->input('submit_topup');

        // $request->validate([
        //     'SERVER' => 'required',
        //     'game_id1' => 'required',
        //     "item.{$index}" => 'required',
        //     "promo.{$index}" => 'required',
        // ]);


        // $topup = new invoice_game ([
        //     'server_game' => $request->input('SERVER'),
        //     'game_id' => $request->input('game_id1'),
        //     'item_game' => $request->input("item.{$index}"),
        //     'hargaitem_game' => $request->input("promo.{$index}"),
        // ]);



        // $topup->save();



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
        $item = $request->input("item.{$index}");
        $promo = $request->input("promo.{$index}");

        $server_text = '';

        if ($server == 1) {
            $server_text = 'America';
        } elseif ($server == 2) {

            $server_text = 'Europe';
        } elseif ($server == 3) {

            $server_text = 'Asia';
        }

        $user = Auth::user();

        $faker = Faker::create();

         $topup = new invoice_game ([

            'id_user' => $user->id,
            'nama_pembeli' => $user->fullname,
            'kodepembayaran_invoice' => $faker->unique()->creditCardNumber(),
            'game_id' => $gameid,
            'server_game' => $server_text,
            'nama_game' => $namagame,
            'item_game' => $item,
            'hargaitem_game' => $promo,

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
        $item = $request->input("item.{$index}");
        $promo = $request->input("promo.{$index}");


        $user = Auth::user();

        $faker = Faker::create();

         $topup = new invoice_game ([

            'id_user' => $user->id,
            'nama_pembeli' => $user->fullname,
            'kodepembayaran_invoice' => $faker->unique()->creditCardNumber(),
            'game_id' => $gameid,
            'nama_game' => $namagame,
            'item_game' => $item,
            'hargaitem_game' => $promo,

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
        $item = $request->input("item.{$index}");
        $promo = $request->input("promo.{$index}");

        $server_text = '';

        if ($server == 1) {
            $server_text = 'Asia Pacific';
        } elseif ($server == 2) {

            $server_text = 'Eureope';
        } elseif ($server == 3) {

            $server_text = 'North America';
        }
        elseif ($server == 4) {

            $server_text = 'South America';
        }
        elseif ($server == 5) {

            $server_text = 'Southeash Asia';
        }

        $user = Auth::user();

        $faker = Faker::create();

         $topup = new invoice_game ([

            'id_user' => $user->id,
            'nama_pembeli' => $user->fullname,
            'kodepembayaran_invoice' => $faker->unique()->creditCardNumber(),
            'game_id' => $gameid,
            'server_game' => $server_text,
            'nama_game' => $namagame,
            'item_game' => $item,
            'hargaitem_game' => $promo,

        ]);

        $topup->save();

        return redirect()->back()->with('success', 'Data inserted successfully!');


    }

}
