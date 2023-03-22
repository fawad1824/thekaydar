<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = "product";
    protected $fillable = [
        'name',
        'user_id',
        'category_id',
        'specification_id',
        'desc',
        'feature_img',
        'gallery_id',
        'qty_id',
    ];
}
