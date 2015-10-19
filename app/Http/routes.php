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


    Route::get('/', 'LoginController@index');

    Route::get('/login', 'LoginController@index');







    Route::get('probar', 'EstudiantesController@probar');

    Route::post('inicio', 'InicioController@entrar');
    Route::get('inicio', 'InicioController@entrar');

    Route::get('salir', 'InicioController@salir');







    Route::get('admin', function(){
        return view('admin.base');
    });



    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);
