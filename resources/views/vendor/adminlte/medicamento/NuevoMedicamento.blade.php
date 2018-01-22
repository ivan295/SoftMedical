@extends('adminlte::layouts.app')
@section('contentheader_title')
Nuevo Medicamento
@endsection

@section('main-content')
 @include('adminlte::mensaje.error')

 <form  action="{{ route('NuevoMedicamento.store') }}" method="post">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <div class="col-md-5">
             <div class="container-fluid">
                 <div class="main-login main-center">
                   <form class="form-horizontal" method="post" action="#">
                     <div class="form-group">
                       <label for="name" class="cols-sm-2 control-label"></label>
                       <div class="cols-sm-8">
                         <div class="input-group">
                           <input type="text" class="form-control" name="name" id="name"  placeholder="Nombre"/>
                         </div>
                       </div>
                     </div>

                     <div class="form-group">
                       <label for="email" class="cols-sm-2 control-label"></label>
                       <div class="cols-sm-10">
                         <div class="input-group">
                           <input type="text" class="form-control" name="unidad" id="unidad"  placeholder="Unidad"/>
                         </div>
                       </div>
                     </div>

                     <div class="form-group">
                       <label for="username" class="cols-sm-2 control-label"></label>
                       <div class="cols-sm-10">
                         <div class="input-group">
                           <input type="text" class="form-control" name="peso" id="peso"  placeholder="Peso"/>
                         </div>
                       </div>
                     </div>

                     <div class="form-group">
                       <label for="password" class="cols-sm-2 control-label"></label>
                       <div class="cols-sm-10">
                         <div class="input-group">
                           <input type="text" class="form-control" name="cantidad" id="cantidad"  placeholder="Cantidad"/>
                         </div>
                       </div>
                     </div>

                     <div class="box-body">
                                   <!-- Date -->
                                   <div class="form-group">
                                     <label>Fecha de Ingreso</label>
                                     <div class="input-group date">
                                       <div class="input-group-addon">
                                         <i class="fa fa-calendar"></i>
                                       </div>
                                       <input type="text" class="form-control pull-right" id="datepicker">
                                     </div>
                                   </div>
                                   <div class="form-group">
                                     <label>Fecha de Vencimiento</label>
                                     <div class="input-group date">
                                       <div class="input-group-addon">
                                         <i class="fa fa-calendar"></i>
                                       </div>
                                       <input type="text" class="form-control pull-right" id="datepicker">
                                     </div>
                                   </div>
                                 </div>


   </div>
   </div>
   </div>


</form>
@endsection
