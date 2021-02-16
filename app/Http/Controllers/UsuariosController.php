<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsuariosController extends Controller
{
    public function delete($id)
    {
        DB::table('users')->delete($id);
        return redirect('/usuarios');
    }


    public function update(Request $request)
    {
        $request->validate([
            'Nombre' => ['required', 'string', 'max:255'],
            'Localidad' => ['required', 'string'],
            'Direccion' => ['required', 'string'],
            'Telefono' => ['required', 'string','min:9','max:9'],
            'Email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['string', 'min:8' ],
        ]);
        $usuario = User::findOrFail($request->id);
       
        $usuario->Nombre= $request->Nombre;
    	$usuario->Localidad= $request->Localidad;
    	$usuario->Direccion= $request->Direccion;
    	$usuario->Telefono= $request->Telefono;
    	
    	if (!is_null($request->password)) {
    		
    		$usuario->password= Hash::make($request['password']);
    	}
    	$usuario->Email= $request->Email;
    	$usuario->Privilegios= $request->Privilegios;
    	//return $usuario;
    	$usuario->save();
    	return redirect('/usuarios');
    	
        
    }

    public function create(Request $request){
    	$request->validate([
            'Nombre' => ['required', 'string', 'max:255'],
            'Localidad' => ['required', 'string'],
            'Direccion' => ['required', 'string'],
            'Telefono' => ['required', 'string','min:9','max:9'],
            'Email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8' ],
        ]);
    	 User::create([
            'Nombre' => $request['Nombre'],
            'Localidad' => $request['Localidad'],
            'Direccion' => $request['Direccion'],
            'Telefono' => $request['Telefono'],
            'Email' => $request['Email'],
            'Privilegios' => $request['Privilegios'],
            'password' => Hash::make($request['password']),
            
        ]);
        return redirect('/usuarios');
    }
}
