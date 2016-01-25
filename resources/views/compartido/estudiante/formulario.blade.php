
<h3>Datos Personales del estudiante</h3>

<fieldset>



    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">No. Identificacion</label>

        <div >
						<span class="block input-icon input-icon-right">
					    {!! Form::text('id',null,['class' => 'required number width-40']) !!}
						</span>
        </div>

    </div>
    <br>
    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nombres :</label>

        <div >
						<span class="block input-icon input-icon-right">
						{!! Form::text('nombre',null,['class' => 'required  width-40']) !!}
						</span>
        </div>

    </div>
    <br>
    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Primer Apellido:</label>

        <div >
						<span class="block input-icon input-icon-right">
						{!! Form::text('primer_apellido',null,['class' => 'required width-40']) !!}
						</span>
        </div>

    </div>
    <br>
    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Segundo Apellido  :</label>

        <div >
						<span class="block input-icon input-icon-right">
                        {!! Form::text('segundo_apellido',null,['class' => 'width-40']) !!}
						</span>
        </div>

    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Correo Electronico:</label>

        <div >
						<span class="block input-icon input-icon-right">
                        {!! Form::text('email',null,['class' => 'required email width-40']) !!}
						</span>
        </div>

    </div>
    <br>


    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha de Nacimiento:</label>
        <div >
						<span class="block input-icon input-icon-right">

						{!! Form::date('fecha_nacimiento',null,['class' => 'required date width-40']) !!}
						</span>
        </div>
    </div>
    <br>




    <div class="form-group ">
        <label  class="col-xs-12 col-sm-3 ">Genero :</label>

        <div class="radio-inline">
            <div class="radio">
                <label> {!!  Form::radio('genero', 'Femenino') !!} Femenino</label>
            </div>
            <div class="radio">
                <label>  {!!  Form::radio('genero', 'Masculino')!!} Masculino</label>
            </div>
        </div>
    </div>
    <br>


    <div class="form-group ">
        <label  class="col-xs-12 col-sm-3 ">Jornada :</label>

        <div class="radio-inline">
            <div class="radio">
                <label> {!! Form::radio('jornada', 'Am') !!} Am</label>
            </div>
            <div class="radio">
                <label>  {!! Form::radio('jornada', 'Pm') !!} Pm</label>
            </div>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label  class="col-xs-12 col-sm-3 ">Es estudiante antiguo en la institucion? :</label>

        <div class="radio-inline">
            <div class="radio">
                <label> {!! Form::radio('antiguo', 'Si') !!} Si</label>
            </div>
            <div class="radio">
                <label> {!! Form::radio('antiguo', 'No') !!} No</label>
            </div>
        </div>
    </div>
    <br>


    <div class="form-group ">
        <label  class="col-xs-12 col-sm-3 ">Estrato :</label>

            <div class="radio-inline">
            <div class="radio">
                <label> {!! Form::radio('estrato', '1') !!} 1</label>
            </div>
            <div class="radio">
                <label> {!! Form::radio('estrato', '2') !!} 2</label>
            </div>
            </div>
        <div class="radio-inline">
            <div class="radio">
                <label> {!! Form::radio('estrato', '3') !!} 3</label>
            </div>


            <div class="radio">
                <label> {!! Form::radio('estrato', '4') !!} 4</label>
            </div>
            </div>
        <div class="radio-inline">
            <div class="radio">
                <label> {!! Form::radio('estrato', '5') !!} 5</label>
            </div>
            <div class="radio">
                <label> {!! Form::radio('estrato', '6') !!} 6</label>
            </div>

        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Eps:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('eps',null,['class' => ' form-control width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Etnia:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('etnia',null,['class' => ' width-40']) !!}
                        </span>
        </div>
    </div>
    <br>


    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Direccion Residencia:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('direccion',null,['class' => ' width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Barrio :</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('barrio',null,['class' => ' width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Telefono:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('telefono',null,['class' => 'number  width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Celular:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('celular',null,['class' => ' number width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Grado:</label>
        <div >
                                <span class="block input-icon input-icon-right">
                                    {!! Form::select('grado_id',['' => 'Seleccione una Opcion','1' => 'Primero', '2' => 'Segundo', '3' => 'Tercero', '4' => 'Cuarto', '5' => 'Quinto', '6' => 'Sexto', '7' => 'Septimo', '8' => 'Octavo', '9' => 'Noveno', '10' => 'Decimo', '11' => 'Decimo Primero'],null, ['class' => 'form-control width-40']) !!}
                                </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="eduSupSemestresAprovados2" class="col-xs-12 col-sm-3 control-label no-padding-right">Curso:</label>
        <div >
            {!! Form::select('curso_id',['' => 'Seleccione una Opcion','1' =>'1-A','2' =>'1-B','3' => '1-C','4' => '2-A','5' =>'2-B','6' =>'2-C','7'=>'3-A','8'=>'3-B','9'=>'3-C','10'=>'4-A','11' =>'4-B','12' => '4-C','13'=>'5-A','14' =>'5-B','15' => '5-C','16'=>'6-A','17' =>'6-B','18' => '6-C','19'=>'7-A','20' =>'7-B','21' => '7-C','22'=>'8-A','23' =>'8-B','24' => '8-C','25'=>'9-A','26'=>'9-B','27'=>'9-C','28'=>'10-A','29'=>'10-B','30'=>'10-C','31'=>'11-A','32'=>'11-B','33'=>'11-C'],null, ['class' => 'form-control width-40']) !!}
        </div>
    </div>
    <br>


</fieldset>

<h3>Datos Demograficos Estudiante</h3>
<fieldset>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Lugar que ocupa entre los hermanos:</label>
        <div  >
            {!! Form::text('lugar_ocupa_hermanos',null,['class' => 'number width-40']) !!}
        </div>
        <br>
        <br>
    </div>
    <br>

    <div class="form-group ">
        <label  class="col-xs-12 col-sm-3 ">Tipo de Vivienda :</label>

        <div class="radio-inline">
            <div class="radio">
                <label>{!! Form::radio('tipo_vivienda', 'Propia  ') !!} Propia</label>
            </div>
            <div class="radio">
                <label>  {!! Form::radio('tipo_vivienda', 'Arriendo') !!} Arriendo</label>
            </div>

        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right"> Cantidad de veces que come a diario:</label>
        <div  >
            {!! Form::text('cantidad_veces_come_diario',null,['class' => 'number width-40']) !!}
        </div>
        <br>
        <br>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">A&ntilde;os Perdidos:</label>
        <div  >
            {!! Form::text('anos_perdidos',null,['class' => 'number width-40']) !!}
        </div>
        <br>
        <br>
    </div>
    <br>

    <div class="center ">
        <h3  class="green">Seleccione los a&ntilde;os que haya perdido.</h3><br><br>
    </div>
    <div class="form-group" >
        <div class="center">

            <div class="form-group" >
                {!! Form::label('Primero',null,  ['class' => 'checkbox-inline']) !!} {!!  Form::checkbox('descripcion_anos_perdidos[]', 'Primero') !!}
                {!! Form::label('Segundo',null,  ['class' => 'checkbox-inline']) !!} {!!  Form::checkbox('descripcion_anos_perdidos[]', 'Segundo') !!}
                {!! Form::label('Tercero',null,  ['class' => 'checkbox-inline']) !!} {!!  Form::checkbox('descripcion_anos_perdidos[]', 'Tercero') !!}
                {!! Form::label('Cuarto',null,  ['class' => 'checkbox-inline']) !!} {!!  Form::checkbox('descripcion_anos_perdidos[]','Cuarto') !!}
                {!! Form::label('Quinto',null,  ['class' => 'checkbox-inline']) !!} {!!  Form::checkbox('descripcion_anos_perdidos[]', 'Quinto') !!}
            </div>
            <div class="form-group" >
                {!! Form::label('Sexto',null,  ['class' => 'checkbox-inline']) !!} {!!  Form::checkbox('descripcion_anos_perdidos[]', 'Sexto') !!}
                {!! Form::label('Septimo',null,  ['class' => 'checkbox-inline']) !!} {!!  Form::checkbox('descripcion_anos_perdidos[]', 'Septimo') !!}
                {!! Form::label('Octavo',null,  ['class' => 'checkbox-inline']) !!} {!!  Form::checkbox('descripcion_anos_perdidos[]', 'Octavo') !!}
                {!! Form::label('Noveno',null,  ['class' => 'checkbox-inline']) !!} {!!  Form::checkbox('descripcion_anos_perdidos[]', 'Noveno') !!}
                {!! Form::label('Decimo',null,  ['class' => 'checkbox-inline']) !!} {!!  Form::checkbox('descripcion_anos_perdidos[]', 'Decimo') !!}
                {!! Form::label('Decimo Primero',null,  ['class' => 'checkbox-inline']) !!} {!!  Form::checkbox('descripcion_anos_perdidos[]', 'Decimo Primero') !!}

            </div>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Enuncie los problemas de salud del estudiante(Si tiene):</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('problemas_salud',null,['class' => ' form-control width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Tratamiento para los problemas de Salud:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('tratamiento_problemas_salud',null,['class' => ' form-control width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Enuncie los medicamentos tomados(Si aplica):</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('medicamentos_tomados',null,['class' => ' form-control width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Enuncie otros problemas de salud del estudiante(Si tiene):</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('otro_problema',null,['class' => ' form-control width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Terapias  a las que asiste(Si aplica).</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('otra_terapia',null,['class' => ' form-control width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Asignatura que se le dificulta:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('asignatura_dificulta',null,['class' => ' form-control width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Asignatura que se le facilita:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('asignatura_facilita',null,['class' => ' form-control width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group">
        <label for="eduBasPrimaria" class="col-xs-12 col-sm-3 control-label">Tipo de Sangre:</label>
        <div class="form-input" >
            {!! Form::select('tipo_sangre',['' => 'Seleccione una Opcion','O' =>'O' ,'A' => 'A' ,'B' => 'B','AB' => 'AB'],null , ['class' => 'required form-control width-40']) !!}
        </div>
    </div>
    <br>


    <div class="form-group ">
        <label  class="col-xs-12 col-sm-3 ">Rh :</label>

        <div class="radio-inline">
            <div class="radio">
                <label> {!!  Form::radio('rh', 'Positivo') !!} Positivo</label>
            </div>
            <div class="radio">
                <label>  {!!  Form::radio('rh', 'Negativo')!!} Negativo</label>
            </div>
        </div>
    </div>
    <br>





</fieldset>



<h3>Final</h3>
<fieldset>
    <div class="center">
        <h3 class="green">Felicitaciones!</h3>
        Ya diligenciaste todo  el formulario. Presiona Finalizar para guardarlo.
        <br>
    </div>

</fieldset>