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


    Route::get('/', ['uses' => 'LoginController@index', 'as' => 'login']);

    Route::get('/login',  ['uses' => 'LoginController@index', 'as' => 'login']);

    Route::get('salir',['uses' => 'InicioController@salir', 'as' => 'salir']);







    Route::get('probar', 'EstudiantesController@probar');

    Route::post('inicio', 'InicioController@entrar');
    Route::get('inicio', 'InicioController@entrar');





    Route::get('docente/gestionar-notas', 'NotasController@index');
    Route::post('docente/gestionar-notas', 'NotasController@gestionarNotas');

    Route::get('docente/consultar-estudiante', 'NotasController@mostrarConsultarEstudiante');
    Route::post('docente/consultar-estudiante', 'NotasController@consultarEstudiante');



    Route::get('estudiante/ver-notas', 'EstudiantesController@verNotas');
    Route::post('estudiante/ver-notas', 'EstudiantesController@verNotas');

    Route::get('estudiante/ver-observaciones', 'EstudiantesController@verObservaciones');
    Route::post('estudiante/ver-observaciones', 'EstudiantesController@verObservaciones');








    Route::get('ob', function(){
        return view('cooacademico.crearobservacion');
    });



    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);
