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

	              <!-- form group -->
	               	<div class="form-group">

	                 	<!-- summernote -->
	                 	<div style="border:1px solid red; border-radius: 5px;">
		                 	<textarea id="summernote" name="description" style="border-bottom: none; border:none; resize:none; border-radius: 5px 5px 0px 0px;" class="form-control" > </textarea>  
		                 	<input type="file" id="summernote_file" style="padding: 10px;">
	                 	</div>

	                 	
	                 			
	                 	<div class="box-footer">
	                 		<button class="btn btn-primary" style="margin-left:96%;">Post</button>
	                 	</div>
	             
	                  <!-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
	                </div>		              		               	  
		            
		            
		    <!--         <div id="newpost" style="display:none">
		            asjfklasjdklfaskldfjklasdflkajsdklfjaskldf aksjklfaskdf

		            </div> -->


		            <!-- for new feed buttons -->
	                  <div class="container" id="newpost" style="display:none">
	                  <div class="row">
		                  <div class="col-lg-4"></div>
		                  <div class="col-lg-4 text-center">
				                  <button type="button" class="btn btn-primary round" id="b1" data-dismiss="modal"> New Blogs &nbsp
			    				  </button>
			    				  <span aria-hidden="true" id="close">&times;</span>
	    				  </div>
		                  <div class="col-lg-4"></div>
	                  </div>	
	                  </div>




		        <!-- form group -->
		        	@foreach ($blogs as $blog)
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
		    							
		      							<h4>{{ $blog->user->name }} <small>{{ $blog->created_at }}</small></h4>
		      							<p>{{ $blog->description }}</p>
		      							<br>
		    						</div>
		    					</div>
							</div>
	 	 		 			
	 	 		 		
	              <!-- /.item -->
		 	 		 </div>
		 	 	<!-- /.form-group -->
		 	 	@endforeach




	 	 			   <!--  to inject the data from scroll -->
	                <div id="scroll_data" style="display:none">
						


	                </div>
		                <!-- /.data from scroll -->

			        <!-- /. -->
	               </div>

      
	            </form>


	          <!-- end of box primary -->
         </div>
        


	</div>
</div>

 @endsection

 @section('css')
 <!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet"> -->

 @endsection
 
 @section('scripts')
<!-- 
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script> -->
  <script type="text/javascript">
  		$(document).ready(function() {

       		// $('#summernote').summernote({height: 250});

       		var i=$("div.form-group>div.note-editor").children('div').eq(5).children().children().children(".modal-body").children("div.form-group").eq(1).remove();
			var j=$("div.form-group>div.note-editor").children('div').eq(5).children().children().children(".modal-footer").remove();
			
			var time=10000;
			var bottom;

			



			bottom=$(document).height()-$(window).height();
			url="{{ url('backend/blog/ajax') }}";
			new_url="{{ url('backend/blog/newpost') }}";

			$(window).scroll(function(){
				var scroll=$(this).scrollTop()+$(this).height()-$(document).height();


				
				if(scroll>=-1)
				{

					 $.post(url,{data:"data",_token:$('input[name=_token]').val()},function(data){
					 							 		
					 		// inject value with html partial template
					 		var template_blog=" ";
					 		
					 		$.each(data,function(key,value){
					 			
					 			template_blog="<hr><div class='form-group'> <div class='item'> <div class='row'> <div class='col-sm-2 text-center'> <img src='{{ asset('dist/img/user2-160x160.jpg')}}' class='img-circle' height='65' width='65' alt='Avatar'> </div> 		<div class='col-sm-10'> <h4>"+value.user.name+" <small>"+value.created_at+"</small> </h4> <p>"+value.description+"</p><br> </div> 	 </div> </div> </div>";
					 			
					 			$("div#scroll_data").append(template_blog).fadeIn("slow");
					 			
					 		});
					 		
				 		// to know the end of the blog						 						 // end of post method
					 },"json");

				}
				
			});


			// to prepend the data from the top of the blog every .. minutes or seconds

			 setInterval(function(){

			 	// post request 
			 	$.post(new_url,{_token:$('input[name=_token]').val()},function(data){
			 		console.log(data);
			 	},"json");

			 	$("div#newpost").fadeIn("slow");

			 }, time);	

			 

       		$("#close").on('click',function()
       		{
       			$("div#newpost").fadeOut("slow");

       		});	
       		
       		//button
       		$('button#b1').on("click",function(){

       			$("div#newpost").fadeOut("slow");
       		});
       		

    	});	
  </script>
 @endsection