<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            $menu = Menu::all();
            return view('menu', ['menu' => $menu]);
        } else {
            abort(404);
        }
    }

    public function show($id)
    {
        if (Auth::user()) {
            $table = Table::findOrFail($id);
            $menu = Menu::all();
            return view('menu', ['menu' => $menu, 'table' => $table]);
        } else {
            abort(404);
        }
    }
}
