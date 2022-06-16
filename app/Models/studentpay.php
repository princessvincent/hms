<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentpay extends Model
{
    use HasFactory;
protected $fillable = [
    'user_id',
    'student_name',
    'payment_date',
    'paid_by',
    'transaction_num',
    'amount',
    'description',
];
}
