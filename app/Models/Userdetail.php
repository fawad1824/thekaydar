<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdetail extends Model
{
    use HasFactory;
    protected $table = "userdetail";
    protected $fillable =
    [
        'phone',
        'image',
        'whatsapp',
        'street',
        'postcode',
        'city',
        'address',
    ];
}
