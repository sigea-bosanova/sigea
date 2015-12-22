    <?php


    use Illuminate\Database\Seeder;
    use Faker\Factory as  Faker;
    use Sigea\User;
    use Sigea\Estudiante;
    use Sigea\Persona;


    class CooAcademicoSeeder extends Seeder
    {

        public function run()

        {

            $faker = Faker::create('es_ES');





               $aux = $faker->numberBetween($min = 1050000000,$max = 1060000000);

            $persona = Persona::create(array(
                'id' => $aux,
                'nombres' => $faker->firstName,
                'primer_apellido' => $faker->lastName,
                'segundo_apellido' => $faker->lastName,
                'tipo_id' => 'Cedula de Ciudadania',
                'sexo' => 'Masculino',

                'fecha_nacimiento' => $faker->dateTimeBetween($startDate = "-60 years", $endDate = "-30 years"),
                'tipo_id' => 'Cedula de Ciudadania',
                'nacionalidad' => "Colombiana",
                'direccion' => $faker->address,
                'clase_libreta_militar' => 'Segunda Clase',
                'numero_libreta_militar' => $faker->numberBetween($min = 165273, $max = 352678),
                'distrito_militar' => $faker->numberBetween($min = 1, $max = 18),
                'pais_nacimiento' => 'Colombia',
                'departamento_nacimiento' => $faker->country,
                'municipio' => $faker->city,
                'telefono' => $faker->numberBetween($min = 692032, $max = 923823),
                'celular' => $faker->numberBetween($min = 3005405303, $max = 3212457692),
                'email' => $faker->email,
                'edu_bas_primaria' =>'Quinto',
                'edu_bas_secundaria' => 'Noveno',
                'edu_bas_media' => 'Once',
                'edu_bas_titulo_obtenido' => $faker->sentence($nbWords = 7),
                'edu_bas_fecha_grado' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-2 years'),
                'edu_sup_modalidad_academica' => 'Pregrado',
                'edu_sup_semestres_aprovados' => $faker->numberBetween($min = 6, $max = 10),
                'edu_sup_graduado' => $faker->boolean(123),
                'edu_sup_estudios_titulos_obtenidos' => $faker->sentence($nbWords = 5),
                'edu_sup_fecha_terminacion' => $faker->dateTimeBetween($startDate = '-20 years', $endDate = '-2 years'),
                'edu_sup_num_tarjeta_profesional' => $faker->numberBetween($min = 165273, $max = 352678),
                'edu_sup_modalidad_academica_2' => 'Tecnologia',
                'edu_sup_semestres_aprovados_2' => $faker->numberBetween($min = 3, $max = 6),
                'edu_sup_graduado_2' => $faker->boolean(200),
                'edu_sup_estudios_titulos_obtenidos_2' => $faker->sentence($nbWords = 5),
                'edu_sup_fecha_terminacion_2' => $faker->dateTimeBetween($startDate = '-20 years', $endDate = '-2 years'),
                'edu_sup_num_tarjeta_profesional_2' => $faker->numberBetween($min = 165273, $max = 352678),
                'edu_sup_modalidad_academica_3' => 'Postgrado',
                'edu_sup_semestres_aprovados_3' => $faker->numberBetween($min = 3, $max = 6),
                'edu_sup_graduado_3' => $faker->boolean(123),
                'edu_sup_estudios_titulos_obtenidos_3' => $faker->sentence($nbWords = 5),
                'edu_sup_fecha_terminacion_3' => $faker->dateTimeBetween($startDate = '-20 years', $endDate = '-2 years'),
                'edu_sup_num_tarjeta_profesional_3' => $faker->numberBetween($min = 165273, $max = 352678),
                'edu_sup_modalidad_academica_2' => 'Postgrao',
                'edu_sup_semestres_aprovados_2' => $faker->numberBetween($min = 3, $max = 6),
                'edu_sup_graduado_2' => $faker->boolean(123),
                'edu_sup_estudios_titulos_obtenidos_2' => $faker->sentence($nbWords = 5),
                'edu_sup_fecha_terminacion_2' => $faker->dateTimeBetween($startDate = '-20 years', $endDate = '-2 years'),
                'edu_sup_num_tarjeta_profesional_2' => $faker->numberBetween($min = 165273, $max = 352678),
                'edu_sup_modalidad_academica_3' => 'Pregrado',
                'edu_sup_semestres_aprovados_3' => $faker->numberBetween($min = 3, $max = 6),
                'edu_sup_graduado_3' => $faker->boolean(27),
                'edu_sup_estudios_titulos_obtenidos_3' => $faker->sentence($nbWords = 5),
                'edu_sup_fecha_terminacion_3' => $faker->dateTimeBetween($startDate = '-20 years', $endDate = '-2 years'),
                'edu_sup_num_tarjeta_profesional_3' => $faker->numberBetween($min = 165273, $max = 352678),
                'edu_sup_modalidad_academica_4' => 'Tecnico',
                'edu_sup_semestres_aprovados_4' => $faker->numberBetween($min = 3, $max = 6),
                'edu_sup_graduado_4' => $faker->boolean(130),
                'edu_sup_estudios_titulos_obtenidos_4' => $faker->sentence($nbWords = 5),
                'edu_sup_fecha_terminacion_4' => $faker->dateTimeBetween($startDate = '-20 years', $endDate = '-2 years'),
                'edu_sup_num_tarjeta_profesional_4' => $faker->numberBetween($min = 165273, $max = 352678),
                'edu_sup_modalidad_academica_5' => 'Tecnico',
                'edu_sup_semestres_aprovados_5' => $faker->numberBetween($min = 3, $max = 6),
                'edu_sup_graduado_5' => $faker->boolean(130),
                'edu_sup_estudios_titulos_obtenidos_5' => $faker->sentence($nbWords = 5),
                'edu_sup_fecha_terminacion_5' => $faker->dateTimeBetween($startDate = '-20 years', $endDate = '-2 years'),
                'edu_sup_num_tarjeta_profesional_5' => $faker->numberBetween($min = 165273, $max = 352678),
                'idioma_1' => 'Ingles',
                'idioma_1_habla' => 'Regular',
                'idioma_1_lee' => 'Muy Bien',
                'idioma_1_escribe' => 'Bien',
                'idioma_2' => 'Aleman',
                'idioma_2_habla' => 'Regular',
                'idioma_2_lee' => 'Bien',
                'idioma_2_escribe' => 'Bien',
                'empresa_actual_nombre' => $faker->sentence($nbWords = 2),
                'empresa_actual_tipo_entidad' => 'Publica',
                'empresa_actual_pais' => $faker->country,
                'empresa_actual_departamento' => $faker->country,
                'empresa_actual_municipio' => $faker->city,
                'empresa_actual_correo' => $faker->email,
                'empresa_actual_telefono' => $faker->phoneNumber,
                'empresa_actual_fecha_ingreso' => $faker->dateTimeBetween($startDate = '-20 years', $endDate = '-10 years'),
                'empresa_actual_fecha_retiro' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = '-5 years'),
                'empresa_actual_cargo' => $faker->word,
                'empresa_actual_dependencia' => $faker->word,
                'empresa_actual_direccion' => $faker->address,
                'empresa_anterior_nombre' => $faker->sentence($nbWords = 2),
                'empresa_anterior_tipo_entidad' => 'Publica',
                'empresa_anterior_pais' => $faker->country,
                'empresa_anterior_departamento' => $faker->country,
                'empresa_anterior_municipio' => $faker->city,
                'empresa_anterior_correo' => $faker->email,
                'empresa_anterior_telefono' => $faker->phoneNumber,
                'empresa_anterior_fecha_ingreso' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = '-5 years'),
                'empresa_anterior_fecha_retiro' => $faker->dateTimeBetween($startDate = '-4 years', $endDate = '-2 years'),
                'empresa_anterior_cargo' => $faker->word,
                'empresa_anterior_dependencia' => $faker->word,
                'empresa_anterior_direccion' => $faker->address,
                'empresa_otra_nombre' => $faker->sentence($nbWords = 2),
                'empresa_otra_tipo_entidad' => 'Privada',
                'empresa_otra_pais' => $faker->country,
                'empresa_otra_departamento' => $faker->country,
                'empresa_otra_municipio' => $faker->city,
                'empresa_otra_correo' => $faker->email,
                'empresa_otra_telefono' => $faker->phoneNumber,
                'empresa_otra_fecha_ingreso' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = '-5 years'),
                'empresa_otra_fecha_retiro' => $faker->dateTimeBetween($startDate = '-4 years', $endDate = '-2 years'),
                'empresa_otra_cargo' => $faker->word,
                'empresa_otra_dependencia' => $faker->word,
                'empresa_otra_direccion' => $faker->address,
                'empresa_otra2_nombre' => $faker->sentence($nbWords = 2),
                'empresa_otra2_tipo_entidad' => 'Privada',
                'empresa_otra2_pais' => $faker->country,
                'empresa_otra2_departamento' => $faker->country,
                'empresa_otra2_municipio' => $faker->city,
                'empresa_otra2_correo' => $faker->email,
                'empresa_otra2_telefono' => $faker->phoneNumber,
                'empresa_otra2_fecha_ingreso' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = '-5 years'),
                'empresa_otra2_fecha_retiro' => $faker->dateTimeBetween($startDate = '-4 years', $endDate = '-2 years'),
                'empresa_otra2_cargo' => $faker->word,
                'empresa_otra2_dependencia' => $faker->word,
                'empresa_otra2_direccion' => $faker->address,
                'experiencia_sector_publico_anos' => $faker->numberBetween($min = 1, $max = 12),
                'experiencia_sector_publico_meses' => $faker->numberBetween($min = 1, $max = 12),
                'experiencia_sector_privado_anos' => $faker->numberBetween($min = 1, $max = 12),
                'experiencia_sector_privado_meses' => $faker->numberBetween($min = 1, $max = 12),
                'experiencia_independiente_anos' => $faker->numberBetween($min = 1, $max = 12),
                'experiencia_independiente_meses' => $faker->numberBetween($min = 1, $max = 12),
                'experiencia_total_anos' => $faker->numberBetween($min = 3, $max = 25),
                'experiencia_total_meses' => $faker->numberBetween($min = 1, $max = 12),
                'observaciones_recurso_humano' => $faker->text($maxBbChars = 150)

            ));


               $usuarioProfesor =  User::create(['id'=> $aux,
                                                'email' => $faker->email,
                                                'perfil' => 'Coordinador Academico',
                                                'password' => bcrypt('cooAcademico'),
                                                'activo' => true]);






            }


    }