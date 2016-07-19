<?php 
namespace App\Repositories\Contracts;

interface RepositoryInterface
{
	//
	public function all($columns=array("*"));

	//
	public function create(array $data);

	//
	public function paginate($perPage = 15, $columns = array('*'));

	//
	public function update(array $data,$id);

	//
	// public function softdelete($id);

	//
	// public function find($id,$columns = array('*'));


}