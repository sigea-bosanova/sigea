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

    Route::get('secretaria-admin',function(){
        return view ('admin.secretaria.crearSecretaria');
    });
    Route::get('wizard',function(){
        return view ('compartido.wizard');
    });

    Route::get('crear-secretaria',function(){
        return view ('admin.secretaria.crearSecretaria');
    });


    Route::get('llegada-formulario-wizard', ['uses' => 'InicioController@wizard', 'as' => 'form.wizard']);
    Route::post('llegada-formulario-wizard', ['uses' => 'InicioController@wizard', 'as' => 'form.wizard']);




    Route::get('/', ['uses' => 'LoginController@index', 'as' => 'login']);
    Route::get('/login',  ['uses' => 'LoginController@index', 'as' => 'login']);

    Route::post('entrando', ['uses' => 'LoginController@entrar', 'as' => 'entrar']);
    Route::get('entrando', ['uses' => 'LoginController@entrar', 'as' => 'entrar']);

    Route::get('salir',['uses' => 'LoginController@salir', 'as' => 'salir']);




    Route::group(['prefix' => 'estudiante' , 'middleware' => 'estudiante'],function(){

        Route::get('inicio', ['uses' => 'InicioController@entrarEstudiante', 'as' => 'estudiante.inicio' ]);

    });


    Route::group(['prefix' => 'docente'],function(){

        Route::get('inicio', ['uses' => 'InicioController@entrarDocente', 'as' => 'docente.inicio' ]);

    });


    Route::group(['prefix' => 'coordinador-academico'],function(){

        Route::get('inicio', ['uses' => 'InicioController@entrarCooAcademico', 'as' => 'cooacademico.inicio' ]);

    });

    Route::group(['prefix' => 'coordinador-disciplina'],function(){

        Route::get('inicio', ['uses' => 'InicioController@entrarCooDisciplina', 'as' => 'coodisciplina.inicio' ]);

    });

    Route::group(['prefix' => 'secretaria'],function(){

        Route::get('inicio', ['uses' => 'InicioController@entrarSecretaria', 'as' => 'secretaria.inicio' ]);

    });

    Route::group(['prefix' => 'admin'],function(){

        Route::get('inicio', ['uses' => 'InicioController@entrarAdmin', 'as' => 'admin.inicio' ]);

    });







    Route::get('probar', 'EstudiantesController@probar');







    Route::get('docente/gestionar-notas', 'NotasController@index');
    Route::post('docente/gestionar-notas', 'NotasController@gestionarNotas');

    Route::get('docente/consultar-estudiante', 'NotasController@mostrarConsultarEstudiante');
    Route::post('docente/consultar-estudiante', 'NotasController@consultarEstudiante');



    Route::get('estudiante/ver-notas', 'EstudiantesController@verNotas');
    Route::post('estudiante/ver-notas', 'EstudiantesController@verNotas');

    Route::get('estudiante/ver-observaciones', 'EstudiantesController@verObservaciones');
    Route::post('estudiante/ver-observaciones', 'EstudiantesController@verObservaciones');









    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);
