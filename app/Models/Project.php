<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
       'name',
       'type_id',
       'lecturer_id',
       'description',
    ];

}
