<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blocks extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'block_no',
        'block_name',
        'description',
    ];
}
