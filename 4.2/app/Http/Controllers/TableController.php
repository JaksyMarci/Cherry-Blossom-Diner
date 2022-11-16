<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tables;
use Illuminate\Support\Facades\Auth;

class TableController extends Controller
{
    public function show($id) {
        if(Auth::user()){
            $table = Tables::findOrFail($id);
            return $table->foods();
        } else {
            abort(404);
        }
    }

    public function bill($id) {
        if(Auth::user()){
            $table = Tables::findOrFail($id);
            $bill = 0;
            foreach($table->foods as $food) {
                $bill = $food->amount * $food->price;
            }
            $table->bill->update($bill);
            return $table->bill;
        } else {
            abort(404);
        }
    }


}
