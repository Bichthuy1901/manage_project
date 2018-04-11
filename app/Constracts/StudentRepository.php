<?php
namespace App\Constracts;

use App\Constracts\AbstractReposttory;

interface StudentRepository extends AbstractRepository
{
	public function search($keyword, $with = [], $select= '*');

}