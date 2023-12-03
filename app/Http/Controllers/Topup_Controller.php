<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item_game;
use App\Models\topup_game;
use App\Models\type_game;

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

    public function topupform(Request $request)
    {
        $request->validate([
            'selected_item_name' => 'required',
            'selected_item_promo' => 'required',
            'user_id' => 'required',
            'selected_server' => 'required',
        ]);

        $topup = new topup_game ([
            //'id' => $request->message1,
            'server' => $request->input('selected_server'),
            'game_id' => $request->input('user_id'),
            'id_typegame' => $request->input('selected_item_name'),
            'id_item' => $request->input('selected_item_promo'),
        ]);

        $topup->save();

        return redirect('/topUpOption')->with('success', 'Data Berhasil Terkirim !');

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

    public function topupTOFctrl()
    {

        $topup_item = item_game::where('id_typegame', 4)->get();
         $game = type_game::where('id_typegame', 4)->first();

        return view('/after_login/topUpOption',

            compact('topup_item','game'),

            [

            "welkin" => "Monthly & Pack",
            "genesis" => "Tanium",

        ]);
    }
}
