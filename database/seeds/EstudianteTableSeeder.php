    <?php


    use Illuminate\Database\Seeder;
    use Faker\Factory as  Faker;
    use Sigea\User;
    use Sigea\Estudiante;
    use Sigea\Persona;
    use Sigea\Demografico;
    use Sigea\Acudiente;
    use Sigea\Curso;


    class EstudianteTableSeeder extends Seeder  {



        public function run()
        {


            $faker = Faker::create('es_ES');

           $numCursos = Curso::all()->count();
            $idsAcudientes = Acudiente::all()->get('id');




            for ($i =0; $i<=30; $i++) {


                $aux = $faker->numberBetween($min = 2020000000, $max = 2030000000);


                    $estudiante = new  Estudiante(array(
                        'id' => $aux,
                        'nombre' => $faker->firstName,
                        'primer_apellido' => $faker->lastName,
                        'segundo_apellido' => $faker->lastName,
                        'fecha_nacimiento' => $faker->dateTimeBetween($startDate = '-20 years', $endDate = '-10 years'),
                        'grado_id' => $faker->numberBetween($min = 1, $max = 11),
                        'curso_id' => $faker->numberBetween($min = 1, $max = $numCursos),
                        'activo' => $faker->boolean(70),
                        'jornada' => 'Am',
                        'antiguo' => 'Si',
                        'genero' => 'Masculino',
                        'estrato' => $faker->numberBetween($min = 1, $max = 6),
                        'eps' => $faker->word,
                        'etnia' => $faker->word,
                        'direccion' => $faker->address,
                        'barrio' => $faker->city,
                        'telefono' => $faker->phoneNumber(),
                        'celular' => $faker->phoneNumber(),
                        'email' => $faker->email()
                    ));

                $demografico = new Demografico();
                $demografico->lugar_ocupa_hermanos = 2;
                $demografico->tipo_vivienda = 'Arriendo';
                $demografico->cantidad_veces_come_diario = 3;
                $demografico->anos_perdidos = 2;


                $demografico->descripcion_anos_perdidos = 'Cuarto - Noveno';
                $demografico->problemas_salud = 'Gastritis - Asma ';
                $demografico->tratamiento_problemas_salud = 'Terapia Respiratoria';
                $demografico->medicamentos_tomados = 'Omeprazol';
                $demografico->otro_problema = 'No aplica';
                $demografico->otra_terapia = 'No aplica';
                $demografico->asignatura_dificulta = 'Sociales';
                $demografico->asignatura_facilita = 'Matematicas';
                $demografico->tipo_sangre = 'O';
                $demografico->rh = 'Positivo';

                $acudiente1 = new Acudiente();

                $acudiente1->id = $faker->numberBetween($min = 800000, $max = 900000);
                $acudiente1->nombre = $faker->firstName;
                $acudiente1->primer_apellido = $faker->lastName;
                $acudiente1->segundo_apellido = $faker->lastName;
                $acudiente1->fecha_nacimiento = $faker->dateTimeBetween($startDate ='-70 years', $endDate= '-20 years');
                $acudiente1->nivel_educativo = 'Tecnico';
                $acudiente1->direccion = $faker->address;
                $acudiente1->barrio = $faker->city;
                $acudiente1->email = $faker->email;
                $acudiente1->telefono = '3202344432';
                $acudiente1->celular = '8035332';

                $idAcu1 = $acudiente1->id;
                $acudiente1->save();

                $acudiente2 = new Acudiente();

                $acudiente2->id = $faker->numberBetween($min = 700000, $max = 800000);
                $acudiente2->nombre = $faker->firstName;
                $acudiente2->primer_apellido = $faker->lastName;
                $acudiente2->segundo_apellido = $faker->lastName;
                $acudiente2->fecha_nacimiento = $faker->dateTimeBetween($startDate ='-70 years', $endDate= '-20 years');
                $acudiente2->nivel_educativo = 'Bachiller';
                $acudiente2->direccion = $faker->address;
                $acudiente2->barrio = $faker->city;
                $acudiente2->email = $faker->email;
                $acudiente2->telefono = '3202344432';
                $acudiente2->celular = '8035332';

                $idAcu2 = $acudiente2->id;
                $acudiente2->save();

                $estudiante->demograficos()->save($demografico);
                $estudiante->acudientes()->attach($idAcu1, ['parentesco' => $faker->randomElement($array = array ('Padre','Madre','Acudiente'))]);
                $estudiante->acudientes()->attach($idAcu2, ['parentesco' => $faker->randomElement($array = array ('Padre','Madre','Acudiente'))]);


                $usuario =  User::create(['id'=> $aux,
                    'email' => $faker->email,
                    'perfil' => 'estudiante',
                    'password' => bcrypt('estudiante'),
                    'activo' => true]);

                $estudiante->save();


                }



        }


    }
