    <?php


    use Illuminate\Database\Seeder;
    use Faker\Factory as Faker;
    use Sigea\Cargo;
    use Sigea\Persona;

    class CargoPersonaTableSeeder extends Seeder{

      public function run()
      {

          $faker = Faker::create('es_ES');

          $personas = Persona::all();

            foreach ($personas as $persona){

                 $persona->cargos()->attach($faker->numberBetween($min = 1,$max = 6));



             }

      }



    }