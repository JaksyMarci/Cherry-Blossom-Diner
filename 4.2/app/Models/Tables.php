<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tables extends Model
{
    use HasFactory;

    protected $fillable = [
        'bill',
        'state'
    ];

    public function users() {
        return $this->belongsToMany(User::class);
    }

    public function foods() {
        return $this->belongsToMany(Menu::class)->withPivot('amount');
    }
}
