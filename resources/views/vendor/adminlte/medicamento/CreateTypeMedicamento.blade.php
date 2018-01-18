@extends('adminlte::layouts.app')

@section('contentheader_title')
Tipo Medicamento
@endsection

@section('main-content')
 @include('adminlte::mensaje.error')

 <form  action="{{ route('tipoMedicamento.store') }}" method="post">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <div class="form-group">
     <label for="tipo">Tipo de Medicina</label>
     <input type="text" class="form-control" id="tipomedicina" name="tipomedicina">
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
     @foreach($tipomedicinas as $tipomedicina)
         <tr>
           <td>{{$tipomedicina->id}}</td>
           <td>{{$tipomedicina->tipo}}</td>
       <td class="text-center">
         <a href="#" class="btn btn-warning btn-xs">Modificar</a>
         <a href="#" class="btn btn-danger btn-xs">Eliminar</a>
       </td>
     </tr>
       @endforeach
     </tbody>
   </table>




</div>
</div>
</div>


@endsection
