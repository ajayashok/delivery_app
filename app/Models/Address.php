<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = ['is_default'];

    public function scopeActive($query)
    {
        $query->where('status', 1);
    }
}
