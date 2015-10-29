<?php namespace Sigea\Http\Controllers;

use Sigea\Http\Requests;
use Sigea\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LoginController extends Controller {


	public function index()
	{
		return view('compartido.login');
	}


}
