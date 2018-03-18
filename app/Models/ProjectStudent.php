<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectStudent extends Model
{
    protected $fillable = [
        'student_id',
        'media_id',
        'project_id',
    ];

}
