    <?php


    use Illuminate\Database\Seeder;
    use Faker\Factory as Faker;
    use Sigea\Curso;

    class CursoTableSeeder extends Seeder{

      public function run()
      {

          $faker = Faker::create('es_ES');


         for ($i =1; $i<=11 ; $i++){

                 $curso = Curso::create(array(
                'nombre' => $i.'-'.$faker->randomElement($array = array ('a','b','c','d')),
                'cantidad_estudiantes' => $faker->numberBetween($min = 30, $max = 45)
                ));

             $curso = Curso::create(array(
                 'nombre' => $i.'-'.$faker->randomElement($array = array ('a','b','c','d')),
                 'cantidad_estudiantes' => $faker->numberBetween($min = 30, $max = 45)
             ));

             $curso = Curso::create(array(
                 'nombre' => $i.'-'.$faker->randomElement($array = array ('a','b','c','d')),
                 'cantidad_estudiantes' => $faker->numberBetween($min = 30, $max = 45)
             ));
         }


      }



    }