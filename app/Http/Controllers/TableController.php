<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tables;
use Illuminate\Support\Facades\Auth;

class TableController extends Controller
{
    public function index() {
        $tables = Tables::all();
        return view('tables', ['tables' => $tables]);
    }
    // returns the specified table informations to show
    public function show($id) {
        if(Auth::user()){
            $table = Tables::findOrFail($id);
            return view('menu', ['table' => $table]);
        } else {
            abort(404);
        }
    }

    // returns the bill of the specified table
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

    // sends the form to the update function
    public function editOrder(Request $request, $id) {
        if(Auth::user()) {
            $table = Tables::findOrFail($id);
            $validated = $request->validate([
                'amount' => 'required|integer'
            ]);
            $found = false;
            $foundId = 0;
            // TODO: update every pivot data with the right amount
            // foreach($table->foods as $food) {
            //     if($request->id == $food->id) {
            //         $found = true;
            //         $foundId = $food->id;
            //     }
            // }

            // if($found) {
            //     $table->foods->find($foundId)->update()
            // }
        } else {
            abort(404);
        }
    }

    // after the guest payed, the table become free, and the bill turns to 0
    public function pay($id) {
        if(Auth::user()){
            $table = Tables::findOrFail($id);
            $table->update([
                'bill' => 0,
                'state' => 0,
            ]);
            return $table->show($id);
        } else {
            abort(404);
        }
    }

    // if the table is free, it will be reserved
    public function reserve($id) {
        if(Auth::user()){
            $table = Tables::findOrFail($id);
            if($table->state == 0) {
                $table->update([
                    'state' => 0
                ]);
                return $table->show($id);
            } else {
                abort(404);
            }
        } else {
            abort(404);
        }
    }

    // if the table is free or reserved, it can be set in use state
    // when the guests sit there
    public function inUse($id) {
        if(Auth::user()){
            $table = Tables::findOrFail($id);
            if($table->state == 0 or $table->state == 1) {
                $table->update([
                    'state' => 2
                ]);
                return $table->show($id);
            } else {
                abort(404);
            }
        } else {
            abort(404);
        }
    }

    //updates the table
    public function update(Request $request, $id) {
        // TODO: request function
    }
}
