@extends('adminlte::layouts.app') 


@section('htmlheader_title') 
	{{ trans('adminlte_lang::message.home') }} 
@endsection 

@section('contentheader_title')
Tipo de Persona
@endsection


@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-12">
            @include('adminlte::mensaje.error')
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Ingresar tipo persona</h3>
                </div>
                <div class="box-body">
                    <form action="{{ route('tipoPersona.store') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label>Tipo de persona</label>
                            <input type="text" placeholder="Ingrese el tipo de persona" class="form-control" id="tipoPersona" name="tipoPersona">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning btn-md">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="sizing-addon2">Filtrar</span>
              <input type="text" class="form-control" data-url="/personas/search" name="tipo" id="tipo" placeholder="BUSCAR POR TIPO" aria-describedby="sizing-addon2">
            </div>
			 <div id="eliminado"></div>
            <table class="table table-striped" id="tablaTipo">
                <thead>
                    <tr >
                        <th class='text-center'>#Registros</th>
                        <th class='text-center'>Tipo de personas</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr></tr>
                    @foreach($tipoPersona as $tipoPersonas)
                    <tr class='text-center'>
                        <td>{{$tipoPersonas->id}}</td>
                        <td>{{$tipoPersonas->tipo}}</td>
                        <td class="text-center">
                            <div class="row">
	                           	<div class="col-md-6 text-right">
	                           		<a href="{{route('tipoPersona.show', $tipoPersonas->id)}}" class="btn btn-warning btn-xs">Editar</a>
	                           	</div>
		                        <div class="col-md-6 text-left">
		                           <form action="{{route('tipoPersona.destroy', $tipoPersonas->id)}}" method="post">
		                           	  <input type="hidden" name="_method" value="DELETE">
		                           	  <input type="hidden" name="_token" value="{{ csrf_token() }}">
		                           	  <button type="submit" class="btn btn-danger btn-xs">Borrar</button>
		                           </form>
		                        </div>
	                        </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $tipoPersona->render() !!}
        </div>
    </div>
@endsection
				


