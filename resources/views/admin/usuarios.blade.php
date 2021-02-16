@extends('layouts.master')
@section('content')

@if($errors->any())
<div class="alert alert-danger" role="alert">
	<p class="text-danger">{{$errors->first('Nombre')}}</p>
	<p class="text-danger">{{$errors->first('Direccion')}}</p>
	<p class="text-danger">{{$errors->first('Localidad')}}</p>
	<p class="text-danger">{{$errors->first('Telefono')}}</p>
	<p class="text-danger">{{$errors->first('Email')}}</p>
	<p class="text-danger">{{$errors->first('password')}}</p>
</div>
@endif
<div class="row border mb-2">
	<table class="table table-striped text-center">
				<thead>
					<tr>
						<th scope="col">Nombre</th>
						<th scope="col">Direccion</th>
						<th scope="col">Localidad</th>
						<th scope="col">Telefono</th>
						<th scope="col">Email</th>
						<th scope="col">Contraseña</th>
						<th scope="col">Privilegios</th>
						<th scope="col">Actualizar</th>
						<th scope="col">Eliminar</th>
					</tr>
				</thead>
				<tbody>	
	
			@foreach( $usuarios as $key => $usuario )
					<tr>
								<form method="POST" action="{{ url("usuario/{$usuario->id}") }}">
									@csrf
							      	@method('PUT')
								<th>
									<input type="text" class="form-control" name="Nombre" value="{{$usuario->Nombre}}">
									<p>
										@error('Nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
									</p>
								</th>
								<th><input type="text"class="form-control"  name="Direccion" value="{{$usuario->Direccion}}"></th>
								
								
								<th><input type="text" class="form-control" name="Localidad" value="{{$usuario->Localidad}}"></th>
								<input type="hidden" class="form-control" name="Id" value="{{$usuario->id}}">
								<th><input type="number"class="form-control"  name="Telefono" value="{{$usuario->Telefono}}"></th>
								<th><input type="email"class="form-control"  name="Email" value="{{$usuario->Email}}"></th>
								<th><input type="password"class="form-control"  name="password"></th>
								<th>
									<select class="form-control" name="Privilegios">
										<option selected  value="{{$usuario->Privilegios}}">{{$usuario->Privilegios}}</option>
										@if($usuario->Privilegios !='Usuario')
											<option value="Usuario">Usuario</option>
										@endif
										@if($usuario->Privilegios !='Administrador')
											<option value="Administrador">Administrador</option>
										@endif
										
										
										
										
										
	 								</select>
								</th>
								<td>
									<button class="btn btn-warning " name="usuario" value="Actualizar" type="submit">Actualizar</button>
								</td>
								
								</form>
								<form method="POST" action="{{ url("usuario/{$usuario->id}") }}">
							      @csrf
							      @method('DELETE')
							      <td>
							      	 <button class="btn btn-danger "type="submit">Eliminar</button>
							      </td>

							     
							    </form>
							
							</tr>
			
		
			@endforeach
							<tr>
								<form action="{{ url('usuarios') }}" method="POST" enctype="multipart/form-data">
									@csrf
								<th><input type="text" class="form-control" name="Nombre" >
								<p>
										@error('Nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
									</p></th>
								<th><input type="text"class="form-control"  name="Direccion" ></th>
								
								
								<th><input type="text" class="form-control" name="Localidad" ></th>
								<input type="hidden" class="form-control" name="Id">
								<th><input type="number"class="form-control"  name="Telefono"></th>
								<th><input type="email"class="form-control"  name="Email"></th>
								<th><input type="password"class="form-control"  name="password"></th>
								<th>
									<select class="form-control" name="Privilegios">
										@if($usuario->Privilegio !='usuario')
											<option value="usuario-">Usuario</option>
										@endif
										@if($usuario->Privilegio !='administrador')
											<option value="administrador">Administrador</option>
										@endif
	 								</select>
								</th>
								<td></td>
								<td>
									<button class="btn btn-primary " name="Usuarios" value="crear" type="submit">Añadir</button>
								</td>
							</form>
							</tr>
	</tbody>
</table>
</div>
@stop