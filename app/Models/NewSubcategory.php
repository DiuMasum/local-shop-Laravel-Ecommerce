<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewSubcategory extends Model
{
    protected $fillable = [
        'subcategory_name',
        'category_id',
        'category_name',
        'product_count',
        'slug',
    ];

    use HasFactory;
}
