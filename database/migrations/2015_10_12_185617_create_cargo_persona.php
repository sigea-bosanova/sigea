<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargoPersona extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cargo_persona', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('persona_id')->unsigned();
			$table->integer('cargo_id')->unsigned();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cargo_persona');
	}

}
