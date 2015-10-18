    <?php


    use Illuminate\Database\Seeder;
    use Faker\Factory as Faker;
    use Sigea\Cargo;

    class CargoTableSeeder extends Seeder{

      public function run()
      {

          $faker = Faker::create('es_ES');

          $cargo = Cargo::create(array(
              'nombre' => 'Rector',
              'descripcion' => $faker->text($maxNBChars = 180)
          ));

          $cargo = Cargo::create(array(
              'nombre' => 'Secretaria',
              'descripcion' => $faker->text($maxNBChars = 180)
          ));

          $cargo = Cargo::create(array(
              'nombre' => 'Coordinador Disciplina',
              'descripcion' => $faker->text($maxNBChars = 180)
          ));

          $cargo = Cargo::create(array(
              'nombre' => 'Coordinador Academico',
              'descripcion' => $faker->text($maxNBChars = 180)
          ));

          $cargo = Cargo::create(array(
              'nombre' => 'Docente',
              'descripcion' => $faker->text($maxNBChars = 180)
          ));

          $cargo = Cargo::create(array(
              'nombre' => 'Psicologo',
              'descripcion' => $faker->text($maxNBChars = 180)
          ));




      }



    }