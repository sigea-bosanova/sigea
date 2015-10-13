<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estudiantes', function(Blueprint $table)
		{
			$table->bigInteger('id');
			$table->primary('id');
			$table->string('nombre');
			$table->string('primer_apellido');
			$table->string('segundo_apellido');
			$table->date('fecha_nacimiento');
			$table->bigInteger('grado_id')->unsigned();
			$table->bigInteger('curso_id')->unsigned();
			$table->boolean('activo');
			$table->string('jornada');
			$table->boolean('antiguo');
			$table->string('genero');
			$table->integer('estrato');
			$table->string('eps');
			$table->string('etnia');
			$table->bigInteger('padre')->unsigned();
			$table->bigInteger('madre')->unsigned();
			$table->bigInteger('responsable')->unsigned();
			$table->bigInteger('telefono');
			$table->bigInteger('celular');
			$table->string('direccion');
			$table->string('barrio');
			$table->string('email');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estudiantes');
	}

}
