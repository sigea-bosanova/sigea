<?php namespace Sigea\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;
use Sigea\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InicioController extends Controller {





	public function entrar(Request $request)
	{

		$id = $request->identificacion;
		$password = $request->pass;
		$prueba = $request->prueba;



	      if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'estudiante' ])){
                return view('estudiante.base');
		  }
		if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'docente' ])){
			return view('docente.base');
		}
		if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'secretaria' ])){
			return view('secretaria.base');
		}
		if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'cooAcademico' ])){
			return view('cooacademico.base');
		}
		if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'cooDisciplina' ])){
			return view('coodisciplina.base');
		}
        if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'admi' ])){
            return view('admin.base');
        }

		else
            $mensaje = 'error';
			return view('compartido.login',compact('mensaje'));

	}


	public function salir()
	{
        Session::flush();
		Auth::logout();
		return view('compartido.login');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
