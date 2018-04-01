<?php
namespace App\Repositories;
use App\Constracts\ClassRepository;
use App\Models\Classroom;
use App\Repositories\AbstractRepositoryEloquent;

Class ClassRepositoryEloquent extends AbstractRepositoryEloquent implements ClassRepository
{
	public function model()
	{
		return new Classroom; 
	}
}