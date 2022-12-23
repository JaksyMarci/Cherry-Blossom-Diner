<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = [
        'state',
        'user_id'
    ];


    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function menus()
    {
        return $this->belongsToMany(Menu::class);
    }

    public function amount()
    {
        return $this->belongsToMany(Menu::class)
        ->withPivot('amount')->wherePivotNotNull('amount');
    }

    public function currentBill()
    {
        $currentPrice = 0;
        foreach ($this->menus as $food) {
            foreach ($food->amount as $f) {
                if ($food->id == $f->pivot->menu_id) {
                    $currentPrice += $f->pivot->amount * $food->food_price;
                }
            }
        }

        return $currentPrice;
    }
}
