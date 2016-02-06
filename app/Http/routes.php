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

    Route::post('entrando', ['uses' => 'LoginController@entrar', 'as' => 'entrar']);
    Route::get('entrando', ['uses' => 'LoginController@entrar', 'as' => 'entrar']);

    Route::get('salir',['uses' => 'LoginController@salir', 'as' => 'salir']);




    Route::group(['prefix' => 'estudiante'],function(){


        Route::get('inicio', ['uses' => 'InicioController@entrarEstudiante', 'as' => 'estudiante.inicio' ]);
        Route::get('ver-notas', 'EstudiantesController@verNotas');
        Route::post('ver-notas', 'EstudiantesController@verNotas');

        Route::get('ver-observaciones', 'EstudiantesController@verObservaciones');
        Route::post('ver-observaciones', 'EstudiantesController@verObservaciones');

    });


    Route::group(['prefix' => 'docente'],function(){

        Route::get('inicio', ['uses' => 'InicioController@entrarDocente', 'as' => 'docente.inicio' ]);

    });


    Route::group(['prefix' => 'coordinador-academico'],function(){

        Route::get('inicio', ['uses' => 'InicioController@entrarCooAcademico', 'as' => 'cooacademico.inicio' ]);
        Route::resource('grado', 'GradoController');
        Route::resource('curso', 'CursoController');


    });

    Route::group(['prefix' => 'coordinador-disciplina'],function(){

        Route::get('inicio', ['uses' => 'InicioController@entrarCooDisciplina', 'as' => 'coodisciplina.inicio' ]);

        Route::group(['prefix' =>'observaciones'],function(){
            Route::get('index', ['as'=>'observaciones.index','uses' => 'ObservacionController@index']);
            Route::post('buscando', ['as'=>'observaciones.buscar','uses' => 'ObservacionController@buscar']);
            Route::get('crear', ['as'=>'observaciones.crear','uses' => 'ObservacionController@crear']);
            Route::post('datos-observacion', ['as'=>'observaciones.buscar.estudiante','uses' => 'ObservacionController@buscarEstudiante']);
            Route::post('guardar', ['as'=>'observaciones.guardar','uses' => 'ObservacionController@guardar']);
            Route::get('modificar', ['as'=>'observaciones.modificar','uses' => 'ObservacionController@modificar']);
            Route::post('buscando-para-modificar', ['as'=>'observaciones.buscar.modificar','uses' => 'ObservacionController@buscarModificar']);
            Route::post('actualizar-observacion', ['as'=>'observaciones.actualizar','uses' => 'ObservacionController@actualizar']);

        });


    });

    Route::group(['prefix' => 'secretaria'],function(){

        Route::get('inicio', ['uses' => 'InicioController@entrarSecretaria', 'as' => 'secretaria.inicio' ]);

    });


    Route::group(['prefix' => 'admin'],function(){

        Route::get('inicio', ['uses' => 'InicioController@entrarAdmin', 'as' => 'admin.inicio' ]);


        Route::group(['prefix' => 'secretaria'], function(){

            Route::resource('persona','SecretariaController');


        });

    });

    Route::group(['prefix' => 'gestionar'],function(){


        Route::group(['prefix' => 'coordinadores-academicos'], function(){

            Route::resource('persona','CooAcademicoController');

        });

        Route::group(['prefix' => 'coordinadores-disciplina'], function(){

            Route::resource('persona','CooDisciplinaController');

        });

        Route::group(['prefix' => 'docentes'], function(){

            Route::resource('persona','DocenteController');

        });

        Route::group(['prefix' => 'estudiantes'], function(){

            Route::resource('estudiante','EstudianteController');

            Route::post('busqueda-por-curso',['uses'=>'EstudianteController@buscarPorCurso', 'as' =>'busqueda.por.curso']);
            Route::post('busqueda-por-grado',['uses'=>'EstudianteController@buscarPorGrado', 'as' =>'busqueda.por.grado']);
            Route::post('busqueda-por-id',['uses'=>'EstudianteController@buscarPorId', 'as' =>'busqueda.por.id']);



        });

    });





    Route::get('index-prueba', ['as' => 'index.prueba', 'uses' => 'DocenteController@indexPrueba']);
    Route::post('llegada', ['as' => 'llegada', 'uses' => 'DocenteController@llegada']);






    Route::get('probar', 'EstudiantesController@probar');

    Route::get('docente/gestionar-notas', 'NotasController@index');
    Route::post('docente/gestionar-notas', 'NotasController@gestionarNotas');

    Route::get('docente/consultar-estudiante', 'NotasController@mostrarConsultarEstudiante');
    Route::post('docente/consultar-estudiante', 'NotasController@consultarEstudiante');











    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);
