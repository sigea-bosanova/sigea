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

    Route::get('baseadm', function(){
        return view('admin.base');
    });

    Route::get('basesec', function(){
        return view('secretaria.base');
    });

    Route::get('baseest', function(){
        return view('estudiante.base');
    });

    Route::get('basedoc', function(){
        return view('docente.base');
    });
    Route::get('basecooaca', function(){
        return view('cooacademico.base');
    });
    Route::get('basecoodis', function(){
        return view('coodisciplina.base');
    });
    Route::get('prueba', function(){
        return view('admin.base.l');
    });
    Route::get('afuera', function(){
        return view('l');
    });

    Route::get('regestudiante', function(){
        return view('admin.registroestudiante');
    });
    Route::get('utf2', function(){
        return view('admin.base.pruebautf');
    });
    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);
