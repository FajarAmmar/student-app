<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;

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

Route::get('/',[HomeController::class,"index"]);

Route::get('/redirects',[HomeController::class,"redirects"]);

Route::get('/studyplan',[HomeController::class,"studyplan"]);

Route::get('/addplan',[HomeController::class,"studentplan"]);

Route::get('/studentdata',[adminController::class,"studentdata"]);

Route::get('/studentplan',[adminController::class,"studentplan"]);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
