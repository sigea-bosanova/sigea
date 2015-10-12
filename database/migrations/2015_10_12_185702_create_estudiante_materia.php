<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudianteMateria extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estudiante_materia', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('estudiante_id')->unsigned();
			$table->integer('materia_id')->unsigned();
			$table->integer('ano');
			$table->integer('nota_final');
			$table->boolean('aprovado');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estudiante_materia');
	}

}
