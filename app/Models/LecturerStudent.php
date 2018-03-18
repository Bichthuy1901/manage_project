<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LecturerStudent extends Model
{
    protected $fillable = [
        'lecturer_id',
        'student_id',
    ];

}
