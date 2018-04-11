<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainers extends Model
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
        'status',
    ];
    public function TrainerStudent()
    {
    return $this->hasMany(TrainerStudent::class);
    }
    public function User()
    {
        return $this->hasOne(user::class);

    }
    public function project()
    {
        return $this->hasmany(project::class);
    }

}
