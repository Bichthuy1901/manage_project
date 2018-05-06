<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'password', 
        'userable_type',
        'userable_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function Admin()
    {
        return $this->belongsTo(Admin::class);//1 tai khoan user se thuoc 1 admin
    }
    public function Student()
    {
        return $this->belongsTo(Student::class, 'name', 'student_code');
    }
    public function Trainer()
    {
        return $this->belongsTo(Trainer::class, 'name', 'trainer_code');
    }
    public function setPasswordAttribute($value)//set :quy dinh du lieu duoc luu trong bang
    {  
        $this->attributes['password']= bcrypt($value);//ma hoa password
    } 
    public function getAvatarAttribute($value)
    {
        return asset(config('custom.defaultPath') . $value); //noi chuoi va tra lai duong dan
    }

    /*
     * Check Admin
     */
    public function isAdmin()
    {
        return $this->userable_type == 'App/Models/Admin';
    }

    /*
     * Check Student
     */
    public function isStudent()
    {
        return $this->userable_type == 'App/Models/Student';
    }

    /*
     * Check Trainers
     */
    public function isTrainer()
    {
        return $this->userable_type == 'App/Models/Trainer';
    }
}
