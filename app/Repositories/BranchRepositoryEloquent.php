<?php
namespace App\Repositories;
use App\Constracts\BranchRepository;
use App\Models\Branch;
use App\Repositories\AbstractRepositoryEloquent;

Class BranchRepositoryEloquent extends AbstractRepositoryEloquent implements BranchRepository
{
	public function model()
	{
		return new Branch; 
	}
}