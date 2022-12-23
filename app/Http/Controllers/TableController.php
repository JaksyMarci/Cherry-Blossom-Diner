<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;
use App\Models\Menu;
use Hamcrest\Type\IsNumeric;
use Illuminate\Support\Facades\Auth;

class TableController extends Controller
{
    public function index()
    {
        $tables = Table::all();
        return view('tables', ['tables' => $tables]);
    }

    // returns the specified table informations to show
    public function show($id)
    {
        if (Auth::user()) {
            $user = Auth::user();
            $table = Table::findOrFail($id);
            return view('table', ['table' => $table, 'user' => $user]);
        } else {
            abort(404);
        }
    }

    // returns the bill of the specified table
    public function bill($id)
    {
        if (Auth::user()) {
            $user = Auth::user();
            $table = Table::findOrFail($id);
            return view('bill', ['table' => $table]);
        } else {
            abort(404);
        }
    }

    // if the table is free, it will be reserved
    public function update(Request $request, $id)
    {
        if (Auth::user()) {
            $user = Auth::user()->id;
            $table = Table::findOrFail($id);
            if (isset($request->state)) {
                if ($request->state == 0 || $request->state == 1 || $request->state == 2) {
                    if ($request->state == 0) {
                        $table->update([
                            'state' => $request->state,
                            'user_id' => null,
                        ]);
                    } else {
                        $table->update([
                            'state' => $request->state,
                            'user_id' => $user,
                        ]);
                    }

                    return redirect()->route('tables.show', ['table' => $table->id, 'user' => $user]);
                } else {
                    abort(404);
                }
            }
            foreach ($table->menus as $menu) {
                $table->menus()->detach($menu->id);
            }
            $menuItemCount = count(Menu::all());
            for ($i=0; $i<$menuItemCount; $i++) {
                if (is_numeric($request->$i) && $request->$i > 0) {
                    $table->menus()->attach($i, ['menu_id' => $i, 'amount' => $request->$i]);
                }
            }
            if ($table->state != 2) {
                $table->update([
                    'state' => 2,
                    'user_id' => $user,
                ]);
            }
            return redirect()->route('tables.show', ['table' => $table->id, 'user' => $user]);
        } else {
            abort(404);
        }
    }

    public function destroy($id)
    {
        $table = Table::findOrFail($id);
        foreach ($table->menus as $menu) {
            $table->menus()->detach($menu->id);
        }
        $table->update([
            'state' => 0,
            'user_id' => null,
        ]);

        return redirect()->route('tables.show', ['table' => $table->id]);
    }
}
