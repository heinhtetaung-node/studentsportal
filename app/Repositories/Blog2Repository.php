<?php 
/**
* @author hein-htet
*/

namespace App\Repositories;


use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\EloquentModelsAccess\BaseSqlRepository as BaseRepo;
use Illuminate\Container\Container as App;
use Illuminate\Support\Collection;


// business logic
class Blog2Repository extends BaseRepo
{	
	
	// to define  what model because of abstract method in basesqlrepository
	
	public function model()
	{
		return "App\Models\Blog";
	}


	public function getAll($columns=array("*"))
	{
		// data or object query
	
		//$this->applyCriteria();
		//$collection = $this->all();
		// foreach($collection as $each)
		// {
		// 	dd($each);
		// }
		// //dd($collection);
		// foreach($collection as $each)
		// {
		// 	dd($each->id);
		// }
		//dd(property_exists($this, "all"));
		
		//return $this->model->all();
		die;
	}



	public function find()
	{

	}

	public function create(array $data)
	{

		Blog::create($data);
	}

}