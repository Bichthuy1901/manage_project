<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
       'admin_id',
       'title',
       'content',
       'status',
    ];

}
