<?php
namespace App\Repositories;

use App\Constracts\AdminRepository;
use App\Models\Admin;
use App\Repositories\AbstractRepositoryEloquent;

class AdminRepositoryEloquent extends AbstractRepositoryEloquent implements AdminRepository
{
	public function model()
	{
		return new Admin; 
	}
}