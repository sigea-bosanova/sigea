    <?php


    use Illuminate\Database\Seeder;
    use Faker\Factory as Faker;
    use Sigea\Estudiante;
    use Sigea\Persona;
    use Sigea\User;


    class MateriaPersonaTableSeeder extends Seeder{

      public function run()
      {

          $faker = Faker::create('es_ES');

          $users = User::all();

            foreach ($users as $user){

               if($user->perfil=="profesor")

                 $persona = Persona::find($user->id);

                  $persona->materias()->attach($faker->numberBetween($min = 1, $max = 3));
                  $persona->materias()->attach($faker->numberBetween($min = 4, $max = 7));
                  $persona->materias()->attach($faker->numberBetween($min = 8, $max = 12));


             }

      }



    }