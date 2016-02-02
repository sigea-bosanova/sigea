<?php namespace Sigea\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;
use Sigea\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sigea\Estudiante;
use Sigea\Persona;
use Sigea\User;

class InicioController extends Controller {



	public function entrarEstudiante(){
		return view('estudiante.inicio');
	}

	public function entrarDocente(){
		return view('docente.inicio');
	}

	public function entrarCooAcademico(){
		return view('cooacademico.inicio');
	}

	public function entrarCooDisciplina(){
		return view('coodisciplina.inicio');
	}

	public function entrarSecretaria(){
		return view('secretaria.inicio');
	}
	public function entrarAdmin(){
		return view('admin.inicio');
	}







}
