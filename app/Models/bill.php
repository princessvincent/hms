<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'bill_type',
        'bill_to',
        'amount',
        'bill_date',
    ];
}
