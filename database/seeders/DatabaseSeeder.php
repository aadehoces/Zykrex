<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\User;
use App\Models\productos;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    private $productos = array( array('id'=>'1','nombre' => 'Sobremesa 1','descripcion'=>'sad', 'precio'=>'123','img'=>'img','Categoria'=>'Sobremesa' ), array('id'=>'1','nombre' => 'portatil 1','descripcion'=>'sad', 'precio'=>'123','img'=>'img','Categoria'=>'Portatil' ),   array('id'=>'1','nombre' => 'Movil 1','descripcion'=>'sad', 'precio'=>'123.32','img'=>'img','Categoria'=>'Movil' ), array('id'=>'1','nombre' => 'Movil 1','descripcion'=>'sad', 'precio'=>'123','img'=>'img','Categoria'=>'Movil' ), array('id'=>'1','nombre' => 'Movil 1','descripcion'=>'sad', 'precio'=>'123','img'=>'img','Categoria'=>'Movil' ),         array('id'=>'1','nombre' => 'Movil 1','descripcion'=>'sad', 'precio'=>'123','img'=>'img','Categoria'=>'Movil' )      );
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	self::seedUser();
        self::seedProductos();
       // \App\Models\User::factory(10)->create();
    }
    public function seedUser(){
    	DB::table('users')->delete();
    	$usuario1 = new User;
    	$usuario1 ->Nombre = 'Adrian';
    	$usuario1 ->Email = 'prueba@gmail.com';
    	$usuario1 ->password = Hash::make('123123123') ;
    	$usuario1 ->Direccion = 'das' ;
    	$usuario1 ->Localidad = 'das' ;
    	$usuario1 ->Telefono = '123123123' ;
    	$usuario1 ->Privilegios = 'Usuario' ;
    	$usuario1 ->save();
    }
    public function seedProductos(){
        DB::table('productos')->delete();
        foreach ($this->productos as $producto) {
            $p=new productos;
            $p->Nombre=$producto['nombre'];
            $p->Descripcion=$producto['descripcion'];
            $p->Imagen=$producto['img'];
            $p->Categoria=$producto['Categoria'];
            $p->Precio=$producto['precio'];
            $p->save();
        }
        
    }
}
