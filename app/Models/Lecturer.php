<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
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
    ];

}
