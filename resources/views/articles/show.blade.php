@extends('corpo')

@section('content')

<h1> {{ $article->titulo }} </h1>
<hr/>

<article>
    {{ $article->conteudo }}
</article>



@stop