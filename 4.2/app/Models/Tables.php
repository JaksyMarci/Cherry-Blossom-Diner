<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tables extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'isPaid',
        'password',
    ];

    protected $casts = [
        'isPaid' => 'boolean',
    ];

    public function invoices() {
        return $this->hasMany(Invoices::class);
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }
}
