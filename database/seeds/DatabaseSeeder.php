		<?php

		use Illuminate\Database\Seeder;
		use Illuminate\Database\Eloquent\Model;

		class DatabaseSeeder extends Seeder {

			/**
			 * Run the database seeds.
			 *
			 * @return void
			 */
			public function run()
			{
				Model::unguard();

				    $this->call('DocenteSeeder');
				    $this->call('SecretariaSeeder');
					 $this->call('CooDisciplinaSeeder');
					 $this->call('CooAcademicoSeeder');
				     $this->call('AdmiSeeder');
				// $this->call('AcudienteTableSeeder');
				    $this->call('CursoTableSeeder');
			        $this->call('EstudianteTableSeeder');
				 //  $this->call('AcudienteEstudianteTableSeeder');
				 //  $this->call('CargoTableSeeder');

				 //  $this->call('CargoPersonaTableSeeder');
				   $this->call('MateriaTableSeeder');
				 //  $this->call('EstudianteMateriaTableSeeder');
				 //  $this->call('MateriaPersonaTableSeeder');
				 //  $this->call('GradoTableSeeder');
				 //	 $this->call('PeriodoTableSeeder');
				 	 $this->call('ObservacionTableSeeder');
				 //	 $this->call('PreguntaTableSeeder');
				 //    $this->call('RespuestaTableSeeder');

			}

		}
