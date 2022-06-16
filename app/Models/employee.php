<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'fullname',
        'employ_type',
        'gender',
        'dob',
        'doj',
        'phone_num',
        'email',
        'address',
        'salary',
        'block_no',
        'isActive',
        'profile',
    ];
}
