<?php

use App\Http\Controllers\ContactController;
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
    return view('/before_login/index');
});


use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchGameController;


Route::get('/about', [Controller::class, 'aboutctrl'])->name('about');
Route::get('/login', [Controller::class, 'loginctrl'])->name('login');
Route::get('/index', [Controller::class, 'indexctrl'])->name('index');
Route::get('/aboutlogged', [Controller::class, 'aboutlogctrl'])->name('aboutlogged');
Route::get('/invoice2', [Controller::class, 'invoice2ctrl'])->name('invoice2');
Route::get('/widget', [Controller::class, 'widgetctrl'])->name('widget');
Route::get('/testimonialupdate', [Controller::class, 'testi_up_ctrl'])->name('testimonialupdate');
Route::get('/testimonialadd', [Controller::class, 'testi_add_ctrl'])->name('testimonialadd');
Route::get('/signupadmin', [Controller::class, 'signadmctrl'])->name('signupadmin');
Route::get('/dashboard', [Controller::class, 'dashboardctrl'])->name('dashboard');
Route::get('/dashboardadmin', [Controller::class, 'dashminctrl'])->name('dashboardadmin');
Route::get('/setting', [Controller::class, 'settingctrl'])->name('setting');
Route::get('/datatablemember', [Controller::class, 'datamembctrl'])->name('datatablemember');
Route::get('/datatablepaymentall', [Controller::class, 'paymentallctrl'])->name('datatablepaymentall');
Route::get('/datatablepaymenmobile', [Controller::class, 'paymentmblctrl'])->name('datatablepaymentmobile');
Route::get('/datatablepaymentpc', [Controller::class, 'paymentpcctrl'])->name('datatablepaymentpc');
Route::get('/datatabletestimonial', [Controller::class, 'testictrl'])->name('datatabletestimonial');


//register
Route::get('/signup', [RegisterController::class, 'loginctrl'])->name('signup');
Route::post('/signup', [RegisterController::class, 'loginform'])->name('user_login');

//login
Route::get('/login', [LoginController::class, 'loginctrl'])->name('login');
Route::post('/login', [LoginController::class, 'loginform'])->name('login_form');

//logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//TopUP
Route::get('/topupGI', [Controller::class, 'topupGIctrl'])->name('topupGI');
Route::get('/topupHSR', [Controller::class, 'topupHSRctrl'])->name('topupHSR');
Route::get('/topupML', [Controller::class, 'topupMLctrl'])->name('topupML');
Route::get('/topupTOF', [Controller::class, 'topupTOFctrl'])->name('topupTOF');

//contact
Route::get('/contactlogged', [ContactController::class, 'contactlogctrl'])->name('contactlogged');
Route::post('/contactlogged', [ContactController::class, 'contact_loggedform'])->name('contactlogged_form');

//contact logged
Route::get('/contact', [ContactController::class, 'contactctrl'])->name('contact');
Route::post('/contact', [ContactController::class, 'contactform'])->name('contact_form');

//Serching Game
Route::get('/search/game', [SearchGameController::class, 'search'])->name('search.game');
Route::get('/games/{id_typegame}', [SearchGameController::class, 'show'])->name('game.show');
