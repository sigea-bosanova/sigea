<?php namespace Sigea\Http\Controllers;

use Faker\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Sigea\Http\Requests;
use Sigea\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sigea\Secretaria;
use Sigea\Persona;
use Sigea\User;



class SecretariaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$secretarias = $this->buscarSecretarias();

		return view('admin.secretaria.index', compact('secretarias'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view ('admin.secretaria.crear');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{


		$rules = array(
			'id'       => 'required',
			'nombres'       => 'required',
			'primerApellido'       => 'required',
			'email'      => 'required|email'

		);

		$validator = \Validator::make(Input::all(), $rules);


		if ($validator->fails()) {
			return \Redirect::to('admin/secretaria/persona/create')
				->withErrors($validator);

		} else {
				Model::unguard();
			    $faker = Factory::create('es_ES');
				$pass = $faker->word.'lml'.$faker->numberBetween($min = 231, $max =666);



			$persona = new Persona();
			$persona->id = Input::get('id');
			$persona->nombres = Input::get('nombres');
			$persona->primer_apellido = Input::get('primerApellido');
            $persona->save();

			$user = new User();
			$user-> id = Input::get('id');
			$user-> email = Input::get('email');
			$user-> perfil = 'Secretaria';
			$user-> password =  bcrypt($pass);
			$user->save();


			$mensaje = 'Secretaria creada correctamente! Tome nota, la clave para que '.$persona->nombres.' ingrese al sistema es: '.$pass;



			// redirect
			\Session::flash('message', $mensaje);
			return \Redirect::to('admin/secretaria/persona');
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
		$secretaria = Persona::find($id);
		$secretaria->delete();

		$user = User::find($id);
		$user->delete();

		\Session::Flash('message','Secretaria Eliminada Correctamente');
		return Redirect::to('admin/secretaria/persona');
	}


	private function buscarSecretarias(){

		$users = Persona::buscarIds('secretaria');
		$ids = Persona::obtenerIds($users);
		$secretarias = Persona::obtenerModelos($ids);

		return $secretarias;
	}


}
