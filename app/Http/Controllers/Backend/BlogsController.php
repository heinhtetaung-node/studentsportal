<?php

/**
* @author hein-htet
*/


namespace App\Http\Controllers\Backend;
use App\Models\Blog;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Repositories\BlogRepository;
use App\Repositories\Criteria\BlogCriteria\BlogCriteria;
//use App\User;
//use Auth;
class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // to test
     private $blog;

    public function __construct(BlogRepository $blog)
    {        
        $this->blog=$blog;
    }



    public function index()
    {
      
        $this->blog->pushCriteria(new BlogCriteria());
        
        $this->blog->getAll();
        return view('backend.blogs.index')->with('hi',"asfasdadsf")->with('hello','this is hello');

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Blog $blog)
    {
        $this->authorize('create',$blog);


        // $user=Auth::user();
        // $user=User::find($user->id)->role;
        // var_dump($user);

        return view('backend.blogs.register',['blog'=>$blog]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
     //   var_dump($request);die;
         $extension = $request['description'];

         dd($extension);
        //dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    ////////////////////////  ajax call for   /////////////////////////////////

    public function listing_access()
    {
        
       
        $this->blog->pushCriteria(new BlogCriteria());
        $items=$this->blog->getAll();
        


        return response($items);
        exit();

    }


}
