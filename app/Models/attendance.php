<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    use HasFactory;
   protected  $fillable = [
    'user_id',
    'student_name',
    'attend_date',
    'isAbsence',
    'isleave',
    'remark',
   ];
}
