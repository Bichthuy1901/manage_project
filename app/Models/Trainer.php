<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $fillable = [
        'name',
        'birthday',
        'gender',
        'address',
        'email',
        'phone',
        'note',
        'orientation',
        'status',
        'trainer_code',
    ];
    protected $table = "trainers";
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
