<?php 
/**
* @author hein-htet
*/

namespace App\Repositories\EloquentModelsAccess;

//Interfaces 
use App\Repositories\Contracts\CriteriaInterface;
use App\Repositories\Contracts\RepositoryInterface;

use App\Repositories\Criteria\Criteria;

// application import
use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as App;
use Illuminate\Support\Collection;

// access logic
abstract class BaseSqlRepository implements RepositoryInterface, CriteriaInterface
{

	// var for IOCcontainer
	private $app;

	// var for Eloquent Model and  
	// main idea for all other repo to call the function of it

	protected $model;



	protected $criteria;


	protected $skipCriteria=false;


	function __construct(App $app,Collection $collection)
	{
			
			// IOC container to inject 
			$this->app=$app;

			// criteria for push into object
			$this->criteria=$collection;
			
			// reset the skipCriteria to false when call another retrieve method
			$this->resetScope();

			// to return the model object
			$this->makemodel();

			
	}

	//let the repository define the model
	abstract function model();
	


	// return BaseSqlRepository object from makemodel for the use in Repositories
	// $this->model=$model dependency injection
	public function makemodel()
	{
		$this->model=$this->app->make($this->model());

		if(!$this->model instanceof Model)
		{
			echo "Different class in makemodel of baseSqlrepo";
			exit; 
		}

		//return $this->model=$this;
	}





	///////////////////////////////////////////
	
	// retrieve access logic
						
	public function all($columns=array("*"))
	{
		$this->applyCriteria();
		
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




////////////////////////////////////////////////////////////////////// Criteria to use in retrieve


	// to reset the skipCriteria variable to false via skipCriteria() for find which use skipcriteria 

	public function resetScope()
	{
		$this->skipCriteria(false);
		return $this;
	}
	

	public function skipCriteria($status=true)
	{
		$this->skipCriteria=$status;
		return $this;
	}

	public function getCriteria()
	{
		return $this->criteria;
	}

	public function applyCriteria()
	{
		
		
		if($this->skipCriteria===true)
			return $this;

		foreach ($this->getCriteria() as $criteria) {
			# code...
			if($criteria instanceof Criteria)
			{
				$this->model = $criteria->apply($this->model, $this);
			}
		}

		//dd($criteria->apply());

		return $this;


	}

	 public function getByCriteria(Criteria $criteria) {
        $this->model = $criteria->apply($this->model, $this);
        return $this;
    }
 
    /**
     * @param Criteria $criteria
     * @return $this
     */
    public function pushCriteria(Criteria $criteria) {
        $this->criteria->push($criteria);
        return $this;
    }




}