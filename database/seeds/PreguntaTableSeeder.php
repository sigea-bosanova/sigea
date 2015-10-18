    <?php


    use Illuminate\Database\Seeder;
    use Faker\Factory as Faker;
    use Sigea\Pregunta;


    class PreguntaTableSeeder extends Seeder{

      public function run()
      {

          $faker = Faker::create('es_ES');

         for ($i = 0; $i <19; $i++) {
             $descripcion = $faker->text() . ' ?';
             $pregunta = Pregunta::create(array('descripcion' => $descripcion));
         }

      }



    }