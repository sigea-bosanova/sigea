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
			$table->string('nombres');
			$table->string('primer_apellido');
			$table->string('segundo_apellido');
			$table->string('tipo_id');
			$table->string('sexo');
			$table->string('nacionalidad');
			$table->string('clase_libreta_militar');
			$table->bigInteger('numero_libreta_militar');
			$table->string('distrito_militar');
			$table->string('pais_nacimiento');
			$table->string('departamento_nacimiento');
			$table->string('municipio');
			$table->string('direccion');
			$table->bigInteger('telefono_fijo');
			$table->bigInteger('celular');
			$table->string('correo');
			$table->string('edu_bas_primaria');
			$table->string('edu_bas_secundaria');
			$table->string('edu_bas_media');
			$table->string('edu_bas_titulo_obtenido');
			$table->date('edu_bas_fecha_grado');
			$table->string('edu_sup_modalidad_academica');
			$table->integer('edu_sup_semestres_aprovados');
			$table->string('edu_sup_graduado');
			$table->string('edu_sup_estudios_titulos_obtenidos');
			$table->date('edu_sup_fecha_terminacion');
			$table->bigInteger('edu_sup_num_tarjeta_profesional');
			$table->string('edu_sup_modalidad_academica_2');
			$table->integer('edu_sup_semestres_aprovados_2');
			$table->string('edu_sup_graduado_2');
			$table->string('edu_sup_estudios_titulos_obtenidos_2');
			$table->date('edu_sup_fecha_terminacion_2');
			$table->bigInteger('edu_sup_num_tarjeta_profesional_2');
			$table->string('edu_sup_modalidad_academica_3');
			$table->integer('edu_sup_semestres_aprovados_3');
			$table->string('edu_sup_graduado_3');
			$table->string('edu_sup_estudios_titulos_obtenidos_3');
			$table->date('edu_sup_fecha_terminacion_3');
			$table->bigInteger('edu_sup_num_tarjeta_profesional_3');
			$table->string('edu_sup_modalidad_academica_4');
			$table->integer('edu_sup_semestres_aprovados_4');
			$table->string('edu_sup_graduado_4');
			$table->string('edu_sup_estudios_titulos_obtenidos_4');
			$table->date('edu_sup_fecha_terminacion_4');
			$table->bigInteger('edu_sup_num_tarjeta_profesional_4');
			$table->string('edu_sup_modalidad_academica_5');
			$table->integer('edu_sup_semestres_aprovados_5');
			$table->string('edu_sup_graduado_5');
			$table->string('edu_sup_estudios_titulos_obtenidos_5');
			$table->date('edu_sup_fecha_terminacion_5');
			$table->bigInteger('edu_sup_num_tarjeta_profesional_5');
			$table->string('idioma_1');
			$table->string('idioma_1_habla');
			$table->string('idioma_1_lee');
			$table->string('idioma_1_escribe');
			$table->string('idioma_2');
			$table->string('idioma_2_habla');
			$table->string('idioma_2_lee');
			$table->string('idioma_2_escribe');
			$table->string('empresa_actual');
			$table->string('empresa_actual_tipo_entidad');
			$table->string('empresa_actual_pais');
			$table->string('empresa_actual_departamento');
			$table->string('empresa_actual_municipio');
			$table->string('empresa_actual_correo');
			$table->bigInteger('empresa_actual_telefono');
			$table->date('empresa_actual_fecha_ingreso');
			$table->date('empresa_actual_fecha_retiro');
			$table->string('empresa_actual_cargo');
			$table->string('empresa_actual_dependencia');
			$table->string('empresa_actual_direccion');
			$table->string('empresa_anterior_nombre');
			$table->string('empresa_anterior_tipo_entidad');
			$table->string('empresa_anterior_pais');
			$table->string('empresa_anterior_departamento');
			$table->string('empresa_anterior_municipio');
			$table->string('empresa_anterior_correo');
			$table->bigInteger('empresa_anterior_telefono');
			$table->date('empresa_anterior_fecha_ingreso');
			$table->date('empresa_anterior_fecha_retiro');
			$table->string('empresa_anterior_cargo');
			$table->string('empresa_anterior_dependencia');
			$table->string('empresa_anterior_direccion');
			$table->string('empresa_otra_nombre');
			$table->string('empresa_otra_tipo_entidad');
			$table->string('empresa_otra_pais');
			$table->string('empresa_otra_departamento');
			$table->string('empresa_otra_municipio');
			$table->string('empresa_otra_correo');
			$table->bigInteger('empresa_otra_telefono');
			$table->date('empresa_otra_fecha_ingreso');
			$table->date('empresa_otra_fecha_retiro');
			$table->string('empresa_otra_cargo');
			$table->string('empresa_otra_dependencia');
			$table->string('empresa_otra_direccion');
			$table->string('empresa_otra2_nombre');
			$table->string('empresa_otra2_tipo_entidad');
			$table->string('empresa_otra2_pais');
			$table->string('empresa_otra2_departamento');
			$table->string('empresa_otra2_municipio');
			$table->string('empresa_otra2_correo');
			$table->bigInteger('empresa_otra2_telefono');
			$table->date('empresa_otra2_fecha_ingreso');
			$table->date('empresa_otra2_fecha_retiro');
			$table->string('empresa_otra2_cargo');
			$table->string('empresa_otra2_dependencia');
			$table->string('empresa_otra2_direccion');
			$table->integer('experiencia_sector_publico_anos');
			$table->integer('experiencia_sector_publico_mese');
			$table->integer('experiencia_sector_privado_anos');
			$table->integer('experiencia_sector_privado_meses');
			$table->integer('experiencia_independiente_anos');
			$table->integer('experiencia_independiente_meses');
			$table->integer('experiencia_total_anos');
			$table->integer('experiencia_total_meses');
			$table->string('juramento');
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
