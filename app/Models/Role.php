<?php

namespace App\Models;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
	protected $table = 'role';

	protected $fillable=[
						'name',
				        'email',
				        'phone',
				        'password',];

	public function user()
	{
		return $this->hasMany(User::class,'role_id');
	}        



}
