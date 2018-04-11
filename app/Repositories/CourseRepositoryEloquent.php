<?php
namespace App\Repositories;
use App\Constracts\CourseRepository;
use App\Models\Course;
use App\Repositories\AbstractRepositoryEloquent;

Class CourseRepositoryEloquent extends AbstractRepositoryEloquent implements CourseRepository
{
	public function model()
	{
		return new Course; 
	}
}