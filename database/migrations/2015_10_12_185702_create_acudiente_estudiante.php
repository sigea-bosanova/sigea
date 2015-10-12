<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcudienteEstudiante extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('acudiente_estudiante', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('estudiante_id')->unsigned();
			$table->bigInteger('acudiente_id')->unsigned();
			$table->string('parentesco');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('acudiente_estudiante');
	}

}
