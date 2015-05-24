@extends('corpo')

@section('content')

<h1> Update article </h1>
<hr/>

{!! Form::model($article, 
		['method' => 'PATCH', 'url' => 'articles/'.$article->id]) !!}

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