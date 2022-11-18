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

Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return redirect()->route('tables.index');
    })->name('tables');

    Route::get('/login', function () {
        return redirect()->route('tables.index');
    })->name('tables');

    Route::get('/', function () {
        return redirect()->route('tables.index');
    })->name('tables');

    Route::get('', function () {
        return redirect()->route('tables.index');
    })->name('tables');

});

Route::resource('tables', TableController::class);

require __DIR__.'/auth.php';
