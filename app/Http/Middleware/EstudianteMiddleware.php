<?php namespace Sigea\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Sigea\Estudiante;

class EstudianteMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        $id = $request->input('identificacion');

		$password = $request->input('pass');

		dd($password," y el usuario es ", $id);




		if (!Auth::attempt(['id' => $id, 'password' => $password, 'perfil' =>'estudiante'])) {


			return redirect()->route('login');

		}

		return $next($request);
	}

}
