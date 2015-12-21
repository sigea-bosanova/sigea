<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personas', function(Blueprint $table)
		{
			$table->bigInteger('id');
			$table->primary('id');
			$table->integer('user_id');
			$table->string('nombres');
			$table->string('primer_apellido');
			$table->string('segundo_apellido')->nullable();
			$table->date('fecha_nacimiento', 'd-m-y');
			$table->string('tipo_id');
			$table->string('sexo');
			$table->string('nacionalidad');
			$table->string('clase_libreta_militar')->nullable();
			$table->bigInteger('numero_libreta_militar')->nullable();
			$table->string('distrito_militar')->nullable();
			$table->string('pais_nacimiento');
			$table->string('departamento_nacimiento');
			$table->string('municipio');
			$table->string('direccion')->nullable();
			$table->bigInteger('telefono')->nullable();
			$table->bigInteger('celular')->nullable();
			$table->string('email');
			$table->string('edu_bas_primaria')->nullable();
			$table->string('edu_bas_secundaria')->nullable();
			$table->string('edu_bas_media')->nullable();
			$table->string('edu_bas_titulo_obtenido')->nullable();
			$table->date('edu_bas_fecha_grado')->nullable();
			$table->string('edu_sup_modalidad_academica')->nullable();
			$table->integer('edu_sup_semestres_aprovados')->nullable();
			$table->string('edu_sup_graduado')->nullable();
			$table->string('edu_sup_estudios_titulos_obtenidos')->nullable();
			$table->date('edu_sup_fecha_terminacion')->nullable();
			$table->bigInteger('edu_sup_num_tarjeta_profesional')->nullable();
			$table->string('edu_sup_modalidad_academica_2')->nullable();
			$table->integer('edu_sup_semestres_aprovados_2')->nullable();
			$table->string('edu_sup_graduado_2')->nullable();
			$table->string('edu_sup_estudios_titulos_obtenidos_2')->nullable();
			$table->date('edu_sup_fecha_terminacion_2')->nullable();
			$table->bigInteger('edu_sup_num_tarjeta_profesional_2')->nullable();
			$table->string('edu_sup_modalidad_academica_3')->nullable();
			$table->integer('edu_sup_semestres_aprovados_3')->nullable();
			$table->string('edu_sup_graduado_3')->nullable();
			$table->string('edu_sup_estudios_titulos_obtenidos_3')->nullable();
			$table->date('edu_sup_fecha_terminacion_3')->nullable();
			$table->bigInteger('edu_sup_num_tarjeta_profesional_3')->nullable();
			$table->string('edu_sup_modalidad_academica_4')->nullable();
			$table->integer('edu_sup_semestres_aprovados_4')->nullable();
			$table->string('edu_sup_graduado_4')->nullable();
			$table->string('edu_sup_estudios_titulos_obtenidos_4')->nullable();
			$table->date('edu_sup_fecha_terminacion_4')->nullable();
			$table->bigInteger('edu_sup_num_tarjeta_profesional_4')->nullable();
			$table->string('edu_sup_modalidad_academica_5')->nullable();
			$table->integer('edu_sup_semestres_aprovados_5')->nullable();
			$table->string('edu_sup_graduado_5')->nullable();
			$table->string('edu_sup_estudios_titulos_obtenidos_5')->nullable();
			$table->date('edu_sup_fecha_terminacion_5')->nullable();
			$table->bigInteger('edu_sup_num_tarjeta_profesional_5')->nullable();
			$table->string('idioma_1')->nullable();
			$table->string('idioma_1_habla')->nullable();
			$table->string('idioma_1_lee')->nullable();
			$table->string('idioma_1_escribe')->nullable();
			$table->string('idioma_2')->nullable();
			$table->string('idioma_2_habla')->nullable();
			$table->string('idioma_2_lee')->nullable();
			$table->string('idioma_2_escribe')->nullable();
			$table->string('empresa_actual_nombre')->nullable();
			$table->string('empresa_actual_tipo_entidad')->nullable();
			$table->string('empresa_actual_pais')->nullable();
			$table->string('empresa_actual_departamento')->nullable();
			$table->string('empresa_actual_municipio')->nullable();
			$table->string('empresa_actual_correo')->nullable();
			$table->bigInteger('empresa_actual_telefono')->nullable();
			$table->date('empresa_actual_fecha_ingreso')->nullable();
			$table->date('empresa_actual_fecha_retiro')->nullable();
			$table->string('empresa_actual_cargo')->nullable();
			$table->string('empresa_actual_dependencia')->nullable();
			$table->string('empresa_actual_direccion')->nullable();
			$table->string('empresa_anterior_nombre')->nullable();
			$table->string('empresa_anterior_tipo_entidad')->nullable();
			$table->string('empresa_anterior_pais')->nullable();
			$table->string('empresa_anterior_departamento')->nullable();
			$table->string('empresa_anterior_municipio')->nullable();
			$table->string('empresa_anterior_correo')->nullable();
			$table->bigInteger('empresa_anterior_telefono')->nullable();
			$table->date('empresa_anterior_fecha_ingreso')->nullable();
			$table->date('empresa_anterior_fecha_retiro')->nullable();
			$table->string('empresa_anterior_cargo')->nullable();
			$table->string('empresa_anterior_dependencia')->nullable();
			$table->string('empresa_anterior_direccion')->nullable();
			$table->string('empresa_otra_nombre')->nullable();
			$table->string('empresa_otra_tipo_entidad')->nullable();
			$table->string('empresa_otra_pais')->nullable();
			$table->string('empresa_otra_departamento')->nullable();
			$table->string('empresa_otra_municipio')->nullable();
			$table->string('empresa_otra_correo')->nullable();
			$table->bigInteger('empresa_otra_telefono')->nullable();
			$table->date('empresa_otra_fecha_ingreso')->nullable();
			$table->date('empresa_otra_fecha_retiro')->nullable();
			$table->string('empresa_otra_cargo')->nullable();
			$table->string('empresa_otra_dependencia')->nullable();
			$table->string('empresa_otra_direccion')->nullable();
			$table->string('empresa_otra2_nombre')->nullable();
			$table->string('empresa_otra2_tipo_entidad')->nullable();
			$table->string('empresa_otra2_pais')->nullable();
			$table->string('empresa_otra2_departamento')->nullable();
			$table->string('empresa_otra2_municipio')->nullable();
			$table->string('empresa_otra2_correo')->nullable();
			$table->bigInteger('empresa_otra2_telefono')->nullable();
			$table->date('empresa_otra2_fecha_ingreso')->nullable();
			$table->date('empresa_otra2_fecha_retiro')->nullable();
			$table->string('empresa_otra2_cargo')->nullable();
			$table->string('empresa_otra2_dependencia')->nullable();
			$table->string('empresa_otra2_direccion')->nullable();
			$table->integer('experiencia_sector_publico_anos');
			$table->integer('experiencia_sector_publico_meses');
			$table->integer('experiencia_sector_privado_anos');
			$table->integer('experiencia_sector_privado_meses');
			$table->integer('experiencia_independiente_anos');
			$table->integer('experiencia_independiente_meses');
			$table->integer('experiencia_total_anos');
			$table->integer('experiencia_total_meses');
			$table->string('observaciones_recurso_humano');
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
		Schema::drop('personas');
	}

}
