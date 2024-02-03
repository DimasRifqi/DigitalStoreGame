<?php

namespace App\Http\Controllers;

use App\Models\Pamflet;
use App\Models\testimoni;
use App\Models\invoice_game;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function aboutctrl()
    {
        return view('/before_login/about');
    }



    public function indexctrl()
    {
        $testimonials = testimoni::all();
        $DataPamflet = Pamflet::all();
        return view('/before_login/index', compact('testimonials', 'DataPamflet'));
    }

    public function dashboardctrl()
    {
        $testimonials = testimoni::all();
        $DataPamflet = Pamflet::all();
        return view('/after_login/dashboard', compact('testimonials','DataPamflet'));
    }

    public function aboutlogctrl()
    {
        return view('/after_login/aboutlogged');
    }



}
