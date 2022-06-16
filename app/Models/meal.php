<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meal extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'student_name',
        'no_ofmeal',
        'date',
    ];
}
