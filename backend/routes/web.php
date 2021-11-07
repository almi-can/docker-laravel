<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [MainController::class,'index']);
Route::get('/index', [MainController::class,'index']);
Route::get('/network', [MainController::class,'network']);
Route::get('/emby', [MainController::class,'emby']);
Route::get('/rutorrent', [MainController::class,'rutorrent']);