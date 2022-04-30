<?php
/**
 * Created By: AJAY
 * Date : 28-04-2022
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
}
