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
        return view('/before_login/about');
    }


    public function indexctrl()
    {
        return view('/before_login/index');
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
