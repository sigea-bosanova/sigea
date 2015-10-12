<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaPersona extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('materia_persona', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('persona_id')->unsigned();
			$table->integer('materia_id')->unsigned();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('materia_persona');
	}

}
