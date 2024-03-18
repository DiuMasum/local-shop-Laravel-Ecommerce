<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewCategory extends Model
{
    protected $fillable = [
        'category_name',
        'slug',
        'subcategory_count',
        'product_count',
    ];

    use HasFactory;
}
