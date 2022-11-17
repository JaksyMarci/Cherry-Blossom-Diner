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

    public function tables() {
        return $this->belongsToMany(Tables::class)->withPivot('amount');
    }
}
