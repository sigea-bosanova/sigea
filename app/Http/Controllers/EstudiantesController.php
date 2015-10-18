<?php namespace Sigea\Http\Controllers;

	use Sigea\Http\Requests;
	use Sigea\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use Sigea\Estudiante;
	use Sigea\Acudiente;
	use Sigea\Persona;
	use Sigea\Cargo;
	use Sigea\User;


	class EstudiantesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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

	public  function probar1(){

		//Prueba de relacion entre estudiante y acudientes

		$estudiante = Estudiante::find(21); // oscar

		$acudiente1 = Acudiente::find(37); //Shanel

		$acudiente2 = Acudiente::find(2);

		$acudiente3 = Acudiente::find(3);

		//$estudiante->acudientes()->attach($acudiente1,['parentesco'=>'Padre']);

		//$estudiante->acudientes()->attach($acudiente2,['parentesco'=>'Madre']);

		//$estudiante->acudientes()->attach($acudiente3,['parentesco'=>'Acudiente']);

		//dd($estudiante->acudientes->toArray());

		//dd($estudiante->wherePrimerApellido('Melgar')->get());


	}


	public  function probar()
	{

	 $estutiante = Estudiante::find(2020056635);


		dd($estutiante->respuestas);

	}

}
