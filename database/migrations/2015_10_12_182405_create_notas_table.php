<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('logro_id')->unsigned();
			$table->bigInteger('estudiante_id')->unsigned();
			$table->integer('periodo_id')->unsigned();
			$table->integer('materia_id')->unsigned();
			$table->integer('cog_1')->unsigned();
			$table->integer('cog_2')->unsigned();
			$table->integer('cog_3')->unsigned();
			$table->integer('cog_4')->unsigned();
			$table->integer('cog_5')->unsigned();
			$table->integer('pro_1')->unsigned();
			$table->integer('pro_2')->unsigned();
			$table->integer('pro_3')->unsigned();
			$table->integer('pro_4')->unsigned();
			$table->integer('pro_5')->unsigned();
			$table->integer('act_1')->unsigned();
			$table->integer('act_2')->unsigned();
			$table->integer('act_3')->unsigned();
			$table->integer('act_4')->unsigned();
			$table->integer('act_5')->unsigned();
			$table->integer('nota_parcial')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('notas');
	}

}
