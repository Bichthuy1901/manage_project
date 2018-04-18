<?php
namespace App\Constracts;

use App\Constracts\AbstractReposttory;

interface TrainerRepository extends AbstractRepository
{
	public function search($keyword, $with = [], $select= '*');

}