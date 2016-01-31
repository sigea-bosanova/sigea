
<h3>Datos Personales del estudiante</h3>

<fieldset>



    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">No. Identificacion</label>

        <div >
						<span class="block input-icon input-icon-right">
					    {!! Form::text('id',null,['disabled'=>'','class' => 'number width-40']) !!}
						</span>
        </div>

    </div>
    <br>
    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nombres :</label>

        <div >
						<span class="block input-icon input-icon-right">
						{!! Form::text('nombre',null,['disabled'=>'','class' => 'width-40']) !!}
						</span>
        </div>

    </div>
    <br>
    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Primer Apellido:</label>

        <div >
						<span class="block input-icon input-icon-right">
						{!! Form::text('primer_apellido',null,['disabled'=>'','class' => 'required width-40']) !!}
						</span>
        </div>

    </div>
    <br>
    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Segundo Apellido  :</label>

        <div >
						<span class="block input-icon input-icon-right">
                        {!! Form::text('segundo_apellido',null,['disabled'=>'','class' => 'width-40']) !!}
						</span>
        </div>

    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Correo Electronico:</label>

        <div >
						<span class="block input-icon input-icon-right">
                        {!! Form::text('email',null,['disabled'=>'','class' => 'email width-40']) !!}
						</span>
        </div>

    </div>
    <br>


    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha de Nacimiento:</label>
        <div >
						<span class="block input-icon input-icon-right">

						{!! Form::date('fecha_nacimiento',null,['disabled'=>'','class' => ' date width-40']) !!}
						</span>
        </div>
    </div>
    <br>



    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right"> Genero</label>
        <div  >
            {!! Form::text('genero', null, ['disabled'=>'','class' => 'number width-40']) !!}
        </div>
        <br>
        <br>
    </div>
    <br>



    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right"> Jornada</label>
        <div  >
            {!! Form::text('jornada', null, ['disabled'=>'','class' => 'number width-40']) !!}
        </div>
        <br>
        <br>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right"> Es estudiante antiguo en la institucion? </label>
        <div  >
            {!! Form::text('antiguo', null, ['disabled'=>'','class' => 'number width-40']) !!}
        </div>
        <br>
        <br>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right"> Estrato </label>
        <div  >
            {!! Form::text('estrato', null, ['disabled'=>'','class' => 'number width-40']) !!}
        </div>
        <br>
        <br>
    </div>
    <br>






    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Eps:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('eps',null,['disabled'=>'','class' => ' form-control width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Etnia:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('etnia',null,['disabled'=>'','class' => ' width-40']) !!}
                        </span>
        </div>
    </div>
    <br>


    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Direccion Residencia:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('direccion',null,['disabled'=>'','class' => ' width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Barrio :</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('barrio',null,['disabled'=>'','class' => ' width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Telefono:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('telefono',null,['disabled'=>'','class' => 'number  width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Celular:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('celular',null,['disabled'=>'','class' => ' number width-40']) !!}
                        </span>
        </div>
    </div>
    <br>


    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Grado:</label>
        <div >
            @if(isset($grado))
                                <span class="block input-icon input-icon-right">
                                {!! Form::text('grado',$grado->nombre,['disabled'=>'','class' => ' number width-40']) !!}
                        </span>
            @endif
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Curso:</label>
        <div >

                <span class="block input-icon input-icon-right">
                                {!! Form::text('grado',$curso->nombre,['disabled'=>'','class' => ' number width-40']) !!}
                        </span>

        </div>
    </div>
    <br>






</fieldset>


<h3>Datos Demograficos Estudiante</h3>
<fieldset>

    @if(isset($demograficos))
    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Lugar que ocupa entre los hermanos:</label>
        <div  >
            {!! Form::text('lugar_ocupa_hermanos',$demograficos->lugar_ocupa_hermanos,['disabled'=>'','class' => 'number width-40']) !!}
        </div>
        <br>
        <br>
    </div>
    <br>

    <div class="form-group ">
        <label  class="col-xs-12 col-sm-3 ">Tipo de Vivienda :</label>
        <div  >
            {!! Form::text('tipo_vivienda',$demograficos->tipo_vivienda,['disabled'=>'','class' => 'number width-40']) !!}
        </div>
        </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right"> Cantidad de veces que come a diario:</label>
        <div  >
            {!! Form::text('cantidad_veces_come_diario',$demograficos->cantidad_veces_come_diario,['disabled'=>'','class' => 'number width-40']) !!}
        </div>
        <br>
        <br>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">A&ntilde;os Perdidos:</label>
        <div  >
            {!! Form::text('anos_perdidos',$demograficos->anos_perdidos,['disabled'=>'','class' => 'number width-40']) !!}
        </div>
        <br>
        <br>
    </div>
    <br>


    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Descripcion  a&ntilde;os perdidos.:</label>
        <div  >
            {!! Form::text('descripcion_anos_perdidos',$demograficos->descripcion_anos_perdidos,['disabled'=>'','class' => 'number width-40']) !!}
        </div>
        <br>
        <br>
    </div>
    <br>


    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Enuncie los problemas de salud del estudiante(Si tiene):</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('problemas_salud',$demograficos->problemas_salud,['disabled'=>'','class' => ' form-control width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Tratamiento para los problemas de Salud:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('tratamiento_problemas_salud',$demograficos->tratamiento_problemas_salud,['disabled'=>'','class' => ' form-control width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Enuncie los medicamentos tomados(Si aplica):</label>
        <div>
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('medicamentos_tomados',$demograficos->medicamentos_tomados,['disabled'=>'','class' => ' form-control width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Enuncie otros problemas de salud del estudiante(Si tiene):</label>
        <div>
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('otro_problema',$demograficos->otro_problema,['disabled'=>'','class' => ' form-control width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Terapias  a las que asiste(Si aplica).</label>
        <div>
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('otra_terapia',$demograficos->otra_terapia,['disabled'=>'','class' => ' form-control width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Asignatura que se le dificulta:</label>
        <div>
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('asignatura_dificulta',$demograficos->asignatura_dificulta,['disabled'=>'','class' => ' form-control width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Asignatura que se le facilita:</label>
        <div>
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('asignatura_facilita',$demograficos->asignatura_facilita,['disabled'=>'','class' => ' form-control width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group">
        <label for="eduBasPrimaria" class="col-xs-12 col-sm-3 control-label">Tipo de Sangre:</label>
        <div class="form-input" >
                            <span class="block input-icon input-icon-right">
                            {!! Form::text('tipo_sangre',$demograficos->tipo_sangre,['disabled'=>'','class' => ' form-control width-40']) !!}
                        </span>
        </div>
    </div>
    <br>


    <div class="form-group ">
        <label  class="col-xs-12 col-sm-3 ">Rh :</label>

        <div class="form-group">
             <span class="block input-icon input-icon-right">
                            {!! Form::text('rh',$demograficos->rh,['disabled'=>'','class' => ' form-control width-40']) !!}
                        </span>

        </div>
    </div>
    <br>
    @endif


</fieldset>


@if(isset($acudientes))
    <?php $i= 1?>
@foreach($acudientes as $acudiente)
@if($i ==1)
<h3>Datos Personales Primer Acudiente</h3>
@else
    <h3>Datos Personales Segundo Acudiente</h3>
@endif
<fieldset>
    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">No. Identificacion</label>

        <div >
						<span class="block input-icon input-icon-right">
					    {!! Form::text('id_ac_1',$acudiente->id,['disabled'=>'','class' => 'required number width-40']) !!}
						</span>
        </div>

    </div>
    <br>
    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nombres :</label>

        <div >
						<span class="block input-icon input-icon-right">
						{!! Form::text('nombre_ac_1',$acudiente->nombre,['disabled'=>'','class' => 'required  width-40']) !!}
						</span>
        </div>

    </div>
    <br>
    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Primer Apellido:</label>

        <div >
						<span class="block input-icon input-icon-right">
						{!! Form::text('primer_apellido_ac_1',$acudiente->primer_apellido,['disabled'=>'','class' => 'required width-40']) !!}
						</span>
        </div>

    </div>
    <br>
    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Segundo Apellido  :</label>

        <div >
						<span class="block input-icon input-icon-right">
                        {!! Form::text('segundo_apellido_ac_1',$acudiente->segundo_apellido,['disabled'=>'','class' => 'width-40']) !!}
						</span>
        </div>

    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Correo Electronico:</label>

        <div >
						<span class="block input-icon input-icon-right">
                        {!! Form::text('email_ac_1',$acudiente->email,['disabled'=>'','class' => 'email width-40']) !!}
						</span>
        </div>

    </div>
    <br>


    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha de Nacimiento:</label>
        <div >
						<span class="block input-icon input-icon-right">

						{!! Form::date('fecha_nacimiento_ac_1',$acudiente->fecha_nacimiento,['disabled'=>'','class' => 'required date width-40']) !!}
						</span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nivel Educativo:</label>
        <div >
                                <span class="block input-icon input-icon-right">
                                    {!! Form::text('nivel_educativo_ac_1',$acudiente->nivel_educativo, ['disabled'=>'','class' => 'form-control width-40']) !!}
                                </span>
        </div>
    </div>
    <br>


    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Direccion Residencia:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('direccion_ac_1',$acudiente->direccion,['disabled'=>'','class' => ' width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Barrio :</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('barrio_ac_1',$acudiente->barrio,['disabled'=>'','class' => ' width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Telefono:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('telefono_ac_1',$acudiente->telefono,['disabled'=>'','class' => 'number  width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Celular:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('celular_ac_1',$acudiente->celular,['disabled'=>'','class' => ' number width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    @if(isset($parentescos))
    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Parentesco con el Estudiante:</label>
        <div >
                                <span class="block input-icon input-icon-right">

                                    @if($i == 1)
                                    {!! Form::text('parentesco_ac_1',$parentescos[0][0]->parentesco , ['disabled'=>'','class' => 'form-control width-40']) !!}
                                        @else
                                            {!! Form::text('parentesco_ac_1',$parentescos[0][1]->parentesco , ['disabled'=>'','class' => 'form-control width-40']) !!}
                                    @endif
                                </span>
        </div>
    </div>
    <br>
    @endif


</fieldset>

<?php $i++?>
    @endforeach

@endif


<h3>Final</h3>
<fieldset>
    <div class="center">
        <h3 class="green">Final de la informacion  :)</h3>
        Ya viste todos los datos disponibles.
        <br>
    </div>

</fieldset>