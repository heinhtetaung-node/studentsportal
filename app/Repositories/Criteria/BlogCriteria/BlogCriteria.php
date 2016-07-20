<?php 

/**
* @author hein-htet
*/


namespace App\Repositories\Criteria\BlogCriteria;

use App\Repositories\Contracts\CriteriaInterface;
use App\Repositories\Contracts\RepositoryInterface as Repository;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Criteria\Criteria;

class BlogCriteria extends Criteria
{
	
	public function apply($model, Repository $repository)
    {
        $query = $model->where('delete_flag', '=', 1);
        return $query;
    }



}