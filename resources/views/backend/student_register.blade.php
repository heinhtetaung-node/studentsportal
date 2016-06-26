@extends('backend.layout.master')

@section('breadcrumbs')
    {!! Breadcrumbs::render('multiple') !!}
@stop

@section('content')
	<div class="box box-primary">
		 <div class="box-header with-border">
            <h3 class="box-title">Student Register</h3>
        </div><!-- /.box-header -->
         <form role="form" action="{{ route('backend.student.store') }}" method="post">

	</div>
@stop
