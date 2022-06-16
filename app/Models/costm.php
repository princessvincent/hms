<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class costm extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'cost_type',
        'amount',
        'description',
        'date',
    ];
}
