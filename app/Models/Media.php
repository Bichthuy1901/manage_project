<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
    'name',
    'path',
    'status',
    ];
    public function getpathAttribute($value)
    {
    	return asset(config('custom.defaultMedia') . $value);
    }

}
