    <?php


    use Illuminate\Database\Seeder;
    use Faker\Factory as  Faker;
    use Sigea\User;
    use Sigea\Estudiante;
    use Sigea\Persona;
    use Sigea\Acudiente;
    use Sigea\Curso;


    class EstudianteTableSeeder extends Seeder  {



        public function run()
        {
             $i = 0;

            $faker = Faker::create('es_ES');

           $numCursos = Curso::all()->count();




            for ($i =0; $i<=25; $i++) {


                $aux = $faker->numberBetween($min = 2020000000, $max = 2030000000);

                    $estudiante = Estudiante::create(array(
                        'id' => $aux,
                        'nombre' => $faker->firstName,
                        'primer_apellido' => $faker->lastName,
                        'segundo_apellido' => $faker->lastName,
                        'fecha_nacimiento' => $faker->dateTimeBetween($startDate = '-20 years', $endDate = '-10 years'),
                        'grado_id' => $faker->numberBetween($min = 1, $max = 11),
                        'curso_id' => $faker->numberBetween($min = 1, $max = $numCursos),
                        'activo' => $faker->boolean(70),
                        'jornada' => $faker->amPm,
                        'antiguo' => $faker->boolean(36),
                        'genero' => $faker->boolean(57),
                        'estrato' => $faker->numberBetween($min = 1, $max = 6),
                        'eps' => $faker->word,
                        'etnia' => $faker->word,
                        'direccion' => $faker->address,
                        'barrio' => $faker->city,
                        'telefono' => $faker->phoneNumber(),
                        'celular' => $faker->phoneNumber(),
                        'email' => $faker->email()
                    ));

                $usuario =  User::create(['id'=> $aux,
                    'email' => $faker->email,
                    'perfil' => 'estudiante',
                    'password' => bcrypt('estudiante'),
                    'activo' => true]);




                }
                $i++;


        }


    }
