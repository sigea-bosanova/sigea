    <?php


    use Illuminate\Database\Seeder;
    use Faker\Factory as Faker;
    use Sigea\Pregunta;
    use Sigea\Respuesta;
    use Sigea\Estudiante;


    class RespuestaTableSeeder extends Seeder{

      public function run()
      {

          $faker = Faker::create('es_ES');
          $preguntas = Pregunta::all();
          $estudiantes = Estudiante::all();

          foreach ($estudiantes as $estudiante ) {
              foreach ($preguntas as $pregunta ) {
                  $respuesta = new Respuesta(array( 'descripcion' => $faker->sentence($nbWords = 3)));


                  $resp = $pregunta->respuestas()->save($respuesta);
                  $resp = $estudiante->respuestas()->save($respuesta);
              }

          }


      }



    }