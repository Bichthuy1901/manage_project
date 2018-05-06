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
        'student_code',
        'class_id',
        'course_id',
    ];
    function user()
    {
        return $this->hasOne(User::class);//1 tai khoan user se thuoc 1 admin
    }

    function projects()
    {
        return $this->hasMany(Project::class);
    }
}
