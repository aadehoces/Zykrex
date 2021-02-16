<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\productos;
use App\Models\User;

class Pagecontroller extends Controller
{

    public function getSobremesa(){
        $productos= productos::all();
    	return view('productos.sobremesa', array('productos'=>$productos));
    }
    public function getMovil(){
        $productos= productos::all();
    	return view('productos.movil', array('productos'=>$productos));
    }
    public function getPortatil(){
        $productos= productos::all();
    	return view('productos.portatil', array('productos'=>$productos));
    }
    public function getProdutos(){
        if (auth()->user()) {
            if (auth()->user()->Privilegios=='Administrador') {
                $productos= productos::all();
                return view('admin.productos', array('productos'=>$productos));
            }
           
        }else{
            return redirect('/inicio');
        }
        
    }
    public function getUsuarios(){
        if (auth()->user()) {
            if (auth()->user()->Privilegios=='Administrador') {
                $usuarios= User::all();
                return view('admin.usuarios', array('usuarios'=>$usuarios));
            }
           
        }else{
            return redirect('/inicio');
        }
        
    }

}
