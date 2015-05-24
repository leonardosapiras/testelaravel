<html>@extends('corpo')

@section('content')

<h1> Artigos </h1>
<hr/>

@foreach ($articles as $article)

<article>
    <h2>
	<a href="{{action("ArticleController@show", [$article->id]) }}">{{$article->titulo}}</a>
    </h2>
    
    <div> {{$article->conteudo}} </div>
    <div> {{$article->autor}} </div>
    
    @if ($article->data_x != null)
	<div> {{ $article->data_x->format('Y/m/d') }} </div>
    @endif
    
    <hr/>
	
</article>

@endforeach




@stop