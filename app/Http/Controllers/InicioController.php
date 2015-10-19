<?php namespace Sigea\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;
use Sigea\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sigea\Estudiante;
use Sigea\Persona;

class InicioController extends Controller {





	public function entrar(Request $request)
	{

		$id = $request->identificacion;
		$password = $request->pass;
		$prueba = $request->prueba;



	      if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'estudiante' ])){
              $nombre = Estudiante::find($id)->nombre;
               Session::put(['id' =>$id, 'perfil' => 'estudiante','nombre' => $nombre]);
              return view('estudiante.base');
		  }
		if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'docente' ])){
            $nombre = Persona::find($id)->nombres;
            Session::put(['id' =>$id, 'perfil' => 'docente','nombre'=>$nombre]);
			return view('docente.base');
		}
		if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'secretaria' ])){
            $nombre = Persona::find($id)->nombres;
            Session::put(['id' =>$id, 'perfil' => 'secretaria','nombre' =>$nombre]);
			return view('secretaria.base');
		}
		if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'cooAcademico' ])){
            $nombre = Persona::find($id)->nombres;
            Session::put(['id' =>$id, 'perfil' => 'cooAcademico','nombre' => $nombre ]);
			return view('cooacademico.base');
		}
		if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'cooDisciplina' ])){
            $nombre = Persona::find($id)->nombres;
            Session::put(['id' =>$id, 'perfil' => 'cooDisciplina', 'nombre' => $nombre]);
			return view('coodisciplina.base');
		}
        if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'admi' ])){
            $nombre = Persona::find($id)->nombres;
            Session::put(['id' =>$id, 'perfil' => 'admi','nombre'=>$nombre]);
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
