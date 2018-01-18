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
                            <input type="text" class="form-control" id="tipoPersona" name="tipoPersona">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning btn-md">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2">
            	<label class="box-title">Buscar por tipo</label>
            </div>
            <div class="col-lg-10">
			    <div class="input-group">
			      <input type="text" class="form-control" data-url="/personas/search'" name="tipo" id="tipo"> 
			    </div>
			 </div>
			 <div id="eliminado"></div>
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
				


