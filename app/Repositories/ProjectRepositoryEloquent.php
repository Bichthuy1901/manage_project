<?php
namespace App\Repositories;
use App\Constracts\ProjectRepository;
use App\Models\Project;
use App\Repositories\AbstractRepositoryEloquent;

Class ProjectRepositoryEloquent extends AbstractRepositoryEloquent implements ProjectRepository
{
	public function model()
	{
		return new Project; 
	}

	public function getProjectByStatus($status = [], $with = [], $select = ['*'])
	{
		return $this->model()->select($select)->with($with)->whereIn('status', $status)->get();
	}
}
