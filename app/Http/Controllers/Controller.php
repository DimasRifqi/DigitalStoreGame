<?php

namespace App\Http\Controllers;

use App\Models\item_game;
use App\Models\type_game;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function aboutctrl()
    {
        return view('/before_login/about');
    }


    public function indexctrl()
    {
        return view('/before_login/index');
    }

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

    public function aboutlogctrl()
    {
        return view('/after_login/aboutlogged');
    }

    public function invoice2ctrl()
    {
        return view('/after_login/invoice2');
    }

    public function widgetctrl()
    {
        return view('/admin/widget');
    }


    public function testi_up_ctrl()
    {
        return view('/admin/testimonialupdate');
    }


    public function testi_add_ctrl()
    {
        return view('/admin/testimonialadd');
    }

    // public function signupctrl()
    // {
    //     return view('signup');
    // }

    public function signadmctrl()
    {
        return view('/admin/signupadmin');
    }

    public function dashboardctrl()
    {
        return view('/after_login/dashboard');
    }

    public function dashminctrl()
    {
        return view('/admin/dashboardadmin');
    }

    public function settingctrl()
    {
        return view('/after_login/setting');
    }

    public function signinadmctrl()
    {
        return view('/admin/signinadmin');
    }

    public function datamembctrl()
    {
        return view('/admin/datatablemember');
    }

    public function paymentallctrl()
    {
        return view('/admin/datatablepaymentall');
    }

    public function paymentmblctrl()
    {
        return view('/admin/datatablepaymentmobile');
    }

    public function paymentpcctrl()
    {
        return view('/admin/datatablepaymentpc');
    }

    public function testictrl()
    {
        return view('/admin/datatabletestimonial');
    }
}
