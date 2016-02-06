<?php namespace Sigea\Http\Controllers;

use Sigea\Http\Requests;
use Sigea\Http\Controllers\Controller;
use Sigea\Persona;
use Faker\Factory;
use Sigea\Materia;
use Sigea\User;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class DocenteController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$personas = $this->buscarDocentes();

		if (\Session::get('perfil') == 'Secretaria') {
			return view('secretaria.docente.index', compact('personas'));
		} else if (\Session::get('perfil') == 'Administrador') {
			return view('admin.docente.index', compact('personas'));

		} else if (\Session::get('perfil') == 'Coordinador Academico') {
			return view('cooacademico.docente.index', compact('personas'));

		} else if (\Session::get('perfil') == 'Coordinador Disciplina') {
			return view('cooacademico.docente.index', compact('personas'));

		} else
			echo "Acceso no valido...";
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if (\Session::get('perfil') == 'Secretaria') {
			return view('secretaria.docente.crear');
		} else if (\Session::get('perfil') == 'Administrador') {
			return view('admin.docente.crear');
		} else
			echo "No tiene los permisos necesarios...";
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{


		$rules = array(
			'id' => 'required',
			'nombres' => 'required',
			'primer_apellido' => 'required',
			'email' => 'required|email'

		);

		$validator = \Validator::make(Input::all(), $rules);


		if ($validator->fails()) {
			return \Redirect::to('gestionar/docentes/persona')
				->withErrors($validator);

		} else {

			$faker = Factory::create('es_ES');
			$pass = $faker->word . 'lml' . $faker->numberBetween($min = 231, $max = 666);


			$persona = new Persona();

			$persona->id = Input::get('id');
			$persona->nombres = Input::get('nombres');
			$persona->primer_apellido = Input::get('primer_apellido');
			$persona->segundo_apellido = Input::get('segundo_apellido');
			$persona->fecha_nacimiento = Input::get('fecha_nacimiento');
			$persona->email = Input::get('email');
			$persona->tipo_id = Input::get('tipo_id');
			$persona->sexo = Input::get('sexo');
			$persona->nacionalidad = Input::get('nacionalidad');
			$persona->direccion = Input::get('direccion');
			$persona->clase_libreta_militar = Input::get('clase_libreta_militar');
			$persona->numero_libreta_militar = Input::get('numero_libreta_militar');
			$persona->distrito_militar = Input::get('distrito_militar');
			$persona->pais_nacimiento = Input::get('pais_nacimiento');
			$persona->departamento_nacimiento = Input::get('departamento_nacimiento');
			$persona->municipio = Input::get('municipio');
			$persona->telefono = Input::get('telefono');
			$persona->celular = Input::get('celular');
			$persona->edu_bas_primaria = Input::get('edu_bas_primaria');
			$persona->edu_bas_secundaria = Input::get('edu_bas_secundaria');
			$persona->edu_bas_media = Input::get('edu_bas_media');
			$persona->edu_bas_titulo_obtenido = Input::get('edu_bas_titulo_obtenido');
			$persona->edu_bas_fecha_grado = Input::get('edu_bas_fecha_grado');
			$persona->edu_sup_modalidad_academica = Input::get('edu_sup_modalidad_academica');
			$persona->edu_sup_semestres_aprovados = Input::get('edu_sup_semestres_aprovados');
			$persona->edu_sup_graduado = Input::get('edu_sup_graduado');
			$persona->edu_sup_estudios_titulos_obtenidos = Input::get('edu_sup_estudios_titulos_obtenidos');
			$persona->edu_sup_fecha_terminacion = Input::get('edu_sup_fecha_terminacion');
			$persona->edu_sup_num_tarjeta_profesional = Input::get('edu_sup_num_tarjeta_profesional');

			$persona->edu_sup_modalidad_academica_2 = Input::get('edu_sup_modalidad_academica_2');
			$persona->edu_sup_semestres_aprovados_2 = Input::get('edu_sup_semestres_aprovados_2');
			$persona->edu_sup_graduado_2 = Input::get('edu_sup_graduado_2');
			$persona->edu_sup_estudios_titulos_obtenidos_2 = Input::get('edu_sup_estudios_titulos_obtenidos_2');
			$persona->edu_sup_fecha_terminacion_2 = Input::get('edu_sup_fecha_terminacion_2');
			$persona->edu_sup_num_tarjeta_profesional_2 = Input::get('edu_sup_num_tarjeta_profesional_2');

			$persona->edu_sup_modalidad_academica_3 = Input::get('edu_sup_modalidad_academica_3');
			$persona->edu_sup_semestres_aprovados_3 = Input::get('edu_sup_semestres_aprovados_3');
			$persona->edu_sup_graduado_3 = Input::get('edu_sup_graduado_3');
			$persona->edu_sup_estudios_titulos_obtenidos_3 = Input::get('edu_sup_estudios_titulos_obtenidos_3');
			$persona->edu_sup_fecha_terminacion_3 = Input::get('edu_sup_fecha_terminacion_3');
			$persona->edu_sup_num_tarjeta_profesional_3 = Input::get('edu_sup_num_tarjeta_profesional_3');

			$persona->edu_sup_modalidad_academica_4 = Input::get('edu_sup_modalidad_academica_4');
			$persona->edu_sup_semestres_aprovados_4 = Input::get('edu_sup_semestres_aprovados_4');
			$persona->edu_sup_graduado_4 = Input::get('edu_sup_graduado_4');
			$persona->edu_sup_estudios_titulos_obtenidos_4 = Input::get('edu_sup_estudios_titulos_obtenidos_4');
			$persona->edu_sup_fecha_terminacion_4 = Input::get('edu_sup_fecha_terminacion_4');
			$persona->edu_sup_num_tarjeta_profesional_4 = Input::get('edu_sup_num_tarjeta_profesional_4');

			$persona->edu_sup_modalidad_academica_5 = Input::get('edu_sup_modalidad_academica_5');
			$persona->edu_sup_semestres_aprovados_5 = Input::get('edu_sup_semestres_aprovados_5');
			$persona->edu_sup_graduado_5 = Input::get('edu_sup_graduado_5');
			$persona->edu_sup_estudios_titulos_obtenidos_5 = Input::get('edu_sup_estudios_titulos_obtenidos_5');
			$persona->edu_sup_fecha_terminacion_5 = Input::get('edu_sup_fecha_terminacion_5');
			$persona->edu_sup_num_tarjeta_profesional_5 = Input::get('edu_sup_num_tarjeta_profesional_5');

			$persona->idioma_1 = Input::get('idioma_1');
			$persona->idioma_1_habla = Input::get('idioma_1_habla');
			$persona->idioma_1_lee = Input::get('idioma_1_lee');
			$persona->idioma_1_escribe = Input::get('idioma_1_escribe');

			$persona->idioma_2 = Input::get('idioma_2');
			$persona->idioma_2_habla = Input::get('idioma_2_habla');
			$persona->idioma_2_lee = Input::get('idioma_2_lee');
			$persona->idioma_2_escribe = Input::get('idioma_2_escribe');

			$persona->empresa_actual_nombre = Input::get('empresa_actual_nombre');
			$persona->empresa_actual_tipo_entidad = Input::get('empresa_actual_tipo_entidad');
			$persona->empresa_actual_pais = Input::get('empresa_actual_pais');
			$persona->empresa_actual_departamento = Input::get('empresa_actual_departamento');
			$persona->empresa_actual_municipio = Input::get('empresa_actual_municipio');
			$persona->empresa_actual_correo = Input::get('empresa_actual_correo');
			$persona->empresa_actual_telefono = Input::get('empresa_actual_telefono');
			$persona->empresa_actual_fecha_ingreso = Input::get('empresa_actual_fecha_ingreso');
			$persona->empresa_actual_fecha_retiro = Input::get('empresa_actual_fecha_retiro');
			$persona->empresa_actual_cargo = Input::get('empresa_actual_cargo');
			$persona->empresa_actual_dependencia = Input::get('empresa_actual_dependencia');
			$persona->empresa_actual_direccion = Input::get('empresa_actual_direccion');

			$persona->empresa_anterior_nombre = Input::get('empresa_anterior_nombre');
			$persona->empresa_anterior_tipo_entidad = Input::get('empresa_anterior_tipo_entidad');
			$persona->empresa_anterior_pais = Input::get('empresa_anterior_pais');
			$persona->empresa_anterior_departamento = Input::get('empresa_anterior_departamento');
			$persona->empresa_anterior_municipio = Input::get('empresa_anterior_municipio');
			$persona->empresa_anterior_correo = Input::get('empresa_anterior_correo');
			$persona->empresa_anterior_telefono = Input::get('empresa_anterior_telefono');
			$persona->empresa_anterior_fecha_ingreso = Input::get('empresa_anterior_fecha_ingreso');
			$persona->empresa_anterior_fecha_retiro = Input::get('empresa_anterior_fecha_retiro');
			$persona->empresa_anterior_cargo = Input::get('empresa_anterior_cargo');
			$persona->empresa_anterior_dependencia = Input::get('empresa_anterior_dependencia');
			$persona->empresa_anterior_direccion = Input::get('empresa_anterior_direccion');

			$persona->empresa_otra_nombre = Input::get('empresa_otra_nombre');
			$persona->empresa_otra_tipo_entidad = Input::get('empresa_otra_tipo_entidad');
			$persona->empresa_otra_pais = Input::get('empresa_otra_pais');
			$persona->empresa_otra_departamento = Input::get('empresa_otra_departamento');
			$persona->empresa_otra_municipio = Input::get('empresa_otra_municipio');
			$persona->empresa_otra_correo = Input::get('empresa_otra_correo');
			$persona->empresa_otra_telefono = Input::get('empresa_otra_telefono');
			$persona->empresa_otra_fecha_ingreso = Input::get('empresa_otra_fecha_ingreso');
			$persona->empresa_otra_fecha_retiro = Input::get('empresa_otra_fecha_retiro');
			$persona->empresa_otra_cargo = Input::get('empresa_otra_cargo');
			$persona->empresa_otra_dependencia = Input::get('empresa_otra_dependencia');
			$persona->empresa_otra_direccion = Input::get('empresa_otra_direccion');

			$persona->empresa_otra2_nombre = Input::get('empresa_otra2_nombre');
			$persona->empresa_otra2_tipo_entidad = Input::get('empresa_otra2_tipo_entidad');
			$persona->empresa_otra2_pais = Input::get('empresa_otra2_pais');
			$persona->empresa_otra2_departamento = Input::get('empresa_otra2_departamento');
			$persona->empresa_otra2_municipio = Input::get('empresa_otra2_municipio');
			$persona->empresa_otra2_correo = Input::get('empresa_otra2_correo');
			$persona->empresa_otra2_telefono = Input::get('empresa_otra2_telefono');
			$persona->empresa_otra2_fecha_ingreso = Input::get('empresa_otra2_fecha_ingreso');
			$persona->empresa_otra2_fecha_retiro = Input::get('empresa_otra2_fecha_retiro');
			$persona->empresa_otra2_cargo = Input::get('empresa_otra2_cargo');
			$persona->empresa_otra2_dependencia = Input::get('empresa_otra2_dependencia');
			$persona->empresa_otra2_direccion = Input::get('empresa_otra2_direccion');

			$persona->experiencia_sector_publico_anos = Input::get('experiencia_sector_publico_anos');
			$persona->experiencia_sector_publico_meses = Input::get('experiencia_sector_publico_meses');
			$persona->experiencia_sector_privado_anos = Input::get('experiencia_sector_privado_anos');
			$persona->experiencia_sector_privado_meses = Input::get('experiencia_sector_privado_meses');
			$persona->experiencia_independiente_anos = Input::get('experiencia_independiente_anos');
			$persona->experiencia_independiente_meses = Input::get('experiencia_independiente_meses');
			$persona->experiencia_total_anos = Input::get('experiencia_total_anos');
			$persona->experiencia_total_meses = Input::get('experiencia_total_meses');

			$persona->observaciones_recurso_humano = Input::get('observaciones_recurso_humano');

			$persona->save();


			$user = new User();

			$user->id = Input::get('id');
			$user->email = Input::get('email');
			$user->perfil = 'Docente';
			$user->password = bcrypt($pass);

			$user->save();


			foreach ($request->materia as $idMateria) {
				$materiaAux = Materia::find($idMateria);
				$materiaAux->profesores()->attach(Input::get('id'));
			}


			$mensaje = 'Docente creado correctamente! Tome nota, la clave para que ' . $persona->nombres . ' ingrese al sistema es: ' . $pass;


			\Session::flash('message', $mensaje);
			return \Redirect::to('gestionar/docentes/persona');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function show($id)
	{
		$persona = Persona::find($id);

		if (is_null($persona)) {
			\Session::flash('error', 'Error: Registro no Encontrado');
			if (\Session::get('perfil') == 'Secretaria') {
				return view('secretaria.docente.mostrar');

			} else if (\Session::get('perfil') == 'Administrador') {
				return view('admin.docente.mostrar');}

			else if (\Session::get('perfil') == 'Coordinador Academico') {
					return view('cooacademico.docente.mostrar');}

			else if (\Session::get('perfil') == 'Coordinador Disciplina') {
					return view('coodisciplina.docente.mostrar');

			} else
				echo "No tiene los permisos necesarios para visitar esta página...";

		}

		$materias = $persona->materias;
		if (\Session::get('perfil') == 'Secretaria') {
			return view('secretaria.docente.mostrar', compact('persona', 'materias'));
		} else if (\Session::get('perfil') == 'Administrador') {
			return view('admin.docente.mostrar', compact('persona', 'materias'));}

			else if (\Session::get('perfil') == 'Coordinador Academico') {
				return view('cooacademico.docente.mostrar', compact('persona', 'materias'));}

			else if (\Session::get('perfil') == 'Coordinador Disciplina') {
				return view('coodisciplina.docente.mostrar', compact('persona', 'materias'));
		} else
				echo "No tiene los permisos necesarios para visitar esta página...";
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function edit($id)
	{
		$persona = Persona::find($id);

		if (\Session::get('perfil') == 'Secretaria') {
			return view('secretaria.docente.editar', compact('persona'));
		} else if (\Session::get('perfil') == 'Administrador') {
			return view('admin.docente.editar', compact('persona'));
		} else
			echo "El perfil ". \Session::get('perfil')." no tiene permisos para visitar esta pagina.";
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function update($id)
	{


		$persona =  Persona::find($id);

		$persona->id = Input::get('id');
		$persona->nombres = Input::get('nombres');
		$persona->primer_apellido = Input::get('primer_apellido');
		$persona->segundo_apellido = Input::get('segundo_apellido');
		$persona->fecha_nacimiento = Input::get('fecha_nacimiento');
		$persona->email = Input::get('email');
		$persona->tipo_id = Input::get('tipo_id');
		$persona->sexo = Input::get('sexo');
		$persona->nacionalidad = Input::get('nacionalidad');
		$persona->direccion = Input::get('direccion');
		$persona->clase_libreta_militar = Input::get('clase_libreta_militar');
		$persona->numero_libreta_militar = Input::get('numero_libreta_militar');
		$persona->distrito_militar = Input::get('distrito_militar');
		$persona->pais_nacimiento = Input::get('pais_nacimiento');
		$persona->departamento_nacimiento = Input::get('departamento_nacimiento');
		$persona->municipio = Input::get('municipio');
		$persona->telefono = Input::get('telefono');
		$persona->celular = Input::get('celular');
		$persona->edu_bas_primaria = Input::get('edu_bas_primaria');
		$persona->edu_bas_secundaria = Input::get('edu_bas_secundaria');
		$persona->edu_bas_media = Input::get('edu_bas_media');
		$persona->edu_bas_titulo_obtenido = Input::get('edu_bas_titulo_obtenido');
		$persona->edu_bas_fecha_grado= Input::get('edu_bas_fecha_grado');
		$persona->edu_sup_modalidad_academica = Input::get('edu_sup_modalidad_academica');
		$persona->edu_sup_semestres_aprovados = Input::get('edu_sup_semestres_aprovados');
		$persona->edu_sup_graduado = Input::get('edu_sup_graduado');
		$persona->edu_sup_estudios_titulos_obtenidos = Input::get('edu_sup_estudios_titulos_obtenidos');
		$persona->edu_sup_fecha_terminacion = Input::get('edu_sup_fecha_terminacion');
		$persona->edu_sup_num_tarjeta_profesional = Input::get('edu_sup_num_tarjeta_profesional');

		$persona->edu_sup_modalidad_academica_2 = Input::get('edu_sup_modalidad_academica_2');
		$persona->edu_sup_semestres_aprovados_2 = Input::get('edu_sup_semestres_aprovados_2');
		$persona->edu_sup_graduado_2 = Input::get('edu_sup_graduado_2');
		$persona->edu_sup_estudios_titulos_obtenidos_2 = Input::get('edu_sup_estudios_titulos_obtenidos_2');
		$persona->edu_sup_fecha_terminacion_2 = Input::get('edu_sup_fecha_terminacion_2');
		$persona->edu_sup_num_tarjeta_profesional_2 = Input::get('edu_sup_num_tarjeta_profesional_2');

		$persona->edu_sup_modalidad_academica_3 = Input::get('edu_sup_modalidad_academica_3');
		$persona->edu_sup_semestres_aprovados_3 = Input::get('edu_sup_semestres_aprovados_3');
		$persona->edu_sup_graduado_3 = Input::get('edu_sup_graduado_3');
		$persona->edu_sup_estudios_titulos_obtenidos_3 = Input::get('edu_sup_estudios_titulos_obtenidos_3');
		$persona->edu_sup_fecha_terminacion_3 = Input::get('edu_sup_fecha_terminacion_3');
		$persona->edu_sup_num_tarjeta_profesional_3 = Input::get('edu_sup_num_tarjeta_profesional_3');

		$persona->edu_sup_modalidad_academica_4 = Input::get('edu_sup_modalidad_academica_4');
		$persona->edu_sup_semestres_aprovados_4 = Input::get('edu_sup_semestres_aprovados_4');
		$persona->edu_sup_graduado_4 = Input::get('edu_sup_graduado_4');
		$persona->edu_sup_estudios_titulos_obtenidos_4 = Input::get('edu_sup_estudios_titulos_obtenidos_4');
		$persona->edu_sup_fecha_terminacion_4 = Input::get('edu_sup_fecha_terminacion_4');
		$persona->edu_sup_num_tarjeta_profesional_4 = Input::get('edu_sup_num_tarjeta_profesional_4');

		$persona->edu_sup_modalidad_academica_5 = Input::get('edu_sup_modalidad_academica_5');
		$persona->edu_sup_semestres_aprovados_5 = Input::get('edu_sup_semestres_aprovados_5');
		$persona->edu_sup_graduado_5 = Input::get('edu_sup_graduado_5');
		$persona->edu_sup_estudios_titulos_obtenidos_5 = Input::get('edu_sup_estudios_titulos_obtenidos_5');
		$persona->edu_sup_fecha_terminacion_5 = Input::get('edu_sup_fecha_terminacion_5');
		$persona->edu_sup_num_tarjeta_profesional_5 = Input::get('edu_sup_num_tarjeta_profesional_5');

		$persona->idioma_1  = Input::get('idioma_1');
		$persona->idioma_1_habla = Input::get('idioma_1_habla');
		$persona->idioma_1_lee = Input::get('idioma_1_lee');
		$persona->idioma_1_escribe = Input::get('idioma_1_escribe');

		$persona->idioma_2  = Input::get('idioma_2');
		$persona->idioma_2_habla = Input::get('idioma_2_habla');
		$persona->idioma_2_lee = Input::get('idioma_2_lee');
		$persona->idioma_2_escribe = Input::get('idioma_2_escribe');

		$persona->empresa_actual_nombre = Input::get('empresa_actual_nombre');
		$persona->empresa_actual_tipo_entidad = Input::get('empresa_actual_tipo_entidad');
		$persona->empresa_actual_pais = Input::get('empresa_actual_pais');
		$persona->empresa_actual_departamento = Input::get('empresa_actual_departamento');
		$persona->empresa_actual_municipio = Input::get('empresa_actual_municipio');
		$persona->empresa_actual_correo = Input::get('empresa_actual_correo');
		$persona->empresa_actual_telefono = Input::get('empresa_actual_telefono');
		$persona->empresa_actual_fecha_ingreso = Input::get('empresa_actual_fecha_ingreso');
		$persona->empresa_actual_fecha_retiro = Input::get('empresa_actual_fecha_retiro');
		$persona->empresa_actual_cargo = Input::get('empresa_actual_cargo');
		$persona->empresa_actual_dependencia = Input::get('empresa_actual_dependencia');
		$persona->empresa_actual_direccion = Input::get('empresa_actual_direccion');

		$persona->empresa_anterior_nombre = Input::get('empresa_anterior_nombre');
		$persona->empresa_anterior_tipo_entidad = Input::get('empresa_anterior_tipo_entidad');
		$persona->empresa_anterior_pais = Input::get('empresa_anterior_pais');
		$persona->empresa_anterior_departamento = Input::get('empresa_anterior_departamento');
		$persona->empresa_anterior_municipio = Input::get('empresa_anterior_municipio');
		$persona->empresa_anterior_correo = Input::get('empresa_anterior_correo');
		$persona->empresa_anterior_telefono = Input::get('empresa_anterior_telefono');
		$persona->empresa_anterior_fecha_ingreso = Input::get('empresa_anterior_fecha_ingreso');
		$persona->empresa_anterior_fecha_retiro = Input::get('empresa_anterior_fecha_retiro');
		$persona->empresa_anterior_cargo = Input::get('empresa_anterior_cargo');
		$persona->empresa_anterior_dependencia = Input::get('empresa_anterior_dependencia');
		$persona->empresa_anterior_direccion = Input::get('empresa_anterior_direccion');

		$persona->empresa_otra_nombre = Input::get('empresa_otra_nombre');
		$persona->empresa_otra_tipo_entidad = Input::get('empresa_otra_tipo_entidad');
		$persona->empresa_otra_pais = Input::get('empresa_otra_pais');
		$persona->empresa_otra_departamento = Input::get('empresa_otra_departamento');
		$persona->empresa_otra_municipio = Input::get('empresa_otra_municipio');
		$persona->empresa_otra_correo = Input::get('empresa_otra_correo');
		$persona->empresa_otra_telefono = Input::get('empresa_otra_telefono');
		$persona->empresa_otra_fecha_ingreso = Input::get('empresa_otra_fecha_ingreso');
		$persona->empresa_otra_fecha_retiro = Input::get('empresa_otra_fecha_retiro');
		$persona->empresa_otra_cargo = Input::get('empresa_otra_cargo');
		$persona->empresa_otra_dependencia = Input::get('empresa_otra_dependencia');
		$persona->empresa_otra_direccion = Input::get('empresa_otra_direccion');

		$persona->empresa_otra2_nombre = Input::get('empresa_otra2_nombre');
		$persona->empresa_otra2_tipo_entidad = Input::get('empresa_otra2_tipo_entidad');
		$persona->empresa_otra2_pais = Input::get('empresa_otra2_pais');
		$persona->empresa_otra2_departamento = Input::get('empresa_otra2_departamento');
		$persona->empresa_otra2_municipio = Input::get('empresa_otra2_municipio');
		$persona->empresa_otra2_correo = Input::get('empresa_otra2_correo');
		$persona->empresa_otra2_telefono = Input::get('empresa_otra2_telefono');
		$persona->empresa_otra2_fecha_ingreso = Input::get('empresa_otra2_fecha_ingreso');
		$persona->empresa_otra2_fecha_retiro = Input::get('empresa_otra2_fecha_retiro');
		$persona->empresa_otra2_cargo = Input::get('empresa_otra2_cargo');
		$persona->empresa_otra2_dependencia = Input::get('empresa_otra2_dependencia');
		$persona->empresa_otra2_direccion = Input::get('empresa_otra2_direccion');

		$persona->experiencia_sector_publico_anos = Input::get('experiencia_sector_publico_anos');
		$persona->experiencia_sector_publico_meses = Input::get('experiencia_sector_publico_meses');
		$persona->experiencia_sector_privado_anos = Input::get('experiencia_sector_privado_anos');
		$persona->experiencia_sector_privado_meses = Input::get('experiencia_sector_privado_meses');
		$persona->experiencia_independiente_anos = Input::get('experiencia_independiente_anos');
		$persona->experiencia_independiente_meses = Input::get('experiencia_independiente_meses');
		$persona->experiencia_total_anos = Input::get('experiencia_total_anos');
		$persona->experiencia_total_meses = Input::get('experiencia_total_meses');

		$persona->observaciones_recurso_humano = Input::get('observaciones_recurso_humano');


		$persona->save();

		$user = User::find($id);

		$user-> id = Input::get('id');
		$user-> email = Input::get('email');



		$user->save();


		foreach (Input::get('materia') as $idMateria) {
			$materiaAux = Materia::find($idMateria);
			$materiaAux->profesores()->attach(Input::get('id'));
		}


		\Session::flash('message', 'Docente actualizado correctamente');


		return \Redirect::to('gestionar/docentes/persona');


	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$persona = Persona::find($id);
		$persona->delete();

		$user = User::find($id);
		$user->delete();

		\Session::Flash('message','Docente Eliminado Correctamente');
		return \Redirect::to('gestionar/docentes/persona');
	}

	public function buscarDocentes(){

		$users = Persona::buscarIds('Docente');
		$ids = Persona::obtenerIds($users);
		$personas = Persona::obtenerModelos($ids);

		return $personas;
	}

	//----------------------------------------------------------------------

	public function indexPrueba()
	{

		$personas = $this->buscarDocentes();

			return view('admin.docente.indexPrueba', compact('personas'));

	}

	public function llegada()
	{


		$persona = Persona::find(Input::get('id'));
        $persona->nombres = Input::get('nombre');
		$persona->primer_apellido = Input::get('primer_apellido');
		$persona->segundo_apellido = Input::get('segundo_apellido');
		$persona->save();

		$personas = $this->buscarDocentes();

		return view('admin.docente.indexPrueba', compact('personas'));

	}


}

