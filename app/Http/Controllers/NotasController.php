<?php namespace Sigea\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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
		 if(Session::get('perfil')=='docente'){

			 $id = Session::get('id');
			// $cursos =

			 return view('docente.gestionarNotas');

		 }

	 }
		$mensajeAux = 'No tiene los permisos necesarios para acceder a esta pagina.';
		return view ('compartido.login',compact('mensajeAux'));

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

	public function estudiante()
	{
		return view('estudiante.vernotas');
	}


}
