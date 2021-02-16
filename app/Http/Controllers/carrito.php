<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class carrito extends Controller
{
    public function add(Request $request){
    	$id=$request->id;
    	$nombre=$request->nombre;
    	$precio=$request->precio;
    	$cantidad=intval($request->cantidad);
    	Cart::instance('carrito')->restore(auth()->user()->id);
    	Cart::instance('carrito')->add($id, $nombre, $precio, $cantidad);
    	Cart::instance('carrito')->store(auth()->user()->id);
    	
    	return back();

    }
    public function show(){
    	Cart::instance('carrito')->restore(auth()->user()->id);
    	//return $total=Cart::getTotal();
    	return view('carrito', array('productos'=>Cart::content(),'total'=>Cart::getTotal()));
    }
    public function delete($id){
    	Cart::instance('carrito')->restore(auth()->user()->id);
    	Cart::instance('carrito')->remove($id);
    	//return Cart::content();
    	Cart::instance('carrito')->store(auth()->user()->id);

    	return view('carrito', array('productos'=>Cart::content(),'total'=>Cart::getTotal()));
    }
}
