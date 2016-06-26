@extends('backend.layout.master')


@section('content')
	<label>Helloworld</label>
@stop


@section('breadcrumbs')
    {!! Breadcrumbs::render('multiple') !!}
@stop