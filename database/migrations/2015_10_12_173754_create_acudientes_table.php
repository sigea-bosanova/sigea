<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcudientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('acudientes', function(Blueprint $table)
		{
			$table->bigInteger('id');
			$table->primary('id');
			$table->string('nombre');
			$table->string('primer_apellido');
			$table->string('segundo_apellido');
			$table->date('fecha_nacimiento');
			$table->string('nivel_educativo');
			$table->string('direccion');
			$table->string('barrio');
			$table->bigInteger('telefono');
			$table->bigInteger('celular');
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
		Schema::drop('acudientes');
	}

}
