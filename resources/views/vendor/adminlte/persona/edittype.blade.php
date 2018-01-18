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
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar tipo persona</h3>
                </div>
                <div class="box-body">
                    @foreach($tipoPersona as $tipoPersonas)
                    <form action="{{ route('tipoPersona.update',$tipoPersonas->id) }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label>Tipo de persona</label>
                            <input type="text" value="{{$tipoPersonas->tipo}}" class="form-control" id="tipoPersona" name="tipoPersona">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning btn-md">Actualizar</button>
                        </div>
                    </form>
                     @endforeach   
                </div>
            </div>
        </div>
    </div>
@endsection
				


