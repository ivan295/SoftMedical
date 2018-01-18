@extends('adminlte::layouts.app')

@section('contentheader_title')
Tipo de Persona
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-10">
             @include('adminlte::mensaje.error')

				<form  action="{{ route('tipoPersona.store') }}" method="post">
				  <input type="hidden" name="_token" value="{{ csrf_token() }}">
				  <div class="form-group">
				    <label for="tipo">Tipo de persona</label>
				    <input type="text" class="form-control" id="tipoPersona" name="tipoPersona">
				  </div>
				  <button type="submit" class="btn btn-default">Registrar</button>
				</form>
				<table class="table table-striped">
				    <thead>
				      <tr>
				        <th>#Registros</th>
				        <th>Tipo de personas</th>
				        <th class="text-center">Acciones</th>
				      </tr>
				    </thead>
				    <tbody>
				   	@foreach($tipoPersona as $tipoPersonas)
				        <tr>
					        <td>{{$tipoPersonas->id}}</td>
					        <td>{{$tipoPersonas->tipo}}</td>
							<td class="text-center">
								<a href="#" class="btn btn-warning btn-xs">Modificar</a>
								<a href="#" class="btn btn-danger btn-xs">Eliminar</a>
							</td>
						</tr>
				      @endforeach
				    </tbody>
				  </table>

				{!! $tipoPersona->render() !!}


			</div>
		</div>
	</div>
@endsection
