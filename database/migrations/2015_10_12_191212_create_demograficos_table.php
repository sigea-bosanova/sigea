<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemograficosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('demograficos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('estudiante_id');
			$table->integer('lugar_ocupa_hermanos');
			$table->string('tipo_vivienda');
			$table->integer('cantidad_veces_come_diario');
			$table->string('vive_con');
			$table->integer('anos_perdidos');
			$table->string('descripcion_anos_perdidos');
			$table->string('problemas_salud');
			$table->string('tratamiento_problemas_salud');
			$table->string('medicamentos_tomados');
			$table->string('otro_problema');
			$table->string('otra_terapia');
			$table->string('asignatura_facilita');
			$table->string('asignatura_dificulta');
			$table->string('tipo_sangre');
			$table->string('rh');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('demograficos');
	}

}
