	<div class="form-group">
		{!! Form::label('titulo', 'Titulo') !!}
		{!! Form::text('titulo', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('conteudo', 'Conteúdo') !!}
		{!! Form::textarea('conteudo', null, ['class'=>'form-control']) !!}
	</div>
		
	<div class="form-group">
		{!! Form::label('autor', 'Autor') !!}
		{!! Form::text('autor', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Cadastrar artigo', ['class'=>'btn btn-primary form-control']) !!}
		
	</div>