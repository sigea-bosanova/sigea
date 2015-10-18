    <?php


    use Illuminate\Database\Seeder;
    use Faker\Factory as Faker;
    use Sigea\Grado;

    class GradoTableSeeder extends Seeder{

      public function run()
      {

          $faker = Faker::create('es_ES');


          $grado = Grado::create(array(
              'nombre' => 'Primero',
              'intensidad_horaria' => $faker->numberBetween($min = 2, $max = 5)
          ));

          $grado = Grado::create(array(
              'nombre' => 'Segundo',
              'intensidad_horaria' => $faker->numberBetween($min = 2, $max = 5)
          ));

          $grado = Grado::create(array(
              'nombre' => 'Tercero',
              'intensidad_horaria' => $faker->numberBetween($min = 2, $max = 5)
          ));

          $grado = Grado::create(array(
              'nombre' => 'Cuarto',
              'intensidad_horaria' => $faker->numberBetween($min = 2, $max = 5)
          ));

          $grado = Grado::create(array(
              'nombre' => 'Quinto',
              'intensidad_horaria' => $faker->numberBetween($min = 2, $max = 5)
          ));

          $grado = Grado::create(array(
              'nombre' => 'Sexto',
              'intensidad_horaria' => $faker->numberBetween($min = 2, $max = 5)
          ));

          $grado = Grado::create(array(
              'nombre' => 'Septimo',
              'intensidad_horaria' => $faker->numberBetween($min = 2, $max = 5)
          ));

          $grado = Grado::create(array(
              'nombre' => 'Octavo',
              'intensidad_horaria' => $faker->numberBetween($min = 2, $max = 5)
          ));

          $grado = Grado::create(array(
              'nombre' => 'Noveno',
              'intensidad_horaria' => $faker->numberBetween($min = 2, $max = 5)
          ));

          $grado = Grado::create(array(
              'nombre' => 'Decimo',
              'intensidad_horaria' => $faker->numberBetween($min = 2, $max = 5)
          ));

          $grado = Grado::create(array(
              'nombre' => 'Decimo Primero',
              'intensidad_horaria' => $faker->numberBetween($min = 2, $max = 5)
          ));


      }



    }