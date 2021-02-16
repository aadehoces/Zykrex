@extends('layouts.master')
@section('content')
<div class="row border mb-2">
	
	
	@foreach( $productos as $key => $producto )
		@if($producto->Categoria=='Movil')
			<div class="col-md-4 col-sm-6 p-2">
			<img src="{{url('imgs/productos/'.$producto->Imagen)}}" class="img-fluid">
		<div class="bg-light p-2 rounded">
			<h4>{{$producto->Nombre}}</h4>
			<h5>{{$producto->Descripcion}}</h5>
			<p>Precio: {{$producto->Precio}}€</p>
			<form method="post" action="{{ url("producto/{$producto->id}") }}">
				@csrf
				@method('PUT')
				<input type="hidden" name="id" id="id" value="{{$producto->id}}">
				<input type="hidden" name="nombre" id="nombre" value="{{$producto->Nombre}}">
				<input type="hidden" name="precio" id="precio" value="{{$producto->Precio}}">
				<input type="hidden" name="categoria" id="Categoria" value="{{$producto->Categoria}}">
			@if(Auth::check())
				<label>Cantidad: </label>
				<input type="number" name="cantidad" id="cantidad" min="1" max="10" size="1" required value="1">
				<br>
				<button class="btn btn-primary mt-2"  type="submit">Añadir a la cesta </button>
			@else
				<a href="{{url('login')}}">Inicia sesión para comprar</a>
				
			@endif
			</form>
		</div> 
	</div>

		@endif
	@endforeach
	
</div>
@stop