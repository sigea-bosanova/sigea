    <?php


    use Illuminate\Database\Seeder;
    use Faker\Factory as Faker;
    use Sigea\User;

    class UserTableSeeder extends Seeder{

      public function run()
      {
        /* \DB::table('users')->insert(array (
            'id' => 1052358874,
            'email' =>'juan.ms@outlook.com',
            'perfil'=>'admin',
            'password'=> \Hash::make('secret')
            ));
        */
          $faker = Faker::create('es_ES');

          $admin = User::create(array (
              'id' =>  $faker->unique()->randomNumber($nbdigits = NULL),
              'email' =>'juan.ms@outlook.com',
              'perfil'=>'admin',
              'password'=> \Hash::make('secret')
          ));



          $secretaria = User::create(array(
              'id'=> $faker->unique()->randomNumber($nbdigits = NULL),
              'email' => $faker->email(),
              'perfil' =>'secretaria',
              'password' => \Hash::make('secretaria')
          ));


          $coordinadora = User::create(array(
              'id'=> $faker->unique()->randomNumber($nbdigits = NULL),
              'email' => $faker->email(),
              'perfil' =>'coordinadora_disciplina',
              'password' => \Hash::make('disciplina')
          ));

          for($i=0; $i<30; $i++) {

              $profesores = User::create(array(
                  'id' => $faker->unique()->randomNumber($nbdigits = NULL),
                  'email' => $faker->email(),
                  'perfil' => 'profesor',
                  'password' => \Hash::make('profesor' . $i)
              ));
          }
          for ($i=0; $i < 120; $i++) {

                  $estudiantes = User::create(array(
                      'id' =>  $faker->unique()->randomNumber($nbdigits = NULL),
                      'email' => $faker->email(),
                      'perfil' => 'estudiante',
                      'password' => \Hash::make('estudiante' . $i)
                  ));

          }






      }



    }