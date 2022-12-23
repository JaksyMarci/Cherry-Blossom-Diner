<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;
use App\Http\Controllers\MenuController;
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
    /**
     * *HOME PAGE*
     * only authorized user can see it.
     * after login you end up here.
     * All the tables are visible. You can select the menu by clicking a table
     */
    Route::get('/home', function () {
        return redirect()->route('tables.index');
    })->name('tables');

    /**
     * *LOGIN PAGE*
     * Every other page is reached via login.
     * Every waiter/waitress has their email and password combo which they can use to authenticate.
     */
    Route::get('/login', function () {
        return redirect()->route('tables.index');
    })->name('tables');

    /**
    * *Menu PAGE*
    * only authorized user can see it.
    * You can look through the whole menu.
    */
    Route::get('/menu', function () {
        return redirect()->route('menu.index');
    })->name('menu');

    /**
    * *Table PAGE*
    * only authorized user can see it.
    * You can see the tales state all he menu items of the table. Order and pay can be done here.
    */
    Route::put('/tables/{table}', [TableController::class, 'update'])->name('tables.update');

    /**
    * *Bill PAGE*
    * only authorized user can see it.
    * You can see the bill here. Her you can finish the ordering y the pay button. It clears he able and makes it free.
    */
    Route::get('/tables/bill/{table}', [TableController::class, 'bill'])->name('tables.bill');

    /**
    * *delete route*
    * only authorized user can delete.
    * Deletes thee menu items, clears he state, and the waiter name.
    */
    Route::delete('items/bill/{table}', [TableController::class, 'destroy'])->name('tables.destroy');

    /**
     * *DOCUMENTATION PAGE*
     * only the admin user can see it.
     * It's our documentation page about our API's.
     * Every API endpoint is documented here.
     */
    Route::get('/documentation', function () {
        if (Auth::user()->is_admin) {
            return view('./scribe/index');
        } else {
            return redirect()->route('tables.index');
        }
    })->name('documentation');

    Route::get('/', function () {
        return redirect()->route('tables.index');
    })->name('tables');

    Route::get('', function () {
        return redirect()->route('tables.index');
    })->name('tables');

    Route::resource('tables', TableController::class);
    Route::resource('menu', MenuController::class);
});


require __DIR__.'/auth.php';
