<?php namespace Sigea\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;
use Sigea\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sigea\Estudiante;
use Sigea\Persona;
use Sigea\User;

class InicioController extends Controller {





	public function entrar(Request $request)
	{

		$id = $request->identificacion;
		$password = $request->pass;




	      if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'estudiante' ])){

			  $estudiante = Estudiante::find($id);
			  $nombre = $estudiante->nombre;
			  $nombreCompleto= $nombre." ".$estudiante->primer_apellido." ".$estudiante->segundo_apellido;

               Session::put(['id' =>$id, 'nombre' => $nombre,'nombreCompleto' => $nombreCompleto,
				            'perfil' => 'Estudiante','email' => $estudiante->email,'direccion' => $estudiante->direccion,
			                'celular' => $estudiante->celular]);

              return view('estudiante.inicio');
		  }


		if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'docente' ])){

            $persona = Persona::find($id);
			$nombre = $persona->nombres;
			$nombreCompleto = $nombre." ".$persona->primer_apellido." ".$persona->segundo_apellido;
			$email = User::find($id)->email;

			Session::put(['id' =>$id, 'nombre'=>$nombre,'nombreCompleto' => $nombreCompleto,
				'perfil' => 'Docente','email' => $email,'direccion' => $persona->direccion,
				'celular' => $persona->celular]);

			return view('docente.inicio');
		}


		if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'secretaria' ])){

			$persona = Persona::find($id);
			$nombre = $persona->nombres;
			$nombreCompleto = $nombre." ".$persona->primer_apellido." ".$persona->segundo_apellido;
			$email = User::find($id)->email;

			Session::put(['id' =>$id, 'nombre'=>$nombre,'nombreCompleto' => $nombreCompleto,
				'perfil' => 'Secretaria','email' => $email,'direccion' => $persona->direccion,
				'celular' => $persona->celular]);


			return view('secretaria.inicio');
		}


		if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'cooAcademico' ])){

			$persona = Persona::find($id);
			$nombre = $persona->nombres;
			$nombreCompleto = $nombre." ".$persona->primer_apellido." ".$persona->segundo_apellido;
			$email = User::find($id)->email;

			Session::put(['id' =>$id, 'nombre'=>$nombre,'nombreCompleto' => $nombreCompleto,
				'perfil' => 'Coordinador Academico','email' => $email,'direccion' => $persona->direccion,
				'celular' => $persona->celular]);

			return view('cooacademico.inicio');

		}


		if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'cooDisciplina' ])){

			$persona = Persona::find($id);
			$nombre = $persona->nombres;
			$nombreCompleto = $nombre." ".$persona->primer_apellido." ".$persona->segundo_apellido;
			$email = User::find($id)->email;

			Session::put(['id' =>$id, 'nombre'=>$nombre,'nombreCompleto' => $nombreCompleto,
				'perfil' => 'Coordinador Disciplina','email' => $email,'direccion' => $persona->direccion,
				'celular' => $persona->celular]);

			return view('coodisciplina.inicio');

		}


        if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'admi' ])){

			$persona = Persona::find($id);
			$nombre = $persona->nombres;
			$nombreCompleto = $nombre." ".$persona->primer_apellido." ".$persona->segundo_apellido;
			$email = User::find($id)->email;

			Session::put(['id' =>$id, 'nombre'=>$nombre,'nombreCompleto' => $nombreCompleto,
				'perfil' => 'Administrador','email' => $email,'direccion' => $persona->direccion,
				'celular' => $persona->celular]);

			return view('admin.inicio');
        }



		else
            $mensaje = 'error';
			return view('compartido.login',compact('mensaje'));

	}


	public function salir()
	{
        Session::flush();
		Auth::logout();
		return redirect()->route('login');
		//return view('compartido.login');
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
