<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $table = 'blogs';

    protected $fillable = ['description','student_id','course_id','batch_id','delete_flag'];

}
