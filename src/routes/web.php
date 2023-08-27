<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//以下は実装済み
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'register']);
Route::get('/thanks', [AuthController::class,'registerDone']);
Route::get('/done', [ReservationController::class,'reservationDone']);


Route::middleware('auth')->group(function () {
    Route::get('/',[ShopController::class,'shopAll']);
    Route::get('/detail/{shop_id}', [ShopController::class,'showDetail'])->name('shop.detail');
    Route::get('/mypage', function () {return view('Mypage');});
});


Route::post('/logout',[AuthController::class,'logout']);
Route::post('/reservation/{shop}', [ReservationController::class,'store'])->name('reservation.store');
Route::post('/register',[AuthController::class,'registerAndRedirect']);