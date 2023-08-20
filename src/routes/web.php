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

//テスト
//Route::get('/login', function () {return view('auth.Login');});
Route::get('/login', function () { return view('auth.Login'); })->name('login');
Route::get('/register', function () {return view('auth.Register');});
Route::get('/thanks', function () {return view('RegisterDone');});
Route::get('/done', function () {return view('ReservationDone');});
Route::get('/mypage', function () {return view('Mypage');});



//以下は実装済み
Route::middleware('auth')->group(function () {
    Route::get('/',[ShopController::class,'shopAll']);
    }
);

Route::post('/logout',[AuthController::class,'logout']);