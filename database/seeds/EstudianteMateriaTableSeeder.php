    <?php


    use Illuminate\Database\Seeder;
    use Faker\Factory as Faker;
    use Sigea\Estudiante;
    use Sigea\Materia;

    class EstudianteMateriaTableSeeder extends Seeder{

      public function run()
      {

          $faker = Faker::create('es_ES');

          $estudiantes = Estudiante::all();

            foreach ($estudiantes as $estudiante){

                 $estudiante->materias()->attach($faker->numberBetween($min = 1,$max = 2));
                 $estudiante->materias()->attach($faker->numberBetween($min = 3,$max = 4));
                 $estudiante->materias()->attach($faker->numberBetween($min = 5,$max = 6));




             }

      }



    }