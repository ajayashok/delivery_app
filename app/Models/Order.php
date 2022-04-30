<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['order_code'];

    public function orderDelivery()
    {
        return $this->belongsToMany(User::class,'order_delivery');
    }

    public function status()
    {
        return $this->belongsToMany(Status::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
