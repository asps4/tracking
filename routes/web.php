<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KotaController;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Rw;
use App\Models\Prakerin;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\RwController;
use App\Http\Controllers\PrakerinController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FontController;
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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){

    Route::get('/',[DashboardController::class,'index']) ->name('admin');

    Route::resource('provinsi',ProvinsiController::class);
    Route::resource('kota',KotaController::class);
    Route::resource('kecamatan',KecamatanController::class);
    Route::resource('kelurahan',KelurahanController::class);
    Route::resource('rw',RwController::class);
    Route::resource('prakerin',PrakerinController::class);

});


 //Frontend
 Route::resource('/',FontController::class);
