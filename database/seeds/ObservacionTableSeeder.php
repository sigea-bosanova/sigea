    <?php


    use Illuminate\Database\Seeder;
    use Faker\Factory as Faker;
    use Sigea\Observacion;
    use Sigea\Estudiante;

    class ObservacionTableSeeder extends Seeder{

      public function run()
      {

          $faker = Faker::create('es_ES');

         $estudiantes = Estudiante::all();

          foreach ($estudiantes as $estudiante ) {

              $observacion = new Observacion (['descripcion' => $faker->realText($maxNbChars = 200),
                                              'fecha' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now')

                                            ]);

              $observacion2 = new Observacion (['descripcion' => $faker->realText($maxNbChars = 200),
                  'fecha' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now')

              ]);



              $est = $estudiante->observaciones()->save($observacion);
              $est = $estudiante->observaciones()->save($observacion2);






          }


      }



    }