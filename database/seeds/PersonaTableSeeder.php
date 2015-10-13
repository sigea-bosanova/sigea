    <?php


    use Illuminate\Database\Seeder;
    use Faker\Factory as  Faker;
    use Sigea\User;
    use Sigea\Estudiante;
    use Sigea\Persona;


    class PersonaTableSeeder extends Seeder
    {

        public function run()

        {
            $faker = Faker::create('es_ES');
            $usuarios = User::all();
            $ids = User::all()->fetch('id');

            foreach ($usuarios as $usuario) {

                if ($usuario->perfil != 'estudiante') {

                    $estudiante = Estudiante::create(array(
                        'id' => $usuario->id,
                        'nombre' => $faker->firstName,
                        'primer_apellido' => $faker->lastName,
                        'segundo_apellido' => $faker->lastName,
                        'fecha_nacimiento' => $faker->dateTimeBetween($startDate = '-20 years', $endDate = '-10 years'),


                    ));


                }

            }

        }
    }