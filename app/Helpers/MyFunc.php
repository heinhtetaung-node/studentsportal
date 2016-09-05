<?php 
namespace App\Helpers;

class MyFunc extends Func {
	
    public static function full_name($first_name,$last_name) {
        return $first_name . ', '. $last_name;   
    }
}