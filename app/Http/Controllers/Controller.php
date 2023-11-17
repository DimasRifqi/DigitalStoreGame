<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function aboutctrl()
    {
        return view('about');
    }

    public function contactctrl()
    {
        return view('contact');
    }

    public function loginctrl()
    {
        return view('login');
    }

    public function indexctrl()
    {
        return view('index');
    }

    public function topupctrl()
    {
        return view('topupGI');
    }

    public function aboutlogctrl()
    {
        return view('aboutlogged');
    }

    public function contactlogctrl()
    {
        return view('contactlogged');
    }

    public function invoice2ctrl()
    {
        return view('invoice2');
    }

    public function widgetctrl()
    {
        return view('widget');
    }


    public function testi_up_ctrl()
    {
        return view('testimonialupdate');
    }


    public function testi_add_ctrl()
    {
        return view('testimonialadd');
    }

    // public function signupctrl()
    // {
    //     return view('signup');
    // }

    public function signadmctrl()
    {
        return view('signupadmin');
    }

    public function dashboardctrl()
    {
        return view('dashboard');
    }

    public function dashminctrl()
    {
        return view('dashboardadmin');
    }

    public function settingctrl()
    {
        return view('setting');
    }

    public function signinadmctrl()
    {
        return view('signinadmin');
    }

    public function datamembctrl()
    {
        return view('datatablemember');
    }

    public function paymentallctrl()
    {
        return view('datatablepaymentall');
    }

    public function paymentmblctrl()
    {
        return view('datatablepaymentmobile');
    }

    public function paymentpcctrl()
    {
        return view('datatablepaymentpc');
    }

    public function testictrl()
    {
        return view('datatabletestimonial');
    }
}
