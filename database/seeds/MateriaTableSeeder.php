    <?php


    use Illuminate\Database\Seeder;
    use Faker\Factory as Faker;
    use Sigea\Curso;
    use Sigea\Materia;

    class MateriaTableSeeder extends Seeder{

      public function run()
      {

          $faker = Faker::create('es_ES');

          $materia =  Materia::create(array(
             'nombre' =>'Matematicas',
             'intensidad_horaria' => $faker->randomElement(array('1','2','4','6')),
             'grado_id' => $faker->numberBetween($min =1, $max = 11)
          ));
          $materia =  Materia::create(array(
              'nombre' =>'Sociales',
              'intensidad_horaria' => $faker->randomElement(array('1','2','4','6')),
              'grado_id' => $faker->numberBetween($min =1, $max = 11)
          ));

          $materia =  Materia::create(array(
              'nombre' =>'Castellano',
              'intensidad_horaria' => $faker->randomElement(array('1','2','4','6')),
              'grado_id' => $faker->numberBetween($min =1, $max = 11)
          ));

          $materia =  Materia::create(array(
              'nombre' =>'Ciencias Naturales',
              'intensidad_horaria' => $faker->randomElement(array('1','2','4','6')),
              'grado_id' => $faker->numberBetween($min =1, $max = 11)
          ));
          $materia =  Materia::create(array(
              'nombre' =>'Ingles',
              'intensidad_horaria' => $faker->randomElement(array('1','2','4','6')),
              'grado_id' => $faker->numberBetween($min =1, $max = 11)
          ));

          $materia =  Materia::create(array(
              'nombre' =>'Fisica',
              'intensidad_horaria' => $faker->randomElement(array('1','2','4','6')),
              'grado_id' => $faker->numberBetween($min =1, $max = 11)
          ));
          $materia =  Materia::create(array(
              'nombre' =>'Quimica',
              'intensidad_horaria' => $faker->randomElement(array('1','2','4','6')),
              'grado_id' => $faker->numberBetween($min =1, $max = 11)
          ));

          $materia =  Materia::create(array(
              'nombre' =>'Musica',
              'intensidad_horaria' => $faker->randomElement(array('1','2','4','6')),
              'grado_id' => $faker->numberBetween($min =1, $max = 11)
          ));
          $materia =  Materia::create(array(
              'nombre' =>'Filosofia',
              'intensidad_horaria' => $faker->randomElement(array('1','2','4','6')),
              'grado_id' => $faker->numberBetween($min =1, $max = 11)
          ));
          $materia =  Materia::create(array(
              'nombre' =>'Educacion Fisica',
              'intensidad_horaria' => $faker->randomElement(array('1','2','4','6')),
              'grado_id' => $faker->numberBetween($min =1, $max = 11)
          ));

          $materia =  Materia::create(array(
              'nombre' =>'Artistica',
              'intensidad_horaria' => $faker->randomElement(array('1','2','4','6')),
              'grado_id' => $faker->numberBetween($min =1, $max = 11)
          ));
          $materia =  Materia::create(array(
              'nombre' =>'Informatica',
              'intensidad_horaria' => $faker->randomElement(array('1','2','4','6')),
              'grado_id' => $faker->numberBetween($min =1, $max = 11)
          ));



      }



    }