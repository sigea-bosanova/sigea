<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('logros', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion');
			$table->integer('periodo_id')->unsigned();
			$table->integer('materia_id')->unsigned();
			$table->string('juicio_valorativo');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('logros');
	}

}
