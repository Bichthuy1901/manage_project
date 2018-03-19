<?php
namespace App\Repostories;
use App\Constracts\UesrRepository;
use App\Models\User;
use App\Repositories\AbstractRepositoryEloquent;
Class UserRepositoryEloquent extends AbstractRepositoryEloquent implements UserRepository
{
	public function model()
	{
		return new User; 
	}
}