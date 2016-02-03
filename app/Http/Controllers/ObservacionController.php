<?php namespace Sigea\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Sigea\Http\Requests;
use Sigea\Http\Controllers\Controller;
use Sigea\Estudiante;
use Sigea\Observacion;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class ObservacionController extends Controller {


	public function index()
	{
		return view('coodisciplina.observaciones.index');
	}

	public function buscar()
	{


			$estudiante = Estudiante::find(Input::get('id'));

			if(is_null($estudiante)){
				$estudiante = NULL;
				$observaciones = NULL;
				$mensaje = 'error';

			}
			else {
				$observaciones = $estudiante->observaciones;
				$mensaje = 'ok';
			}


			return view('coodisciplina.observaciones.index')->with(['estudiante' => $estudiante, 'observaciones' => $observaciones,'mensaje' =>$mensaje]);


	}

	public function crear(){
		return view('coodisciplina.observaciones.crear1');
	}

	public function buscarEstudiante(){
		$estudiante = Estudiante::find(Input::get('id'));
		if(is_null($estudiante)){
			$mensaje = 'error';
		return view('coodisciplina.observaciones.crear1')->with(['estudiante'=>$estudiante, 'mensaje' => $mensaje]);

		}
		else return view('coodisciplina.observaciones.crear2')->with(['estudiante' => $estudiante]);

	}
	public function guardar(){

		$estudiante = Estudiante::find(Input::get('id'));
		$observacion = new Observacion();
		$observacion->descripcion = Input::get('observacion');
		$estudiante->observaciones()->save($observacion);
		$mensaje = 'ok';
		 return view('coodisciplina.observaciones.crear1')->with(['mensaje'=> $mensaje]);

	}

	public function modificar(){

		return view('coodisciplina.observaciones.modificar1');

	}

	public function  buscarModificar(){

		$estudiante = Estudiante::find(Input::get('id'));

		if(is_null($estudiante)){
			$mensaje = 'error';
			return view('coodisciplina.observaciones.modificar1')->with(['estudiante'=>$estudiante,'mensaje' =>$mensaje]);
		}
		else {
		  $observaciones = $estudiante->observaciones;
			$mensaje = 'ok';
		}


		return view('coodisciplina.observaciones.modificar2')->with(['estudiante' => $estudiante, 'observaciones' => $observaciones,'mensaje' =>$mensaje]);



	}

	public function actualizar(){


		$observaciones = Observacion::find(Input::all('id_observacion'));
		$observacion = $observaciones[0];
		$observacion->descripcion = Input::get('observacion');
		$observacion->save();

		$estudiante = Estudiante::find(Input::get('id_estudiante'));
		$observaciones = $estudiante->observaciones;

		$mensaje = 'ok';
		return view('coodisciplina.observaciones.modificar2')->with(['estudiante'=>$estudiante, 'observaciones' => $observaciones, 'mensaje' => $mensaje]);

	}


}


