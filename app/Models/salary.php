<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salary extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'employ_name',
        'monthYear_paid',
        'amount',
        'paid_date',
    ];
}
