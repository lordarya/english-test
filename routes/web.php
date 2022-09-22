<?php

use App\Http\Controllers\Admin\JawabanPesertasController as AdminJawabanPesertasController;
use App\Http\Controllers\Admin\PesertasController as AdminPesertasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Peserta\DashboardPesertaController;
use App\Http\Controllers\Peserta\SectionLinsteningController;
use App\Http\Controllers\Peserta\SectionReadingController;
use App\Http\Controllers\Peserta\StoreJawabanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::resource('home', HomeController::class);


Route::group(['middleware' => ['role:admin', 'auth'], 'prefix' => 'admin',], function () {
    Route::resource('jawabanPesertas', AdminJawabanPesertasController::class);
    Route::resource('pesertas', AdminPesertasController::class);
});

route::group(['middleware' => ['role:peserta', 'auth'], 'prefix' => 'english-test'], function () {
    Route::resource('dashboard', DashboardPesertaController::class);
    Route::resource('storejawaban', StoreJawabanController::class);
});

route::group(['middleware' => ['role:peserta', 'permission:listening', 'auth'], 'prefix' => 'listening'], function () {
    Route::resource('listeningsection', SectionLinsteningController::class);
});

route::group(['middleware' => ['role:peserta', 'permission:reading', 'auth'], 'prefix' => 'reading'], function () {
    Route::resource('readingsection', SectionReadingController::class);
});
