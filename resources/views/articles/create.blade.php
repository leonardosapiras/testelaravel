@extends('corpo')

@section('content')

<h1> Write a new article </h1>
<hr/>

{!! Form::open(['url' => 'articles']) !!}

	@include('articles._form')

{!! Form::close() !!}

@if ($errors->any()) 
    <ul class="alert alert-danger">
	@foreach ($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
	
</ul>

@endif

@stop