@extends('corpo')

@section('content')

<h1> Update article </h1>
<hr/>

@include('errors.list')

{!! Form::model($article, 
		['method' => 'PATCH', 'url' => 'articles/'.$article->id]) !!}

	@include('articles._form')
	
	<div class="form-group">
		{!! Form::submit('Atualizar', ['class'=>'btn btn-primary form-control']) !!}
	</div>

{!! Form::close() !!}


@stop