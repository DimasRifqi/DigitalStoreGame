<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\invoice_game;
use App\Models\testimoni;
use App\Models\contact_us;
class AdminController extends Controller
{

    public function dashminctrl()
    {

        if (Auth::check() && Auth::user()->role == 'admin') {
            $invoice = invoice_game::all();
            $totalPerolehan = 0;
            $totalSale = 0;

            return view('/admin/dashboardadmin',compact('invoice','totalPerolehan','totalSale'));
        } else {

            return redirect('/login')->with('error', 'Unauthorized access');
        }

    }

    public function paymentallctrl()
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $invoice = invoice_game::all();

            return view('/admin/datatablepaymentall',compact('invoice'));
        } else {

            return redirect('/login')->with('error', 'Unauthorized access');
        }
    }

    public function widgetctrl()
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $Testimoni = testimoni::all();

            return view('/admin/widget',compact('Testimoni'));
        } else {

            return redirect('/login')->with('error', 'Unauthorized access');
        }

    }

    public function contactformctrl()
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $formContact = contact_us::all();

            return view('/admin/contactform',compact('formContact'));
        } else {

            return redirect('/login')->with('error', 'Unauthorized access');
        }

    }

    public function testi_up_ctrl($id_testimoni)
    {

        if (Auth::check() && Auth::user()->role == 'admin') {
            $testimonial = testimoni::find($id_testimoni);

            return view('/admin/testimonialupdate',compact('testimonial'));
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






    public function testi_add_ctrl()
    {
        return view('/admin/testimonialadd');
    }


    public function signadmctrl()
    {
        return view('/admin/signupadmin');
    }



}