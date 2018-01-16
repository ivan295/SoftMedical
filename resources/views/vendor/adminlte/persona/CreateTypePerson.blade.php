@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
             @include('adminlte::mensaje.error') 

				<form  action="{{ route('persona.store') }}" method="post">
				  <input type="hidden" name="_token" value="{{ csrf_token() }}">
				  <div class="form-group">
				    <label for="tipo">Tipo de persona</label>
				    <input type="text" class="form-control" id="tipoPersona" name="tipoPersona">
				  </div>
				  <button type="submit" class="btn btn-default">Registar</button>
				</form>





				<table class="table table-striped">
				    <thead>
				      <tr>
				        <th>#Registros</th>
				        <th>Tipo de personas</th>
				        <th>Acciones</th>
				      </tr>
				    </thead>
				    <tbody>
				   	@foreach($tipoPersona as $tipoPersonas)
				      <tr>
				        <td>{{$tipoPersonas->id}}</td>
				        <td>{{$tipoPersonas->tipo}}</td>
				      </tr>
				      @endforeach
				    </tbody>
				  </table>
				

			</div>
		</div>
	</div>
@endsection