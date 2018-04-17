<?php
namespace App\Repositories;

use App\Constracts\TrainerRepository;
use App\Models\Trainer;
use App\Repositories\AbstractRepositoryEloquent;
class TrainerRepositoryEloquent extends AbstractRepositoryEloquent implements TrainerRepository
{
	public function model()
	{
		return new Trainer; 
	}
	public function search ($keyword, $with = [], $select= '*')
	{
		return $this->model()
		->with($with)
		->select($select)
		->where('name', 'like', '%'.$keyword. '%')
		->paginate(10);
	}
}