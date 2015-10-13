    <?php


    use Illuminate\Database\Seeder;
    use Faker\Factory as  Faker;
    use Sigea\User;
    use Sigea\Estudiante;
    use Sigea\Persona;
    use Sigea\Acudiente;


    class EstudianteTableSeeder extends Seeder  {



        public function run()
        {
             $i = 0;

            $faker = Faker::create('es_ES');
            $usuarios = User::all();

            $ids = User::all()->fetch('id');
            //$idsAcudientes = Acudiente::all()->fetch('id'); No deben ir papa, mama ni responsable en esta tabla
            //para realizar la busqueda se va a la tabla acudiente_estudiante



            foreach ($usuarios as $usuario) {


              if ($usuario->perfil == 'estudiante') {

                 // $curso = $faker->numberBetween($min = 1, $max = 11)." - ".$faker->numberBetween($min = 1, $max = 6);

                    $estudiante = Estudiante::create(array(
                        'id' => $usuario->id,
                        'nombre' => $faker->firstName,
                        'primer_apellido' => $faker->lastName,
                        'segundo_apellido' => $faker->lastName,
                        'fecha_nacimiento' => $faker->dateTimeBetween($startDate = '-20 years', $endDate = '-10 years'),
                        'grado_id' => $faker->numberBetween($min = 1, $max = 11),
                        'curso_id' => $faker->numberBetween($min = 1, $max = 75),
                        'activo' => $faker->boolean(70),
                        'jornada' => $faker->amPm,
                        'antiguo' => $faker->boolean(36),
                        'genero' => $faker->boolean(57),
                        'estrato' => $faker->numberBetween($min = 1, $max = 6),
                        'eps' => $faker->word,
                        'etnia' => $faker->word,
                        'padre' => $idsAcudientes[$i],
                        'madre' => $idsAcudientes[($i + 1)],
                        'responsable' => $idsAcudientes[($i + 2)],
                        'direccion' => $faker->address,
                        'barrio' => $faker->city,
                        'telefono' => $faker->phoneNumber(),
                        'celular' => $faker->phoneNumber(),
                        'email' => $faker->email()
                    ));




                }
                $i++;


            }

          }


    }
