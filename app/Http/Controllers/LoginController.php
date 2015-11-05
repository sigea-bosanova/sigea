<?php namespace Sigea\Http\Controllers;

use Sigea\Http\Requests;
use Sigea\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Sigea\Estudiante;
use Sigea\Persona;
use Sigea\User;




class LoginController extends Controller {


	public function index()
	{
		return view('compartido.login');
	}

	public function entrar (Request $request){

		$id = $request->identificacion;
		$password = $request->pass;




		if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'estudiante' ])){

			$estudiante = Estudiante::find($id);
			$nombre = $estudiante->nombre;
			$nombreCompleto= $nombre." ".$estudiante->primer_apellido." ".$estudiante->segundo_apellido;

			Session::put(['id' =>$id, 'nombre' => $nombre,'nombreCompleto' => $nombreCompleto,
				'perfil' => 'Estudiante','email' => $estudiante->email,'direccion' => $estudiante->direccion,
				'celular' => $estudiante->celular]);

			return redirect()->route('estudiante.inicio');
		}


		if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'docente' ])){

			$persona = Persona::find($id);
			$nombre = $persona->nombres;
			$nombreCompleto = $nombre." ".$persona->primer_apellido." ".$persona->segundo_apellido;
			$email = User::find($id)->email;

			Session::put(['id' =>$id, 'nombre'=>$nombre,'nombreCompleto' => $nombreCompleto,
				'perfil' => 'Docente','email' => $email,'direccion' => $persona->direccion,
				'celular' => $persona->celular]);

			return redirect()->route('docente.inicio');
		}


		if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'secretaria' ])){

			$persona = Persona::find($id);
			$nombre = $persona->nombres;
			$nombreCompleto = $nombre." ".$persona->primer_apellido." ".$persona->segundo_apellido;
			$email = User::find($id)->email;

			Session::put(['id' =>$id, 'nombre'=>$nombre,'nombreCompleto' => $nombreCompleto,
				'perfil' => 'Secretaria','email' => $email,'direccion' => $persona->direccion,
				'celular' => $persona->celular]);


			return redirect()->route('secretaria.inicio');
		}


		if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'cooAcademico' ])){

			$persona = Persona::find($id);
			$nombre = $persona->nombres;
			$nombreCompleto = $nombre." ".$persona->primer_apellido." ".$persona->segundo_apellido;
			$email = User::find($id)->email;

			Session::put(['id' =>$id, 'nombre'=>$nombre,'nombreCompleto' => $nombreCompleto,
				'perfil' => 'Coordinador Academico','email' => $email,'direccion' => $persona->direccion,
				'celular' => $persona->celular]);

			return redirect()->route('cooacademico.inicio');

		}


		if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'cooDisciplina' ])){

			$persona = Persona::find($id);
			$nombre = $persona->nombres;
			$nombreCompleto = $nombre." ".$persona->primer_apellido." ".$persona->segundo_apellido;
			$email = User::find($id)->email;

			Session::put(['id' =>$id, 'nombre'=>$nombre,'nombreCompleto' => $nombreCompleto,
				'perfil' => 'Coordinador Disciplina','email' => $email,'direccion' => $persona->direccion,
				'celular' => $persona->celular]);

			return redirect()->route('coodisciplina.inicio');

		}


		if (Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'admi' ])){

			$persona = Persona::find($id);
			$nombre = $persona->nombres;
			$nombreCompleto = $nombre." ".$persona->primer_apellido." ".$persona->segundo_apellido;
			$email = User::find($id)->email;

			Session::put(['id' =>$id, 'nombre'=>$nombre,'nombreCompleto' => $nombreCompleto,
				'perfil' => 'Administrador','email' => $email,'direccion' => $persona->direccion,
				'celular' => $persona->celular]);

			return redirect()->route('admin.inicio');
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

	}


}
