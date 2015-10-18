    <?php


    use Illuminate\Database\Seeder;
    use Faker\Factory as Faker;
    use Sigea\User;
    use Sigea\Persona;

    class UserTableSeeder extends Seeder{

      public function run()
      {

          $faker = Faker::create('es_ES');
          $personas = Persona::all();



      }



    }