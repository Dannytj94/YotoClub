<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\usuarios;
use Auth;

class LoginUsuarioController extends Controller
{
    public function RegistroNino(request $request)
    {

    	$validacion = Validator::make($request->all(),
    [
    	'apodo' => 'required|max:50',
    	'email' => 'email|unique:usuarios',
    	'nombre' => 'required|max:50',
    	'apellidos' => 'required|max:100',
    	'password' => 'required|min:8'
    	//'sexo' => 'required'

    ]);

    	if($validacion->fails())
    	{

    		return redirect('/')
    			->withInput()
    			->withErrors($validacion);
    	}

    	$user=new usuarios();
    	$user->apodo = $request->apodo;
    	$user->nombre = $request->nombre;
    	$user->apellidos = $request->apellidos;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->url = $request->password;
    	//$user->sexo = $request->sexo;
    	$user->save();

    	return "Usuario registrado";
    }

    public function LoginUsuario(){

    	$credenciales = $this->Validate(request(), 
    	[

    		'apodo' => 'max:50',
    		'password' => 'required'
    	]);

    	if(Auth::attempt($credenciales)){

    		return view('post.index');

    	}

    	else
    	{

    		return view('post.index');
            //redirect('login')
    		//	->withErros(['apodo'=>trans('auth.failed')])
    		//	->withInput(request(['apodo']));
    	}


    }
}
