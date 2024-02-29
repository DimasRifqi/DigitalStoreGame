<?php

use App\Models\Pamflet;
use App\Models\testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\invoiceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/midtrans-callback', [invoiceController::class, 'callback']);

Route::get('/items', [ItemController::class, 'items']);

// Route::get('/index', function () {
//     $testimonials = testimoni::all();
//     $DataPamflet = Pamflet::all();
//     return view('/before_login/index', compact('testimonials', 'DataPamflet'));
// });





