<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meal_Rate extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nameof_meal',
        'rate',
    ];
}
