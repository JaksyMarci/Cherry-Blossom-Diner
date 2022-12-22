<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'food_name',
        'food_price',
        'food_type',
    ];

    public function tables()
    {
        return $this->belongsToMany(Table::class);
    }

    public function amount()
    {
        return $this->belongsToMany(Table::class)
        ->withPivot('amount')->wherePivotNotNull('amount');
    }
}
