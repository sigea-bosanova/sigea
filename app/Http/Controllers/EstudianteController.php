<?php namespace Sigea\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Sigea\Curso;
use Sigea\Grado;
use Sigea\Http\Requests;
use Sigea\Http\Controllers\Controller;
use Sigea\Persona;
use Sigea\Demografico;
use Faker\Factory;
use Sigea\Materia;
use Sigea\User;
use Sigea\Acudiente;
use Sigea\Estudiante;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class EstudianteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
   return view('admin.estudiante.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.estudiante.crear');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$estudiante = new Estudiante();

		$estudiante->id = intval(Input::get('id'));
		$estudiante->nombre = Input::get('nombre');
		$estudiante->primer_apellido = Input::get('primer_apellido');
		$estudiante->segundo_apellido = Input::get('segundo_apellido');
		$estudiante->fecha_nacimiento = Input::get('fecha_nacimiento');
		$estudiante->email = Input::get('email');
		$estudiante->genero = Input::get('genero');
		$estudiante->jornada = Input::get('jornada');
		$estudiante->antiguo = Input::get('antiguo');
		$estudiante->estrato = Input::get('estrato');
		$estudiante->eps = Input::get('eps');
		$estudiante->etnia = Input::get('etnia');
		$estudiante->direccion = Input::get('direccion');
		$estudiante->barrio = Input::get('barrio');
		$estudiante->telefono = Input::get('telefono');
		$estudiante->celular = Input::get('celular');
		$estudiante->grado_id = Input::get('grado_id');
		$estudiante->curso_id = Input::get('curso_id');


		$demografico = new Demografico();
		$demografico->lugar_ocupa_hermanos = Input::get('lugar_ocupa_hermanos');
		$demografico->tipo_vivienda = Input::get('tipo_vivienda');
		$demografico->cantidad_veces_come_diario = Input::get('cantidad_veces_come_diario');
		$demografico->anos_perdidos = Input::get('anos_perdidos');

		$añosPerdidos ='';
		foreach(Input::get('descripcion_anos_perdidos') as $año){
			$añosPerdidos = $añosPerdidos.' - '.$año;
		}
		$demografico->descripcion_anos_perdidos = $añosPerdidos;
		$demografico->problemas_salud = Input::get('problemas_salud');
		$demografico->tratamiento_problemas_salud = Input::get('tratamiento_problemas_salud');
		$demografico->medicamentos_tomados = Input::get('medicamentos_tomados');
		$demografico->otro_problema = Input::get('otro_problema');
		$demografico->otra_terapia = Input::get('otra_terapia');
		$demografico->asignatura_dificulta = Input::get('asignatura_dificulta');
		$demografico->asignatura_facilita = Input::get('asignatura_facilita');
		$demografico->tipo_sangre = Input::get('tipo_sangre');
		$demografico->rh = Input::get('rh');


		$estudiante->demograficos()->save($demografico);
		$user = new User();

		$faker = Factory::create('es_ES');
		$pass = $faker->word . 'lml' . $faker->numberBetween($min = 231, $max = 666);

		$user->id = Input::get('id');
		$user->email = Input::get('email');
		$user->perfil = 'Estudiante';
		$user->password = bcrypt($pass);

		$user->save();

		$acudiente = new Acudiente();

		$acudiente->id = Input::get('id_ac_1');
		$acudiente->nombre = Input::get('nombre_ac_1');
		$acudiente->primer_apellido = Input::get('primer_apellido_ac_1');
		$acudiente->segundo_apellido = Input::get('segundo_apellido_ac_1');
		$acudiente->fecha_nacimiento = Input::get('fecha_nacimiento_ac_1');
		$acudiente->nivel_educativo = Input::get('nivel_educativo_ac_1');
		$acudiente->direccion = Input::get('direccion_ac_1');
		$acudiente->barrio = Input::get('barrio_ac_1');
		$acudiente->email = Input::get('email_ac_1');
		$acudiente->telefono = Input::get('telefono_ac_1');
		$acudiente->celular = Input::get('celular_ac_1');

		$acudiente->save();

		$estudiante->acudientes()->attach(Input::get('id_ac_1'), ['parentesco' => Input::get('parentesco_ac_1')]);

		if (!is_null(Input::get('id_ac_2')))
		{
			$acudiente2 = new Acudiente();

			$acudiente2->id = Input::get('id_ac_2');
			$acudiente2->nombre = Input::get('nombre_ac_2');
			$acudiente2->primer_apellido = Input::get('primer_apellido_ac_2');
			$acudiente2->segundo_apellido = Input::get('segundo_apellido_ac_2');
			$acudiente2->fecha_nacimiento = Input::get('fecha_nacimiento_ac_2');
			$acudiente2->nivel_educativo = Input::get('nivel_educativo_ac_2');
			$acudiente2->direccion = Input::get('direccion_ac_2');
			$acudiente2->barrio = Input::get('barrio_ac_2');
			$acudiente2->email = Input::get('email_ac_2');
			$acudiente2->telefono = Input::get('telefono_ac_2');
			$acudiente2->celular = Input::get('celular_ac_2');

			$acudiente2->save();

			$estudiante->acudientes()->attach(Input::get('id_ac_2'), ['parentesco' => Input::get('parentesco_ac_2')]);
		}



		$estudiante->save();

		$mensaje = 'Estudiante creado correctamente! Tome nota, la clave para que ' . $estudiante->nombres . ' ingrese al sistema es: ' . $pass;


		\Session::flash('message', $mensaje);
		return \Redirect::to('gestionar/estudiantes/estudiante');





	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$estudiante = Estudiante::find($id);
		$acudientes = $estudiante->acudientes;
		$grado = $estudiante->grado;
		$curso = $estudiante->curso;
		$demograficos = $estudiante->demograficos;
		$parentescos[] = DB::select('select parentesco from acudiente_estudiante where estudiante_id = ? ',[$estudiante->id]);

		return view('admin.estudiante.mostrar')->with(['estudiante' => $estudiante, 'acudientes' => $acudientes,
			                                   	 	  'grado' => $grado, 'curso' => $curso, 'demograficos' => $demograficos,
													  'parentescos' => $parentescos]);

		//echo $parentescos[0][0]->parentesco;
		//echo $parentescos[0][1]->parentesco;



	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$estudiante = Estudiante::find($id);
		$acudientes = $estudiante->acudientes;
		$grado = $estudiante->grado;
		$curso = $estudiante->curso;
		$demograficos = $estudiante->demograficos;
		$parentescos[] = DB::select('select parentesco from acudiente_estudiante where estudiante_id = ? ',[$estudiante->id]);


		if($this->variosAcudientes($acudientes)){
			$acudiente1=$acudientes[0];
			$acudiente2=$acudientes[1];

			return view('admin.estudiante.editar')->with(['estudiante' => $estudiante, 'acudiente1' => $acudiente1,
														'acudiente2' => $acudiente2,'grado' => $grado, 'curso' => $curso,
														'demograficos' => $demograficos,
														'parentescos' => $parentescos]);

		}
		else{
			$acudiente1=$acudientes[0];
			return view('admin.estudiante.editar')->with(['estudiante' => $estudiante, 'acudiente1' => $acudiente1,
															'grado' => $grado, 'curso' => $curso,
															'demograficos' => $demograficos,
															'parentescos' => $parentescos]);
		}


	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validacionSegundoAcudiente = False;
		$estudiante = Estudiante::find($id);
		$demografico = Demografico::find($estudiante->demograficos->id);
		$user = User::find($estudiante->id);
		$acudiente1 = Acudiente::find($estudiante->acudientes[0]->id);

		if($estudiante->acudientes[1]->id){
			$acudiente2 = Acudiente::find($estudiante->acudientes[1]->id);
			$validacionSegundoAcudiente = true;
		}





		$estudiante->nombre = Input::get('nombre');
		$estudiante->primer_apellido = Input::get('primer_apellido');
		$estudiante->segundo_apellido = Input::get('segundo_apellido');
		$estudiante->fecha_nacimiento = Input::get('fecha_nacimiento');
		$estudiante->email = Input::get('email');
		$estudiante->genero = Input::get('genero');
		$estudiante->jornada = Input::get('jornada');
		$estudiante->antiguo = Input::get('antiguo');
		$estudiante->estrato = Input::get('estrato');
		$estudiante->eps = Input::get('eps');
		$estudiante->etnia = Input::get('etnia');
		$estudiante->direccion = Input::get('direccion');
		$estudiante->barrio = Input::get('barrio');
		$estudiante->telefono = Input::get('telefono');
		$estudiante->celular = Input::get('celular');
		$estudiante->grado_id = Input::get('grado_id');
		$estudiante->curso_id = Input::get('curso_id');




		$demografico->lugar_ocupa_hermanos = Input::get('lugar_ocupa_hermanos');
		$demografico->tipo_vivienda = Input::get('tipo_vivienda');
		$demografico->cantidad_veces_come_diario = Input::get('cantidad_veces_come_diario');
		$demografico->anos_perdidos = Input::get('anos_perdidos');

		$añosPerd = Input::get('descripcion_anos_perdidos');
		$añosPerdidos = '';

		if(isset($añosPerd)) {

			foreach (Input::get('descripcion_anos_perdidos') as $año) {
				$añosPerdidos = $añosPerdidos . ' - ' . $año;
			}
		}
		$demografico->descripcion_anos_perdidos = $añosPerdidos;
		$demografico->problemas_salud = Input::get('problemas_salud');
		$demografico->tratamiento_problemas_salud = Input::get('tratamiento_problemas_salud');
		$demografico->medicamentos_tomados = Input::get('medicamentos_tomados');
		$demografico->otro_problema = Input::get('otro_problema');
		$demografico->otra_terapia = Input::get('otra_terapia');
		$demografico->asignatura_dificulta = Input::get('asignatura_dificulta');
		$demografico->asignatura_facilita = Input::get('asignatura_facilita');
		$demografico->tipo_sangre = Input::get('tipo_sangre');
		$demografico->rh = Input::get('rh');


		$user->email = Input::get('email');
		$user->save();


		$acudiente1->nombre = Input::get('nombre_ac_1');
		$acudiente1->primer_apellido = Input::get('primer_apellido_ac_1');
		$acudiente1->segundo_apellido = Input::get('segundo_apellido_ac_1');
		$acudiente1->fecha_nacimiento = Input::get('fecha_nacimiento_ac_1');
		$acudiente1->nivel_educativo = Input::get('nivel_educativo_ac_1');
		$acudiente1->direccion = Input::get('direccion_ac_1');
		$acudiente1->barrio = Input::get('barrio_ac_1');
		$acudiente1->email = Input::get('email_ac_1');
		$acudiente1->telefono = Input::get('telefono_ac_1');
		$acudiente1->celular = Input::get('celular_ac_1');


		$estudiante->demograficos()->save($demografico);

		$acudiente1->save();



		if ($validacionSegundoAcudiente)
		{

			$acudiente2->nombre = Input::get('nombre_ac_2');
			$acudiente2->primer_apellido = Input::get('primer_apellido_ac_2');
			$acudiente2->segundo_apellido = Input::get('segundo_apellido_ac_2');
			$acudiente2->fecha_nacimiento = Input::get('fecha_nacimiento_ac_2');
			$acudiente2->nivel_educativo = Input::get('nivel_educativo_ac_2');
			$acudiente2->direccion = Input::get('direccion_ac_2');
			$acudiente2->barrio = Input::get('barrio_ac_2');
			$acudiente2->email = Input::get('email_ac_2');
			$acudiente2->telefono = Input::get('telefono_ac_2');
			$acudiente2->celular = Input::get('celular_ac_2');

			$acudiente2->save();


		}



		$estudiante->save();

		$mensaje = 'Datos Actualizados Correctamente';


		\Session::flash('message', $mensaje);
		return \Redirect::to('gestionar/estudiantes/estudiante');



	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$estudiante = Estudiante::find($id);
		$estudiante->acudientes()->detach();
		$estudiante->delete();

		$user = User::find($id);
		$user->delete();

		\Session::Flash('message','Estudiante Eliminado Correctamente');
		return \Redirect::to('gestionar/estudiantes/estudiante');
	}

	public function variosAcudientes($acudientes){
		if(count($acudientes)>1)
			return true;
				else return false;
	}

	public function buscarPorCurso(){

        $idCurso = Input::get('curso');
		$curso = Curso::find($idCurso);
		$estudiantes = $curso->estudiantes;
		return view('admin.estudiante.resultadoBusqueda', compact('estudiantes'));

	}

	public function buscarPorGrado(){
		$idGrado = Input::get('grado');
		$grado = Grado::find($idGrado);
		$estudiantes = $grado->estudiantes;
		return view('admin.estudiante.resultadoBusqueda', compact('estudiantes'));

	}

	public function buscarPorId(){
		$unicoEstudiante = Estudiante::find(Input::get('id'));
			return view('admin.estudiante.resultadoBusqueda', compact('unicoEstudiante'));


	}


}
