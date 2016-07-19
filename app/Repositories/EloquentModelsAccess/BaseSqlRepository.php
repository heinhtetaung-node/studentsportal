<?php 
/**
* @author hein-htet
*/

namespace App\Repositories\EloquentModelsAccess;

use App\Repositories\Contracts\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Container\Container as App;

// access logic
abstract class BaseSqlRepository implements RepositoryInterface
{

	// var for IOCcontainer
	private $app;

	// var for Eloquent Model and  
	// main idea for all other repo to call the function of it
	protected $model;

	function __construct(App $app)
	{
			$this->app=$app;
			$this->makemodel();
	}

	//let the repository define the model
	abstract function model();
	


	// return BaseSqlRepository object from makemodel for the use in Repositories
	// $this->model=$model dependency injection
	public function makemodel()
	{
		$model=$this->app->make($this->model());

		if(!$model instanceof Model)
		{
			echo "Different class in makemodel of baseSqlrepo";
			exit; 
		}

		return $this->model=$model;
	}





	///////////////////////////////////////////
	
	// retrieve access logic
						
	public function all($columns=array("*"))
	{
		return $this->model->get($columns);
	}
	


	// public function find($id,$columns = array('*'))
	// {
	// 	// find somthing  delete_flag=1
	// 	return $this->model->find($id,$columns);
	// }

	public function paginate($perPage = 15, $columns = array('*'))
	{

		return $this->model->paginate($perPage,$columns);
		
	}



	// ////////////////////////////////////////////////////////

	// data manpulation access logic 
	
	public function create(array $data)
	{
		return $this->model->create($data);
	}

	public function update(array $data,$id,$attribute="id")
	{
		return $this->model->where($attribute,"=",$id)->update($data);
	}

	// might be ambiguous ? not sure
	
	// public function softdelete($id)
	// {
	// 	return $this->model->where($attribute,"=",$id)->update(["delete_flag"=>1]);
	// }

}