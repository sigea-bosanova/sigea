<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesempenosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('desempenos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion');
			$table->integer('periodo_id')->unsigned();
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
		Schema::drop('desempenos');
	}

}
