<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Auth;

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

/*
Route::get('/', function () {
    return view('login');
});*/

Route::get('/', function () {
    if(Auth::check()) {
        return view('tables');
    }
    return redirect()->route('login');
});

Route::get('/home', function () {
    return view('tables');
})->name('tables');



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
