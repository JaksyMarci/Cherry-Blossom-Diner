<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = [
        'bill',
        'is_paid',
        'password',
        'state'
    ];

    protected $casts = [
        'is_paid' => 'boolean',
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
}
