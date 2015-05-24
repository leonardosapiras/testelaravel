@extends('corpo')

@section('content')

<h1> Write a new article </h1>
<hr/>

@include('errors.list')

{!! Form::open(['url' => 'articles']) !!}

	@include('articles._form')
	
	<div class="form-group">
		{!! Form::submit('Cadastrar', ['class'=>'btn btn-primary form-control']) !!}
	</div>

{!! Form::close() !!}

@stop