    <?php

    /*
    |--------------------------------------------------------------------------
    | Application Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register all of the routes for an application.
    | It's a breeze. Simply tell Laravel the URIs it should respond to
    | and give it the controller to call when that URI is requested.
    |
    */

    Route::get('/', 'WelcomeController@index');

    Route::get('home', 'HomeController@index');

   // Route::get('prueba', 'EstudiantesController@probar');

    Route::get('probar-usuario', 'EstudiantesController@probarUsuario');

    //Route::get('login', function(){
     //  return view('base.login');
    //});

    Route::get('login', function(){
        return view('compartido.login');
    });

    Route::get('baseest', function(){
        return view('estudiante.base');
    });


    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);
