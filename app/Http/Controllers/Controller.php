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

    public function topupGIctrl()
    {

        return view('/after_login/topUpOption', [
            "name" => "Genshin Impact",
            "logo" => "img/GITopUp/genshin.png",
            "welkin" => "Welkin",
            "genesis" => "Genesis",

            "foto1" => "img/GITopUp/1gene.png",
            "foto2" => "img/GITopUp/2gene.png",
            "foto3" => "img/GITopUp/3gene.png",
            "foto4" => "img/GITopUp/4gene.png",
            "foto5" => "img/GITopUp/5gene.png",
            "foto6" => "img/GITopUp/6gene.png",
            "foto7" => "img/GITopUp/welkin.png",
            "foto8" => "img/GITopUp/welkin.png",
            "foto9" => "img/GITopUp/welkin.png",

            "item1" => "60 Genesis",
            "item2" => "300+30 Genesis",
            "item3" => "980+110 Genesis",
            "item4" => "1980+260 Genesis",
            "item5" => "3280+600 Genesis",
            "item6" => "6480+1600 Genesis",
            "item7" => "1x Welkin Moon",
            "item8" => "2x Welkin Moon",
            "item9" => "3x Welkin Moon",

            "promo1" => "Rp.13.000",
            "promo2" => "Rp.65.000",
            "promo3" => "Rp.205.000",
            "promo4" => "Rp.410.000",
            "promo5" => "Rp.640.000",
            "promo6" => "Rp.1.250.000",
            "promo7" => "Rp.65.000",
            "promo8" => "Rp.130.000",
            "promo9" => "Rp.190.000",

            "harga1" => "Rp.17.000",
            "harga2" => "Rp.81.000",
            "harga3" => "Rp.255.000",
            "harga4" => "Rp.490.000",
            "harga5" => "Rp.815.000",
            "harga6" => "Rp.1.630.000",
            "harga7" => "Rp.81.000",
            "harga8" => "Rp.162.000",
            "harga9" => "Rp.243.000"

        ]);
    }

    public function topupHSRctrl()
    {
        return view('/after_login/topUpOption', [
            "name" => "Honkai Stair Rail",
            "logo" => "img/HSRTopUp/hsr.png",
            "welkin" => "Expess Suplly Pass",
            "genesis" => "Oneiric Shard",

            "foto1" => "img/HSRTopUp/image 49.png",
            "foto2" => "img/HSRTopUp/image 50.png",
            "foto3" => "img/HSRTopUp/image 51.png",
            "foto4" => "img/HSRTopUp/image 52.png",
            "foto5" => "img/HSRTopUp/image 53.png",
            "foto6" => "img/HSRTopUp/image 54.png",
            "foto7" => "img/HSRTopUp/image 55.png",
            "foto8" => "img/HSRTopUp/image 55.png",
            "foto9" => "img/HSRTopUp/image 55.png",

            "item1" => "60 Oneiric Shard",
            "item2" => "300+30 Oneiric Shard",
            "item3" => "980+110 Oneiric Shard",
            "item4" => "1980+260 Oneiric Shard",
            "item5" => "3280+600 Oneiric Shard",
            "item6" => "6480+1600 Oneiric Shard",
            "item7" => "1x Oneiric Shard",
            "item8" => "2x Oneiric Shard",
            "item9" => "3x Oneiric Shard",

            "promo1" => "Rp.13.000",
            "promo2" => "Rp.65.000",
            "promo3" => "Rp.205.000",
            "promo4" => "Rp.410.000",
            "promo5" => "Rp.640.000",
            "promo6" => "Rp.1.250.000",
            "promo7" => "Rp.65.000",
            "promo8" => "Rp.130.000",
            "promo9" => "Rp.190.000",

            "harga1" => "Rp.17.000",
            "harga2" => "Rp.81.000",
            "harga3" => "Rp.255.000",
            "harga4" => "Rp.490.000",
            "harga5" => "Rp.815.000",
            "harga6" => "Rp.1.630.000",
            "harga7" => "Rp.81.000",
            "harga8" => "Rp.162.000",
            "harga9" => "Rp.243.000"

        ]);
    }


    public function topupMLctrl()
    {

        return view('/after_login/topUpInput', [
            "name" => "Mobile Legend",
            "logo" => "img/MLTopUp/ml.png",
            "welkin" => "Weekly Diamond Pass",
            "genesis" => "Diamonds",

            "foto1" => "img/MLTopUp/Rectangle 57.png",
            "foto2" => "img/MLTopUp/Rectangle 58.png",
            "foto3" => "img/MLTopUp/Rectangle 59.png",
            "foto4" => "img/MLTopUp/Rectangle 60.png",
            "foto5" => "img/MLTopUp/Rectangle 61.png",
            "foto6" => "img/MLTopUp/Rectangle 62.png",
            "foto7" => "img/MLTopUp/Rectangle 56.png",
            "foto8" => "img/MLTopUp/Rectangle 56.png",
            "foto9" => "img/MLTopUp/Rectangle 56.png",

            "item1" => "250+25 Diamonds",
            "item2" => "500+65 Diamonds",
            "item3" => "1000+155 Diamonds",
            "item4" => "1500+265 Diamonds",
            "item5" => "2500+475 Diamonds",
            "item6" => "5000+1000 Diamonds",
            "item7" => "1x Weekly Diamond Pass",
            "item8" => "2x Weekly Diamond Pass",
            "item9" => "3x Weekly Diamond Pass",

            "promo1" => "Rp.80.000",
            "promo2" => "Rp.155.000",
            "promo3" => "Rp.306.000",
            "promo4" => "Rp.456.000",
            "promo5" => "Rp.657.000",
            "promo6" => "Rp.1.506.000",
            "promo7" => "Rp.33.000",
            "promo8" => "Rp.60.000",
            "promo9" => "Rp.90.000",

            "harga1" => "Rp.90.000",
            "harga2" => "Rp.170.000",
            "harga3" => "Rp.315.000",
            "harga4" => "Rp.490.000",
            "harga5" => "Rp.815.000",
            "harga6" => "Rp.1.630.000",
            "harga7" => "Rp.40.000",
            "harga8" => "Rp.80.000",
            "harga9" => "Rp.120.000"

        ]);
    }

    public function topupTOFctrl()
    {

        return view('/after_login/topUpOption1', [
            "name" => "Tower Of Fantasy",
            "logo" => "img/TOFTopUp/logoTOF.png",
            "welkin" => "Monthly & Pack",
            "genesis" => "Tanium",

            "foto1" => "img/TOFTopUp/image 61.png",
            "foto2" => "img/TOFTopUp/image 62.png",
            "foto3" => "img/TOFTopUp/image 63.png",
            "foto4" => "img/TOFTopUp/image 64.png",
            "foto5" => "img/TOFTopUp/image 65.png",
            "foto6" => "img/TOFTopUp/image 66.png",
            "foto7" => "img/TOFTopUp/Rectangle 64.png",
            "foto8" => "img/TOFTopUp/Rectangle 66.png",
            "foto9" => "img/TOFTopUp/Rectangle 65.png",

            "item1" => "60 Tanium",
            "item2" => "310 Tanium",
            "item3" => "1020 Tanium",
            "item4" => "2080 Tanium",
            "item5" => "3480Tanium",
            "item6" => "6980 Tanium",
            "item7" => "Monthly Pass Supllies",
            "item8" => "Upgrade  Pass",
            "item9" => "Collector's Edition Pass",

            "promo1" => "Rp.15.000",
            "promo2" => "Rp.65.000",
            "promo3" => "Rp.200.000",
            "promo4" => "Rp.400.000",
            "promo5" => "Rp.650.000",
            "promo6" => "Rp.1.220.000",
            "promo7" => "Rp.70.000",
            "promo8" => "Rp.160.000",
            "promo9" => "Rp.300.000",

            "harga1" => "Rp.25.000",
            "harga2" => "Rp.85.000",
            "harga3" => "Rp.215.000",
            "harga4" => "Rp.420.000",
            "harga5" => "Rp.675.000",
            "harga6" => "Rp.1.250.000",
            "harga7" => "Rp.90.000",
            "harga8" => "Rp.180.000",
            "harga9" => "Rp.350.000"

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
