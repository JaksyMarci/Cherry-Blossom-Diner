<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tables;
use App\Models\Menu;
use Hamcrest\Type\IsNumeric;
use Illuminate\Support\Facades\Auth;

class TableController extends Controller
{
    public function index()
    {
        $tables = Tables::all();
        return view('tables', ['tables' => $tables]);
    }
    // returns the specified table informations to show
    public function show($id)
    {
        if (Auth::user()) {
            $user = Auth::user();
            $table = Tables::findOrFail($id);
            return view('table', ['table' => $table, 'user' => $user]);
        } else {
            abort(404);
        }
    }

    // returns the bill of the specified table
    public function bill($id)
    {
        if (Auth::user()) {
            $table = Tables::findOrFail($id);
            $bill = 0;
            foreach ($table->foods as $food) {
                $bill = $food->amount * $food->price;
            }
            $table->bill->update($bill);
            return $table->bill;
        } else {
            abort(404);
        }
    }

    // sends the form to the update function
    public function editOrder(Request $request, $id)
    {
        if (Auth::user()) {
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
    public function pay($id)
    {
        if (Auth::user()) {
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
    public function update(Request $request, $id)
    {
        if (Auth::user()) {
            $table = Tables::findOrFail($id);
            if (isset($request->state)) {
                if ($request->state == 0 || $request->state == 1 || $request->state == 2) {
                    $table->update([
                        'state' => $request->state
                    ]);
                    return view('table', ['table' => $table]);
                } else {
                    abort(404);
                }
            }
            $menuItemCount = count(Menu::all());
            for ($i=0; $i<$menuItemCount; $i++) {
                if (is_numeric($request->$i) && $request->$i > 0) {
                    $table->menus()->attach($i, ['menu_id' => $i, 'amount' => $request->$i]);
                }
            }
            return view('table', ['table' => $table]);
        } else {
            abort(404);
        }
    }
}
