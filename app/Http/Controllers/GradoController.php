<?php namespace Sigea\Http\Controllers;

use Sigea\Http\Requests;
use Sigea\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Sigea\Grado;

use Illuminate\Http\Request;

class GradoController extends Controller {




	public function index()
	{
      $grados = Grado::all();
		if($this->verificarCooAcademico()){
			return view('cooacademico.grado.index', compact('grados'));
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
		if($this->verificarCooAcademico()){
			return view('cooacademico.grado.crear');
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
 		if($this->verificarGradoRepetido(Input::get('nombre'))){
			return view('cooacademico.grado.crear')->with(['error' => 'El nombre de grado ya existe.']);
		}
		else{

			$grado = new Grado();
			$grado->nombre = Input::get('nombre');
			$grado->intensidad_horaria = Input::get('intensidad_horaria');
			$grado->save();
			$grados = Grado::all();
			return view('cooacademico.grado.index')->with(['ok' => 'Grado creado correctamente.', 'grados' => $grados]);

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
			$grado = Grado::find($id);
			return view('cooacademico.grado.mostrar',compact('grado'));

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
			$grado = Grado::find($id);
			return view('cooacademico.grado.editar',compact('grado'));

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


			$grado = Grado::find($id);
			$grado->nombre = Input::get('nombre');
			$grado->intensidad_horaria = Input::get('intensidad_horaria');
			$grado->save();
			$grados = Grado::all();
			return view('cooacademico.grado.index')->with(['ok' => 'Grado actualizado correctamente.', 'grados' => $grados]);


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
			$grado = Grado::find($id);
			$grado->delete();
			$grados = Grado::all();
			return view('cooacademico.grado.index')->with(['ok' =>'Grado Eliminado exitosamente.', 'grados' => $grados]);
		} else
			echo"El perfil ".\Session::get('perfil')." no tiene los permisos necesarios para eliminar grados.";

	}

	public function verificarCooAcademico(){
		if(\Session::get('perfil')=='Coordinador Academico'){
			return true;
		}
	}
	public function verificarGradoRepetido($nombre){
		$grados = Grado::all();
		$respuesta = false;

		foreach ($grados as $grado){
			if ($grado->nombre == $nombre){
				$respuesta = true;
			}
		}
		return $respuesta;
	}

}
