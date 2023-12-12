<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashminctrl()
    {
        // Check if the user is logged in and has the role of 'admin'
        if (Auth::check() && Auth::user()->role == 'admin') {
            return view('/admin/dashboardadmin');
        } else {
         
            return redirect('/login')->with('error', 'Unauthorized access');
        }
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



}
