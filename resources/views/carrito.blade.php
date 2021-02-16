@extends('layouts.master')
@section('content')
<div class="border p-2">

@if($productos=='[]')
	No hay productos en el carrito...
@else
<table class="table text-center table-striped">
			  <thead class="thead-dark">
				<tr>
				  <th scope="col">Nombre</th>
				  <th scope="col">Cantidad</th>
				  <th scope="col">Precio</th>
				  <th scope="col">Total</th>
				  <th scope="col"></th>
				</tr>
			  </thead>
			  <tbody>
			  
			  	@foreach($productos as $key =>$producto) 
			  	
			  	<tr>
					<th scope="row">{{$producto->name}}</th>
					<td>{{$producto->quantity}}</td>
					<td>{{$producto->price}}€</td>
					<td>{{number_format($producto->quantity*$producto->price),2}}</td>
					<td>
						<form method="POST" action="{{ url("carrito/{$key}") }}">
							      @csrf
							      @method('DELETE')
							
							      	 <button class="btn btn-danger "type="submit">Eliminar</button>
							      

							     
					</form>
						
					</td>
				</tr>
			  	@endforeach
			  	<tr>
					<td></td>
					<td></td>
					<td><h4>Total</h4></td>
					<td><h4>{{$total}}€</h4></td>
					<form action="" method="">
						<td>
						<button class="btn btn-primary" >Tramitar Pedido
						</button>
						</td>
					</form>

				</tr>
</tbody>
</table>
@endif
</div>
@stop