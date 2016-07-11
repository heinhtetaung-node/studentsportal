<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
    
    	//$user=Auth::User();
    	//$user->name);die;


        return view('backend.home');
    }

}
