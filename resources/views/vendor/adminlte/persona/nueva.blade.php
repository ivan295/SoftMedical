@extends('adminlte::layouts.app')

@section('contentheader_title')
Nueva Persona
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-10">
             @include('adminlte::mensaje.error')

				<form  action="{{ route('Persona.store') }}" method="post">
				  <input type="hidden" name="_token" value="{{ csrf_token() }}">
				  <div class="form-group">
				    <label for="tipo">Tipo de persona</label>
				    <input type="text" class="form-control" id="tipoPersona" name="tipoPersona">
				  </div>
				  <button type="submit" class="btn btn-default">Registrar</button>
				</form>

				{!! $tipoPersona->render() !!}


			</div>
		</div>
	</div>
@endsection
