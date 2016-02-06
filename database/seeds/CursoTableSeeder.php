    <?php


    use Illuminate\Database\Seeder;
    use Faker\Factory as Faker;
    use Sigea\Curso;
    use Sigea\Grado;

    class CursoTableSeeder extends Seeder{

      public function run()
      {

          $faker = Faker::create('es_ES');
          
         $j=1;

         for ($i =1; $i<=11 ; $i++){

             $grado = Grado::find($j);

                 $curso = Curso::create(array(
                'nombre' => $i.'-'.$faker->randomElement($array = array ('a','b','c','d')),
                'cantidad_estudiantes' => $faker->numberBetween($min = 30, $max = 45),
                'grado_id' => $j
                ));



             $curso = Curso::create(array(
                 'nombre' => $i.'-'.$faker->randomElement($array = array ('a','b','c','d')),
                 'cantidad_estudiantes' => $faker->numberBetween($min = 30, $max = 45),
                 'grado_id' => $j
             ));


             $curso = Curso::create(array(
                 'nombre' => $i.'-'.$faker->randomElement($array = array ('a','b','c','d')),
                 'cantidad_estudiantes' => $faker->numberBetween($min = 30, $max = 45),
                 'grado_id' => $j
             ));

             $j++;
         }


      }



    }