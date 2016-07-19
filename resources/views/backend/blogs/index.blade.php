@extends('backend.layout.master')

@section('content')


<div class="row">
        <!-- left column -->
        <div class="col-md-12">
        	 <div class="box box-primary">

	            <div class="box-header with-border">
		             <div class="col-md-6">
		             	<h3 class="box-title">Blogs</h3>
		             </div>
	              	<div class="col-md-6">
	              		<div class="input-group input-group-sm">
	              			<input type="text" class="form-control" placeholder="Search Blog">
	              			<span class="input-group-btn">
	                 			 	<button type="button" class="btn btn-primary btn-flat">Search</button>
	                 		</span>
	              		</div>
	              	</div>

	            </div>
            <!-- /.box-header -->
            <!-- form start -->
	            <form role="form" action="{{ route('backend.blog.store') }}" method="post" enctype="multipart/form-data">


	           	
	            	{{ csrf_field() }}
	              <div class="box-body">

	               	<div class="form-group">


	                 	<!-- summernote -->
	                 	<div style="border:1px solid red; border-radius: 5px;">
		                 	<textarea id="summernote" name="description" style="border-bottom: none; border:none; resize:none; border-radius: 5px 5px 0px 0px;" class="form-control" > </textarea>  
		                 	<input type="file" id="summernote_file" style="padding: 10px;">
	                 	</div>

	                 	<!-- <textarea class="form-control" placeholder="What's on your mind?" style="font-size: 20px; height:65px; resize: none;"></textarea> -->
	                 			
	                 	<div class="box-footer">
	                 		<button class="btn btn-primary" style="margin-left:96%;">Post</button>
	                 	</div>
	             
	                  <!-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
	                </div>
		              
		               	
	              

		           <hr/>

	                 <div class="form-group">
	                  	<div class="item">
	                  		 <div class="row">
        						<div class="col-sm-2 text-center">
        							<img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle" height="65" width="65" alt="Avatar">
       							</div>
       							
                  				<div class="box-tool pull-right" style="position: absolute;margin-top: 4px;right: 80px;">

		 	 		 					<div class="btn-group">
		 	 		 						<button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
		 	 		 							<i class="fa fa-wrench"></i>
		 	 		 						</button>
		 	 		 						<ul class="dropdown-menu" style="left:-137px;" role="menu">
		 	 		 							<li>
		 	 		 								<a href="#">Edit</a>
		 	 		 							</li>
		 	 		 							<li>
		 	 		 								<a href="#">Delete</a>
		 	 		 							</li>
		 	 		 						</ul>
		 	 		 					</div>

		 	 		 				</div>
               				
        						<div class="col-sm-10">
          							<h4>Anja <small>Sep 29, 2015, 9:12 PM</small></h4>
          							<p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          							<br>
        						</div>
        					</div>
							</div>
	 	 		 			<hr>
	 	 		 		
	              <!-- /.item -->
		 	 		 	</div>
		 	 	<!-- /.form-group -->
	                </div>


	            

	                 <div class="form-group">
	                  	<div class="item">
	                  	
	                  	
	                  	
		                  	<div class="row">

		                  	<div class=col-md-2 >
		 	 		 			<img src="{{ asset('dist/img/user2-160x160.jpg')}}" alt="user image" class="img-circle" class="img-responsive img-center" height="40" width="40">
		 	 		 		</div>

	 	 		 			<div class=col-md-10>
		 	 		 			<div class="box" style="margin-bottom: 0px; border-top: none;">
		 	 		 				<div class="box-tools pull-right">

		 	 		 					<div class="btn-group">
		 	 		 						<button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
		 	 		 							<i class="fa fa-wrench"></i>
		 	 		 						</button>
		 	 		 						<ul class="dropdown-menu" style="left:-137px;" role="menu">
		 	 		 							<li>
		 	 		 								<a href="#">Edit</a>
		 	 		 							</li>
		 	 		 							<li>
		 	 		 								<a href="#">Delete</a>
		 	 		 							</li>
		 	 		 						</ul>
		 	 		 					</div>

		 	 		 				</div>
		 	 		 			</div>

		 	 		 			<label>Susan Doe</label>
		 	 		 			<div class="row">
		 	 		 			<div class="col-md-12">
				                <p class="message">
				                  <a href="#" class="name">
				                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
				                    
				                  </a>
				                  I would like to meet you to discuss the latest news about
				                  the arrival of the new theme. They say it is going to be one the
				                  best themes on the market
				                </p>
				                </div>
				                </div>
				              </div>


		 	 		 		</div>
	 	 		 			<hr>
	 	 		 		
	              <!-- /.item -->
		 	 		 	</div>
		 	 	<!-- /.form-group -->
	                </div>

	                

	                </div>
	              <!-- /.box-body -->

	              
	            </form>



	            <!-- end of box primary -->
          </div>
        


</div>


 @endsection

 @section('css')
 <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">

 @endsection
 
 @section('scripts')

  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>
  <script type="text/javascript">
  		$(document).ready(function() {

       		// $('#summernote').summernote({height: 250});

       		 var i=$("div.form-group>div.note-editor").children('div').eq(5).children().children().children(".modal-body").children("div.form-group").eq(1).remove();
			var j=$("div.form-group>div.note-editor").children('div').eq(5).children().children().children(".modal-footer").remove();
			


			$("#summernote").focus(function(){
					//#3C8DBC;
			//	$(this).css("border-top:1px solid red !important;");
			});
       		
    	});	
  </script>
 @endsection