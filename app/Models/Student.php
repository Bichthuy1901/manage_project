<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'birthday',
        'gender',
        'address',
        'email',
        'phone',
        'branch_id',
        'note',
        'class_id',
        'course_id',
    ];

}
