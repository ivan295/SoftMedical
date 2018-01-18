@extends('adminlte::layouts.app')

@section('contentheader_title')
Nueva Persona
@endsection

@section('main-content')
 @include('adminlte::mensaje.error')
 <div class="center-block" style="position: absolute; margin:auto" >
			<div class="col-md-5">
                <div class="container-fluid">
             				<div class="main-login main-center">
             					<form class="form-horizontal" method="post" action="#">

             						<div class="form-group">
             							<label for="name" class="cols-sm-2 control-label">Nombre</label>
             							<div class="cols-sm-8">
             								<div class="input-group">
             									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
             									<input type="text" class="form-control" name="name" id="name"  placeholder="Nombre"/>
             								</div>
             							</div>
             						</div>

             						<div class="form-group">
             							<label for="email" class="cols-sm-2 control-label">Email</label>
             							<div class="cols-sm-10">
             								<div class="input-group">
             									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
             									<input type="text" class="form-control" name="email" id="email"  placeholder="Email"/>
             								</div>
             							</div>
             						</div>

             						<div class="form-group">
             							<label for="username" class="cols-sm-2 control-label"></label>
             							<div class="cols-sm-10">
             								<div class="input-group">
             									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
             									<input type="text" class="form-control" name="username" id="username"  placeholder="Nombre de Usuario"/>
             								</div>
             							</div>
             						</div>

             						<div class="form-group">
             							<label for="password" class="cols-sm-2 control-label">Contraseña</label>
             							<div class="cols-sm-10">
             								<div class="input-group">
             									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
             									<input type="password" class="form-control" name="password" id="password"  placeholder="Ingresar Contraseña"/>
             								</div>
             							</div>
             						</div>

             						<div class="form-group">
             							<label for="confirm" class="cols-sm-2 control-label">Confirmar Contraseña</label>
             							<div class="cols-sm-10">
             								<div class="input-group">
             									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
             									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirmar Contraseña"/>
             								</div>
             							</div>
             						</div>

             						<div class="form-group ">
             							<button type="button" class="btn btn-primary btn-lg btn-block login-button">Registrar</button>
             						</div>
			</div>
		</div>
	</div>
  </div>


@endsection
