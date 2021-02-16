<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\productos;


class ProductosController extends Controller
{
    public function delete($id)
    {
        DB::table('productos')->delete($id);
        return redirect('/productos/show');
    }
    public function update(Request $request)
    {
        $request->validate([
            'Nombre' => ['required', 'min:3',],
            'Descripcion' => 'required',
            'Categoria' => 'required',
            'Precio' => ['required','numeric'],
        ]);
        $producto = productos::findOrFail($request->id);
       
        $producto->Nombre= $request->Nombre;
    	$producto->Descripcion= $request->Descripcion;
    	$producto->Categoria= $request->Categoria;
    	
    	if (!is_null($request->Imagen)) {
    		
    		
            $file=$request->file('Imagen');
            $archivo=$file->getClientOriginalName();
            $file->move(public_path('imgs/productos/'),$archivo);
            $producto->Imagen= $archivo;

    	}
    	$producto->Precio= $request->Precio;
    	$producto->save();
    	return redirect('/productos/show');
    	
        
    }


    public function create(Request $request){
    	$request->validate([
            'Nombre' => ['required', 'min:3',],
            'Descripcion' => 'required',
            'Categoria' => 'required',
            'Precio' => ['required','numeric'],
        ]);
    	$producto=new productos;
    	$producto->Nombre= $request->Nombre;
    	$producto->Descripcion= $request->Descripcion;
    	$producto->Categoria= $request->Categoria;
    	$file=$request->file('Imagen');
        $archivo=$file->getClientOriginalName();
        $file->move(public_path('imgs/productos/'),$archivo);
        $producto->Imagen= $archivo;
    	$producto->Precio= $request->Precio;
    	
        $producto->save();
        
    	return redirect('/productos/show');
    }
}
