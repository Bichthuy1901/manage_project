<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
       'name',
       'type_id',
       'trainer_id',
       'description',
       'status',
       'attach_file',
       'student_id',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

}
