    <?php


    use Illuminate\Database\Seeder;
    use Faker\Factory as Faker;
    use Sigea\Periodo;

    class PeriodoTableSeeder extends Seeder{

      public function run()
      {

          $faker = Faker::create('es_ES');


          $periodo = Periodo::create(array(
              'nombre' => 'Primero',

          ));

          $periodo = Periodo::create(array(
              'nombre' => 'Segundo',

          ));

          $periodo = Periodo::create(array(
              'nombre' => 'Tercero',

          ));

          $periodo = Periodo::create(array(
              'nombre' => 'Cuarto',

          ));

          $periodo = Periodo::create(array(
              'nombre' => 'Final',

          ));


      }



    }