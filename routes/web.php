<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\invoiceController;
use App\Models\testimoni;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $testimonials = testimoni::all();
    return view('/before_login/index', compact('testimonials'));
});


use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchGameController;
use App\Http\Controllers\Topup_Controller;
use App\Http\Controllers\Topup1_Controller;
use App\Http\Controllers\Auth_Controller;
use App\Http\Controllers\User_Controller;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\testimoniController;
use App\Http\Controllers\WAController;

//Route::get('/api/items', [ItemController::class, 'items']);
Route::get('/about', [Controller::class, 'aboutctrl'])->name('about');
Route::get('/login', [Controller::class, 'loginctrl'])->name('login');
Route::get('/index', [Controller::class, 'indexctrl'])->name('index');
Route::get('/aboutlogged', [Controller::class, 'aboutlogctrl'])->name('aboutlogged');
Route::get('/dashboard', [Controller::class, 'dashboardctrl'])->name('dashboard');


//testimoni page admin
Route::get('/widget', [AdminController::class, 'widgetctrl'])->name('widget');
Route::get('/testimonialupdate', [AdminController::class, 'testi_up_ctrl'])->name('testimonialupdate');
Route::get('/testimonialadd', [AdminController::class, 'testi_add_ctrl'])->name('testimonialadd');

//testimoni cread update delete
Route::post('/testimonialadd', [testimoniController::class, 'create'])->name('testimonial_create');
Route::post('/testimonial/update/{id}', [testimoniController::class, 'update'])->name('testimonial_update');
Route::get('/testimonial/delete/{id}', [testimoniController::class, 'delete'])->name('testimonial_delete');

//contact page admin
Route::get('/contactform', [AdminController::class, 'contactformctrl'])->name('contactform');
Route::get('/contacts/delete/{id}', [ContactController::class, 'delete'])->name('contact_delete');

//admin page
Route::get('/dashboardadmin', [AdminController::class, 'dashminctrl'])->name('dashboardadmin');
Route::get('/datatablepaymentall', [AdminController::class, 'paymentallctrl'])->name('datatablepaymentall');

// Route::get('/signupadmin', [AdminController::class, 'signadmctrl'])->name('signupadmin');
// Route::get('/datatablemember', [AdminController::class, 'datamembctrl'])->name('datatablemember');
// Route::get('/datatablepaymenmobile', [AdminController::class, 'paymentmblctrl'])->name('datatablepaymentmobile');
// Route::get('/datatablepaymentpc', [AdminController::class, 'paymentpcctrl'])->name('datatablepaymentpc');
// Route::get('/datatabletestimonial', [AdminController::class, 'testictrl'])->name('datatabletestimonial');


//register
Route::get('/signup', [RegisterController::class, 'loginctrl'])->name('signup');
Route::post('/signup', [RegisterController::class, 'loginform'])->name('user_login');

//login
Route::get('/login', [LoginController::class, 'loginctrl'])->name('login');
Route::post('/login', [LoginController::class, 'loginform'])->name('login_form');

// Setting update
Route::get('/setting', [UserController::class, 'settingctrl'])->name('setting');
Route::post('/setting', [UserController::class, 'update'])->name('user.update');


//logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//top up gi
Route::get('/topupGI', [Topup_Controller::class, 'topupGIctrl'])->name('topupGI');
Route::get('/topupGIIndex', [Topup_Controller::class, 'topupGIIndexctrl'])->name('topupGIIndex');
Route::post('/topuppp', [Topup_Controller::class, 'topupformGI'])->name('topup_form');

//topup hsr
Route::get('/topupHSR', [Topup_Controller::class, 'topupHSRctrl'])->name('topupHSR');
Route::get('/topupHSRIndex', [Topup_Controller::class, 'topupHSRIndexctrl'])->name('topupHSRIndex');
Route::post('/topuppp', [Topup_Controller::class, 'topupformHSR'])->name('topup_form');

//top up ml
Route::get('/topupML', [Topup_Controller::class, 'topupMLctrl'])->name('topupML');
Route::get('/topupMLIndex', [Topup_Controller::class, 'topupMLIndexctrl'])->name('topupMLIndex');
Route::post('/topuppp', [Topup_Controller::class, 'topupformML'])->name('topup_form');

//top up tof
Route::get('/topupTOF', [Topup_Controller::class, 'topupTOFctrl'])->name('topupTOF');
Route::get('/topupTOFIndex', [Topup_Controller::class, 'topupTOFIndexctrl'])->name('topupTOFIndex');
Route::post('/topuppp', [Topup_Controller::class, 'topupformTOF'])->name('topup_form');

//contact
Route::get('/contactlogged', [ContactController::class, 'contactlogctrl'])->name('contactlogged');
Route::post('/contactlogged', [ContactController::class, 'contact_loggedform'])->name('contactlogged_form');

//contact logged
Route::get('/contact', [ContactController::class, 'contactctrl'])->name('contact');
Route::post('/contact', [ContactController::class, 'contactform'])->name('contact_form');

//invoice
Route::get('/invoice', [invoiceController::class, 'invoicectrl'])->name('invoice');


