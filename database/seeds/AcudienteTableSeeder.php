    <?php


    use Illuminate\Database\Seeder;
    use Faker\Factory as Faker;
    use Sigea\User;
    use Sigea\Acudiente;

    class AcudienteTableSeeder extends Seeder{

          public function run()
          {

    $faker = Faker::create();


              for ($i=0; $i < 450; $i++) {

                  $acudiente = Acudiente::create(array(
                      'id' =>  $faker->unique()->randomNumber($nbdigits = NULL),
                      'nombre'=> $faker->firstName,
                      'primer_apellido'=> $faker->lastName,
                      'segundo_apellido'=> $faker->lastName,
                      'fecha_nacimiento'=> $faker->dateTimeBetween($startDate ='-70 years', $endDate= '-20 years'),
                      'nivel_educativo'=>$faker->numberBetween($min= 1, $max= 11),
                      'direccion'=>$faker->address,
                      'barrio'=>$faker->city,
                      'telefono'=>8048274,
                      'celular'=> 3203824762,
                      'email' => $faker->email()

                  ));
              }

          }






      }



