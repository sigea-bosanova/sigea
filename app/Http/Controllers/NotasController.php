<?php namespace Sigea\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Sigea\Estudiante;
use Sigea\Http\Requests;
use Sigea\Http\Controllers\Controller;

use Illuminate\Http\Request;

class NotasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
     if (Auth::check()){
		 if(Session::get('perfil')=='Docente'){

			 return view('docente.gestionarNotas');

		 }

	 }
		$mensajeAux = 'No tiene los permisos necesarios para acceder a esta pagina.';
		return view ('compartido.login',compact('mensajeAux'));

	}


	public function gestionarNotas()
	{
		if (Auth::check()){
			if(Session::get('perfil')=='Docente'){

				$mostrarTabla = 'ok';

				return view('docente.gestionarNotas', compact('mostrarTabla'));

			}

		}
		$mensajeAux = 'No tiene los permisos necesarios para acceder a esta pagina.';
		return view ('compartido.login',compact('mensajeAux'));

	}







	public function consultarEstudiante(Request $request)
	{

		if (Auth::check()){
			if(Session::get('perfil')=='Docente'){

                $id = $request->id;

				if(Estudiante::find($id))
				{
					$estudiante = Estudiante::find($id);

					return view('docente.verEstudiante',compact('estudiante'));

				}

 				else{
				   $mensaje = 'vacio';
					return view('docente.verEstudiante',compact('mensaje'));
				}


			}

		}
		$mensajeAux = 'No tiene los permisos necesarios para acceder a esta pagina.';
		return view ('compartido.login',compact('mensajeAux'));
	}



	public function mostrarConsultarEstudiante()
	{
		  return view('docente.verEstudiante');
	}



}
