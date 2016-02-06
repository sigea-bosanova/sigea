<?php namespace Sigea\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Sigea\Http\Requests;
use Sigea\Http\Controllers\Controller;
use Sigea\Curso;
use Sigea\Grado;

use Illuminate\Http\Request;

class CursoController extends Controller {



	public function index()
	{

		if($this->verificarCooAcademico()){
			$cursos = Curso::all();
			return view('cooacademico.curso.index')->with(['cursos'=>$cursos]);
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
			$grados = $this->formatearGrados();
			return view('cooacademico.curso.crear', compact('grados'));
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

		if($this->verificarCursoRepetido(Input::get('nombre'))){
			$grados = $this->formatearGrados();
			return view('cooacademico.curso.crear')->with(['error' => 'El nombre de curso ya existe.', 'grados' => $grados]);
		}
		else{

			$curso = new Curso();
			$curso->nombre = Input::get('nombre');
			$curso->grado_id = Input::get('grado_id');
			$curso->save();
			$cursos = Curso::all();
			return view('cooacademico.curso.index')->with(['ok' => 'Curso creado correctamente.', 'cursos' => $cursos]);

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
			$curso = Curso::find($id);
			return view('cooacademico.curso.mostrar',compact('curso'));

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
			$curso = Curso::find($id);
			$grados = $this->formatearGrados();
			return view('cooacademico.curso.editar',compact('curso','grados'));

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


		$curso = Curso::find($id);
		$curso->nombre = Input::get('nombre');
		$curso->grado_id = Input::get('grado_id');
		$curso->save();
		$cursos = Curso::all();
		return view('cooacademico.curso.index')->with(['ok' => 'Curso actualizado correctamente.', 'cursos' => $cursos]);


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
			$curso = Curso::find($id);
			$curso->delete();
			$cursos = Curso::all();
			return view('cooacademico.curso.index')->with(['ok' =>'Curso Eliminado exitosamente.', 'cursos' => $cursos]);
		} else
			echo"El perfil ".\Session::get('perfil')." no tiene los permisos necesarios para eliminar grados.";

	}

	public function verificarCooAcademico(){
		if(\Session::get('perfil')=='Coordinador Academico'){
			return true;
		}
	}
	public function verificarCursoRepetido($nombre){
		$cursos = Curso::all();
		$respuesta = false;

		foreach ($cursos as $curso){
			if ($curso->nombre == $nombre){
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
