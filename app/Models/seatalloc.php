<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seatalloc extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'student_name',
        'block_no',
        'room_no',
        'monthly_rent',
    ];
}
