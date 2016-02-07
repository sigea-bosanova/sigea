<?php namespace Sigea\Http\Controllers;

use Sigea\Http\Requests;
use Sigea\Http\Controllers\Controller;
use Sigea\Curso;
use Sigea\Grado;
use Sigea\Materia;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class MateriaController extends Controller {


	public function index()
	{

		if($this->verificarCooAcademico()){
			$materias = Materia::orderBy('grado_id')->get();
			return view('cooacademico.materia.index')->with(['materias'=>$materias]);
		} else
			echo"El perfil ".\Session::get('perfil')." no tiene los permisos necesarios para visitar esta pagina.";
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		$cantidadGrados = Grado::all()->count();


       if($cantidadGrados == 0){
		   $error = 'Para crear materias, primero se deben crear los grados que hay en la institucion.';
		   return view('cooacademico.materia.crear', compact('error'));
	   }

		if($this->verificarCooAcademico()){
			$grados = $this->formatearGrados();
			return view('cooacademico.materia.crear', compact('grados'));
		} else
			echo"El perfil ".\Session::get('perfil')." no tiene los permisos necesarios para visitar esta pagina.";

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		if($this->verificarMateriaRepetida(Input::get('nombre'), Input::get('grado_id'))){
			$grados = Grado::formatear();
			return view('cooacademico.materia.crear')->with(['error' => 'El nombre de materia ya existe, pruebe con otro.', 'grados' => $grados]);
		}
		else{

			$materia = new Materia();
			$materia->nombre = Input::get('nombre');
			$materia->grado_id = Input::get('grado_id');
			$materia->logro1 = Input::get('logro1');
			$materia->logro2 = Input::get('logro2');
			$materia->logro3 = Input::get('logro3');
			$materia->logro4 = Input::get('logro4');
			$materia->logro_final = Input::get('logro_final');
			$materia->save();
			$materias = Materia::orderBy('grado_id')->get();

			return view('cooacademico.materia.index')->with(['ok' => 'Materia creada correctamente.', 'materias' => $materias]);

		}

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		if($this->verificarCooAcademico()){
			$materia = Materia::find($id);
			$grados = Grado::formatear();
			return view('cooacademico.materia.mostrar',compact('materia','grados'));

		}else
			echo"El perfil ".\Session::get('perfil')." no tiene los permisos necesarios para visitar esta pagina.";
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		if($this->verificarCooAcademico()){
			$materia = Materia::find($id);
			$grados = $this->formatearGrados();
			return view('cooacademico.materia.editar',compact('materia','grados'));

		}else
			echo"El perfil ".\Session::get('perfil')." no tiene los permisos necesarios para visitar esta pagina.";
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$materia = Materia::find($id);
		$materia->nombre = Input::get('nombre');
		$materia->grado_id = Input::get('grado_id');
		$materia->logro1 = Input::get('logro1');
		$materia->logro2 = Input::get('logro2');
		$materia->logro3 = Input::get('logro3');
		$materia->logro4 = Input::get('logro4');
		$materia->logro_final = Input::get('logro_final');
		$materia->save();
		$materias = Materia::orderBy('grado_id')->get();
		return view('cooacademico.materia.index')->with(['ok' => 'Materia actualizada correctamente.', 'materias' => $materias]);


	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if($this->verificarCooAcademico()){
			$materia = Materia::find($id);
			$materia->delete();
			$materias = Materia::orderBy('grado_id')->get();
			return view('cooacademico.materia.index')->with(['ok' =>'Materia Eliminada exitosamente.', 'materias' => $materias]);
		} else
			echo"El perfil ".\Session::get('perfil')." no tiene los permisos necesarios para eliminar materias.";

	}

	public function verificarCooAcademico(){
		if(\Session::get('perfil')=='Coordinador Academico'){
			return true;
		}
		else return false;
	}
	public function verificarMateriaRepetida($nombre, $grado_id){
		$materias = Materia::all();
		$respuesta = false;

		foreach ($materias as $materia){
			if (($materia->nombre == $nombre)&&($materia->grado->id == $grado_id)){
				$respuesta = true;
			}
		}
		return $respuesta;
	}


	public function formatearGrados(){
		$gradosAux = Grado::all();
		$respuesta = array();

		foreach ($gradosAux as $grado){
			$respuesta [$grado->id] = $grado->nombre;
		}
		return $respuesta;
	}



}
