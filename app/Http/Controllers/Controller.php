<?php

namespace App\Http\Controllers;

use App\Models\invoice_game;
use App\Models\testimoni;
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
        $testimonials = testimoni::all();
        return view('/before_login/index', compact('testimonials'));
    }

    public function dashboardctrl()
    {
        $testimonials = testimoni::all();
        return view('/after_login/dashboard', compact('testimonials'));
    }

    public function aboutlogctrl()
    {
        return view('/after_login/aboutlogged');
    }



}
