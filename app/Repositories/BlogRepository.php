<?php 
/**
* @author hein-htet
*/

namespace App\Repositories;


use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\EloquentModelsAccess\BaseSqlRepository as BaseRepo;
use Illuminate\Container\Container as App;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;


// business logic
class BlogRepository extends BaseRepo
{	

	
	// to define  what model because of abstract method in basesqlrepository
	
	public function model()
	{
		return "App\Models\Blog";
	}

	public function getAll(Request $request,$columns=array("*"))
	{

		$this->applyCriteria();
		$collection = $this->all("user");

		foreach ($collection as $key => $value) {
			# code...
			$id=$value->id;
		}

		$request->session()->put('condition',(int)$id);

		return $collection;
	}


	public function getScroll(Request $request,$columns=array("*"))
	{		
		
		$this->applyCriteria();
		$collection = $this->all("user",(int)$request->session()->get('condition'));

		foreach ($collection as $key => $value) {
			# code...
			$id=$value->id;
		}

		if(isset($id))
		{
			$request->session()->put('condition',(int)$id);
		}

		return $collection;


		// //dd($collection);
		// foreach($collection as $each)
		// {
		// 	dd($each->id);
		// }
		//dd(property_exists($this, "all"));
		
		//return $this->model->all();
		
		
	}



	public function find()
	{

	}

	public function create(array $data)
	{

		Blog::create($data);
	}

}