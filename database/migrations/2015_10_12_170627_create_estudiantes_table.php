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
			$table->bigInteger('grado_id')->unsigned()->nullable();
			$table->bigInteger('curso_id')->unsigned()->nullable();
			$table->boolean('activo')->default(1);
			$table->string('jornada')->nullable();
			$table->string('antiguo')->nullable();
			$table->string('genero')->nullable();
			$table->integer('estrato')->nullable();
			$table->string('eps')->nullable();
			$table->string('etnia')->nullable();
			$table->bigInteger('telefono')->nullable();
			$table->bigInteger('celular')->nullable();
			$table->string('direccion')->nullable();
			$table->string('barrio')->nullable();
			$table->string('email')->nullable();

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
