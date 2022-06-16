<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'fullname',
        // 'student_id',
        'phone_num',
        'email',
        'password',
        'nameof_insti',
        'program',
        'batch_no',
        'gender',
        'date_of_birth',
        'blood_group',
        'nationality',
        'national_id',
        'passport_no',
        'father_name',
        'father_num',
        'mother_name',
        'mother_num',
        'local_guardian',
        'guardian_num',
        'present_address',
        'permanent_address',
        'profile_image',

    ];
}
