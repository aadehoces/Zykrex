@extends('layouts.master')
@section('content')
<div class="row p-2">
	<div class="col-md-8">
		<div id="demo" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			</ul>
			<div class="carousel-inner">
				<div class="carousel-item active text-center">
					<a href="{{url('/portatil')}}"><img src="{{url('imgs/msi.jpg')}}" alt="Msi" class="img-fluid"></a>
					<div class="carousel-caption text-dark pt-5">
						<h4 class="d-none d-md-block">MSI GF63 Thin 9SC-047XES</h4>
					 	<p class="d-none d-xl-block">Intel Corei7-9750H/16GB/512GB SSD/GTX 1650/15.6</p>
					</div>
				</div>
				<div class="carousel-item text-center">
					<a href="{{url('/sobremesa')}}"><img src="{{asset('imgs/amd.jpg')}}" alt="AMD"></a>
					<div class="carousel-caption text-dark class="img-fluid>
						<h4 class="d-none d-md-block">PcCom Silver AMD Ryzen 5</h4>
					 	<p class="d-none d-xl-block">16GB/240GB SSD+1TB/GTX1650</p>
					</div>
				</div>
				<div class="carousel-item text-center">
					<a href="{{url('/movil')}}"><img src="{{url('imgs/xiaomi.jpg')}}" alt="Xiaomi" class="img-fluid"></a>
					<div class="carousel-caption text-dark class="img-fluid>
						<h4 class="d-none d-md-block">Xiaomi Redmi Note 8 Pro</h4>
						<p class="d-none d-xl-block">6/128Gb Azul Libre</p>
					</div>
				</div>
			</div>

					<!-- Left and right controls -->
			<a class="carousel-control-prev text-dark" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
			</a>

		</div>
	</div>
	<div class="col-md-4 d-none d-sm-block">
		<div class="embed-responsive embed-responsive-4by3 mt-4">
			 <iframe width="560" height="315" src="https://www.youtube.com/embed/WYvMdPuDrq0" frameborder="0" allow="accelerometer; autoplay; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>
</div>
<div class="row p-4 ">
	<div class="col-12">
		<h3>Servicios</h3>
	</div>
	<div class="col-md-3 text-center">
		<div class="thumbnail">
			<img src="{{url('imgs/web.jpg')}}" alt="Creación de páginas web" class="img-fluid rounded">
			<div class="caption mt-2 ">
				<h4>Creación de páginas web</h4>                                    
			</div>
		</div>
	</div>
	<div class="col-md-3 text-center">
		<div class="thumbnail">
			<img src="{{url('imgs/equipos.jpg')}}" alt="Creación de páginas web" class="img-fluid rounded">
			<div class="caption mt-2">
				<h4>Montaje y Mantenimiento de equipos</h4>                                 
			</div>
		</div>
	</div>
	<div class="col-md-3 text-center">
		<div class="thumbnail">
			<img src="{{url('imgs/redes.jpg')}}" alt="redes" class="img-fluid rounded">
			<div class="caption mt-2">
				<h4>Montaje de redes</h4>                                   
			</div>
		</div>
	</div>
	<div class="col-md-3 text-center">
		<div class="thumbnail">
			<img src="{{url('imgs/bd.png')}}" alt="Creación de páginas web" class="img-fluid rounded">
			<div class="caption mt-2">
				<h4>Bases de datos</h4>
			</div>
		</div>
	</div>
</div>
	
 

@stop