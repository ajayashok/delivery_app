<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_price',
        'description',
        'brand',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'model',
        'image',
        'status',
        'sort_order',
        'slug',
    ];

    public function scopeActive($query)
    {
        $query->where('status', 1);
    }
}
