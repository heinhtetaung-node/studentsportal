<?php 

namespace App\Repositories;


use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\EloquentModelsAccess\BaseSqlRepository as BaseRepo;

// business logic
class BlogRepository extends BaseRepo
{	
	// to define  what model because of abstract method in basesqlrepository

	public function model()
	{
		return "App\Models\Blog";
	}	


	public function all($columns=array("*"))
	{
		// data or object query
		return $this->model->all();
	}



	public function find()
	{
	}

	public function create(array $data)
	{

		Blog::create($data);
	}

}