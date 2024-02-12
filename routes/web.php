<?php

use App\Http\Controllers\{ValidationController,VarianController};
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
})->name('home');


Route::middleware('guest')->group(function(){
    Route::controller(ValidationController::class)->group(function(){
        Route::get('/login','UILogin')->name('login');
        Route::post('/validationLogin','ValidationLogin')->name('validasi.login');
        Route::post('/validationRegister','ValidationRegister')->name('validasi.register');
    });
});



Route::controller(VarianController::class)->group(function(){
    Route::get('/varian','index')->name('varian');
    Route::get('select','select')->name('varian.select');
    Route::get('price','price')->name('varian.price');
    Route::get('/varian/show/{id}','show')->name('varian.show');
});
