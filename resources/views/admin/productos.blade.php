@extends('layouts.master')
@section('content')



@if($errors->any())
	<p class="text-danger">{{$errors->first('Nombre')}}</p>
	<p class="text-danger">{{$errors->first('Descripcion')}}</p>
	<p class="text-danger">{{$errors->first('Categoria')}}</p>
	<p class="text-danger">{{$errors->first('Imagen')}}</p>
	<p class="text-danger">{{$errors->first('Precio')}}</p>
@endif
<div class="row border mb-2">
	<table class="table table-striped text-center">
				<thead>
					<tr>
						<th scope="col">Nombre</th>
						<th scope="col">Descripcion</th>
						<th scope="col">Categoria</th>
						<th scope="col">Imagen</th>
						<th scope="col">Precio</th>
						<th scope="col">Actualizar</th>
						<th scope="col">Eliminar</th>
					</tr>
				</thead>
				<tbody>	

			@foreach( $productos as $key => $producto )
					<tr>
								<form method="POST" action="{{ url("productos/{$producto->id}") }}" enctype="multipart/form-data">
									@csrf
							      	@method('PUT')
								<th><input type="text" class="form-control" name="Nombre" value="{{$producto->Nombre}}">
									</th>
								<th><input type="text"class="form-control"  name="Descripcion" value="{{$producto->Descripcion}}"></th>
								<th>
									<select class="form-control" name="Categoria">
										<option selected  value="{{$producto->Categoria}}">{{$producto->Categoria}}</option>
										@if($producto->Categoria !='Sobremesa')
											<option value="Sobremesa">Sobremesa</option>
										@endif
										@if($producto->Categoria !='Portatil')
											<option value="Portatil">Portatil</option>
										@endif
										@if($producto->Categoria !='Movil')
											<option value="Movil">Movil</option>
										@endif
										
										
										
										
	 								</select>
								</th>
								<th><input type="hidden" name="MAX_FILE_SIZE" value="512000" />
								<input name="Imagen" type="file" /></th>
								<th><input type="text" class="form-control" name="Precio" value="{{$producto->Precio}}"></th>
								<input type="hidden" class="form-control" name="Id" value="{{$producto->Productos}}">
							
							
								<td>
									<button class="btn btn-warning " name="Productos" value="Actualizar" type="submit">Actualizar</button>
								</td>
								</form>
								<form method="POST" action="{{ url("productos/{$producto->id}") }}">
							      @csrf
							      @method('DELETE')
							      <td>
							      	 <button class="btn btn-primary "type="submit">Eliminar</button>
							      </td>
							     
							    </form>
							
							</tr>
			
		
			@endforeach
							<tr>
								<form action="{{ url('productos/show') }}" method="POST" enctype="multipart/form-data">
									@csrf
								<th><input type="text" class="form-control" name="Nombre" >
								@error('Nombre')
                                    <p><span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span></p>
                                @enderror</th>
								<th><input type="text"class="form-control"  name="Descripcion"></th>
								<th>
									<select class="form-control" name="Categoria">
										
											<option value="Sobremesa">Sobremesa</option>

											<option value="Portatil">Portatil</option>
										
											<option value="Movil">Movil</option>
										
										
										
										
										
	 								</select>
								</th>
								<th><input type="hidden" name="MAX_FILE_SIZE" value="512000" />
								<input name="Imagen" type="file" /></th>
								<th><input type="text" class="form-control" name="Precio" ></th>
								<input type="hidden" class="form-control" name="Id">
							
							
								<td>
									
								</td>
								<td>
									<button class="btn btn-primary " name="Productos" value="crear" type="submit">Añadir</button>
								</td>
							</form>
							</tr>
	</tbody>
</table>
</div>
@stop