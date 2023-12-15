<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\invoice_game;
class AdminController extends Controller
{

    public function dashminctrl()
    {

        if (Auth::check() && Auth::user()->role == 'admin') {
            $invoice = invoice_game::all();
            $totalPerolehan = 0;
            $totalSale = -1;
            return view('/admin/dashboardadmin',compact('invoice','totalPerolehan','totalSale'));
        } else {

            return redirect('/login')->with('error', 'Unauthorized access');
        }

    }

    public function paymentallctrl()
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $invoice = invoice_game::all();
            $totalPerolehan = 0;
            $totalSale = -1;
            return view('/admin/datatablepaymentall',compact('invoice','totalPerolehan','totalSale'));
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
