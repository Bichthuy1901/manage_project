<?php
namespace App\Repositories;

use App\Constracts\UserRepository;
use App\Models\User;
use App\Repositories\AbstractRepositoryEloquent;

class UserRepositoryEloquent extends AbstractRepositoryEloquent implements UserRepository
{
	public function model()
	{
		return new User; 
	}
}