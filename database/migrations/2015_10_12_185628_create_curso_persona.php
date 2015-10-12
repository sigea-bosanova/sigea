<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoPersona extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('curso_persona', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('persona_id')->unsigned();
			$table->integer('curso_id')->unsigned();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('curso_persona');
	}

}
