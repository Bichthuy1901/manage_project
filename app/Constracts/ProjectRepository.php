<?php
namespace App\Constracts;

use App\Constracts\AbstractReposttory;

interface ProjectRepository extends AbstractRepository
{
    public function getProjectByStatus($status, $with = [], $select = ['*']);
}