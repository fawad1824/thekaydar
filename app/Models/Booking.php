<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = "booking";
    protected $fillable = [
        'user_id',
        'email',
        'product_id',
        'address',
        'tele',
        'whats',
        'address',
        'qty',
        'unit',
        'status',
    ];

    public function user()
    {
        return $this->hasOne(Products::class,'id','product_id');
    }

}
