<?php
namespace App\Repositories;

use App\Constracts\StudentRepository;
use App\Models\Student;
use App\Repositories\AbstractRepositoryEloquent;
class StudentRepositoryEloquent extends AbstractRepositoryEloquent implements StudentRepository
{
	public function model()
	{
		return new Student; 
	}
}