<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qtyunit extends Model
{
    use HasFactory;
    protected $table = "qtyunit";
    protected $fillable =
    [
        'name'
    ];
}
