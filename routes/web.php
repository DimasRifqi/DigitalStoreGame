<?php

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
    return view('index');
});


use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisterController;


Route::get('/about', [Controller::class, 'aboutctrl'])->name('about');
Route::get('/contact', [Controller::class, 'contactctrl'])->name('contact');
Route::get('/login', [Controller::class, 'loginctrl'])->name('login');
Route::get('/index', [Controller::class, 'indexctrl'])->name('index');
Route::get('/topupGI', [Controller::class, 'topupctrl'])->name('topupGI');
Route::get('/aboutlogged', [Controller::class, 'aboutlogctrl'])->name('aboutlogged');
Route::get('/contactlogged', [Controller::class, 'contactlogctrl'])->name('contactlogged');
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

Route::get('/signup', [RegisterController::class, 'show'])->middleware('guest');
Route::post('/signup', [RegisterController::class, 'store'])->name('user.store');

Route::get('/login', [Controller::class, 'loginctrl'])->name('login');
Route::post('/login', [Controller::class, 'loginctrl'])->name('login');
// routes/web.php

// Route::get('/register', 'Controller\RegisterController@showRegistrationForm')->name('register');


// Route::get('/register', 'RegisterController@login');

// Contoh route yang memerlukan otentikasi
Route::middleware(['auth'])->group(function () {
    // Rute-rute yang memerlukan otentikasi

});
