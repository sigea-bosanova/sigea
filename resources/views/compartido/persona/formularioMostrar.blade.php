<h3>Datos Personales</h3>

<fieldset>



    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">C.C del Empleado:</label>

        <div >
						<span class="block input-icon input-icon-right">
					    {!! Form::text('id',null,['disabled'=>'','class' => 'required number width-40']) !!}
						</span>
        </div>

    </div>
    <br>
    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nombres del Empleado:</label>

        <div >
						<span class="block input-icon input-icon-right">
						{!! Form::text('nombres',null,['disabled'=>'','class' => 'required  width-40']) !!}
						</span>
        </div>

    </div>
    <br>
    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Primer Apellido del Empleado:</label>

        <div >
						<span class="block input-icon input-icon-right">
						{!! Form::text('primer_apellido',null,['disabled'=>'','class' => 'required width-40']) !!}
						</span>
        </div>

    </div>
    <br>
    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Segundo Apellido  del Empleado:</label>

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
                        {!! Form::text('email',null,['disabled'=>'','class' => 'required email width-40']) !!}
						</span>
        </div>

    </div>
    <br>


    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha de Nacimiento del Empleado:</label>
        <div >
						<span class="block input-icon input-icon-right">

						{!! Form::date('fecha_nacimiento',null,['disabled'=>'','class' => 'required date width-40']) !!}
						</span>
        </div>
    </div>
    <br>


    <div class="form-group ">
        <label  class="col-xs-12 col-sm-3 ">Tipo de identificaci&oacute;n:</label>

        <div class="radio-inline">
            <div class="radio">
                <label>{!! Form::radio('tipo_id', 'Cedula de Ciudadania',null, ['disabled'=>'']) !!}Cedula de Ciudadania</label>
            </div>
            <div class="radio">
                <label>  {!! Form::radio('tipo_id', 'Cedula de Extranjeria', null, ['disabled'=>'']) !!}Cedula de Extranjeria</label>
            </div>
            <div class="radio">
                <label>   {!! Form::radio('tipo_id', 'Pasaporte',null, ['disabled'=>'']) !!} Pasaporte</label>
            </div>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label  class="col-xs-12 col-sm-3 ">Genero :</label>

        <div class="radio-inline">
            <div class="radio">
                <label> {!!  Form::radio('sexo', 'Femenino',null, ['disabled'=>'']) !!} Femenino</label>
            </div>
            <div class="radio">
                <label>  {!!  Form::radio('sexo', 'Masculino',null, ['disabled'=>''])!!} Masculino</label>
            </div>
        </div>
    </div>
    <br>


    <div class="form-group ">
        <label  class="col-xs-12 col-sm-3 ">Nacionalidad :</label>

        <div class="radio-inline">
            <div class="radio">
                <label> {!! Form::radio('nacionalidad', 'Colombiana',null, ['disabled'=>'']) !!} Colombiana</label>
            </div>
            <div class="radio">
                <label>  {!! Form::radio('nacionalidad', 'Extranjera',null, ['disabled'=>'']) !!} Extranjera</label>
            </div>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label  class="col-xs-12 col-sm-3 ">Libreta Militar :</label>

        <div class="radio-inline">
            <div class="radio">
                <label> {!! Form::radio('clase_libreta_militar', 'Primera Clase',null, ['disabled'=>'']) !!} Primera Clase</label>
            </div>
            <div class="radio">
                <label> {!! Form::radio('clase_libreta_militar', 'Segunda Clase',null, ['disabled'=>'']) !!} Segunda Clase</label>
            </div>
        </div>
    </div>
    <br>




    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Numero Libreta Militar:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('numero_libreta_militar',null,['disabled'=>'','class' => 'number width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Distrito Militar:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('distrito_militar',null,['disabled'=>'','class' => 'number width-40']) !!}
                        </span>
        </div>
    </div>


    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Datos de Nacimiento:</label>
        <div >
                        <span class="block input-icon input-icon-right">

                        </span>
        </div>
    </div>
    <br>



    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Pais:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('pais_nacimiento',null,['disabled'=>'','class' => 'required form-control width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Departamento:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('departamento_nacimiento',null,['disabled'=>'','class' => 'required width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Municipio:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('municipio',null,['disabled'=>'','class' => 'required width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Direccion Residencia:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('direccion',null,['disabled'=>'','class' => 'required width-40']) !!}
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
                            {!! Form::text('celular',null,['disabled'=>'','class' => 'required number width-40']) !!}
                        </span>
        </div>
    </div>

</fieldset>





<h3>Formacion Academica</h3>
<fieldset>


    <div class="form-group">
        <label for="eduBasPrimaria" class="col-xs-12 col-sm-3 control-label">Nivel Alcanzado B&aacute;sica Primaria:</label>
        <div class="form-input" >
            {!! Form::select('edu_bas_primaria',['' => 'Seleccione una Opcion','Quinto' =>'Quinto' ,'Cuarto' => 'Cuarto' ,'Tercero' => 'Tercero','Segundo' => 'Segundo','Primero' =>'Primero'],null , ['disabled'=>'','class' => 'required form-control width-40']) !!}
        </div>
    </div>
    <br>


    <div class="form-group ">
        <label for="eduBasSecuandaria" class="col-xs-12 col-sm-3 ">Nivel Alcanzado B&aacute;sica Secundaria:</label>
        <div >
            {!! Form::select('edu_bas_secundaria',['' => 'Seleccione una Opcion','Noveno' => 'Noveno','Octavo' => 'Octavo','Septimo'=>'Septimo','Sexto' => 'Sexto'],null, ['disabled'=>'','class' => 'form-control width-40']) !!}
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="eduBasMedia" class="col-xs-12 col-sm-3 control-label no-padding-right">Nivel Alcanzado Educaci&oacute;n Media:</label>
        <div >
            {!! Form::select('edu_bas_media',['' => 'Seleccione una Opcion','Once'=> 'Once','Decimo'=>'Decimo'],null, ['disabled'=>'','class' => 'form-control width-40']) !!}
        </div>

    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">T&iacute;tulo Obtenido:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('edu_bas_titulo_obtenido',null,['disabled'=>'','class' => 'required required width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha de Grado:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::date('edu_bas_fecha_grado',null,['disabled'=>'','class' => 'required date width-40']) !!}
                        </span>
        </div>
    </div>
    <br>


    <div class="form-group ">
        <br>
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Educaci&oacute;n Superior (Pregado, Postgrado):</label>
        <br>
        <br>
        <br>
        <div class="form-group ">
            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Primera Modalidad Acad&eacute;mica:</label>
            <div >
                            <span class="block input-icon input-icon-right">
                                {!! Form::text('edu_sup_modalidad_academica',null,['disabled'=>'','class' => 'width-40']) !!}
                            </span>
            </div>
        </div>
        <br>

        <div class="form-group ">
            <label for="eduSupSemestresAprovados" class="col-xs-12 col-sm-3 control-label no-padding-right">Semestres Aprovados:</label>
            <div >
                            <span class="block input-icon input-icon-right">
                                {!! Form::select('edu_sup_semestres_aprovados',['' => 'Seleccione una Opcion','1' =>'1','2' =>'2','3' => '3','4' => '4','5' =>'5','6' =>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11' =>'11','12' => '12'],null, ['disabled'=>'','class' => 'form-control width-40']) !!}
                            </span>
            </div>
        </div>
        <br>

        <div class="form-group ">
            <label for="eduSupGraduado" class="col-xs-12 col-sm-3 control-label no-padding-right">Graduado(Si-No):</label>
            <div >
                            <span class="block input-icon input-icon-right">
                                {!! Form::select('edu_sup_graduado',['' => 'Seleccione una Opcion','No' => 'No', 'Si' => 'Si'],null, ['disabled'=>'','class' => 'form-control width-40']) !!}
                            </span>
            </div>
        </div>
        <br>

        <div class="form-group ">
            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nombre del Estudio O T&iacute;tulo Obtenido:</label>
            <div >
                            <span class="block input-icon input-icon-right">
                                {!! Form::text('edu_sup_estudios_titulos_obtenidos',null,['disabled'=>'','class' => 'width-40']) !!}
                            </span>
            </div>
        </div>
        <br>

        <div class="form-group ">
            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha de Terminacion:</label>
            <div >
                            <span class="block input-icon input-icon-right">
                                {!! Form::date('edu_sup_fecha_terminacion',null,['disabled'=>'','class' => 'width-40']) !!}
                            </span>
            </div>
        </div>
        <br>

        <div class="form-group ">
            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">N&uacute;mero de Tarjeta Profesional:</label>
            <div >
                            <span class="block input-icon input-icon-right">
                                {!! Form::text('edu_sup_num_tarjeta_profesional',null,['disabled'=>'','class' => 'width-40']) !!}
                            </span>
            </div>
        </div>
        <br>

        <div class="form-group ">
            <br>
            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Educaci&oacute;n Superior (Pregado, Postgrado):</label>
            <br>
            <br>
            <br>
            <div class="form-group ">
                <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Segunda Modalidad Acad&eacute;mica:</label>
                <div >
                                <span class="block input-icon input-icon-right">
                                    {!! Form::text('edu_sup_modalidad_academica_2',null,['disabled'=>'','class' => 'width-40']) !!}
                                </span>
                </div>
            </div>
            <br>

            <div class="form-group ">
                <label for="eduSupSemestresAprovados2" class="col-xs-12 col-sm-3 control-label no-padding-right">Semestres Aprovados:</label>
                <div >
                    {!! Form::select('edu_sup_semestres_aprovados_2',['' => 'Seleccione una Opcion','1' =>'1','2' =>'2','3' => '3','4' => '4','5' =>'5','6' =>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11' =>'11','12' => '12'],null, ['disabled'=>'','class' => 'form-control width-40']) !!}
                </div>
            </div>
            <br>

            <div class="form-group ">
                <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Graduado(Si-No):</label>
                <div >
                                <span class="block input-icon input-icon-right">
                                    {!! Form::select('edu_sup_graduado_2',['' => 'Seleccione una Opcion','No' => 'No', 'Si' => 'Si'],null, ['disabled'=>'','class' => 'form-control width-40']) !!}
                                </span>
                </div>
            </div>
            <br>

            <div class="form-group ">
                <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nombre del Estudio O T&iacute;tulo Obtenido:</label>
                <div >
                                <span class="block input-icon input-icon-right">
                                    {!! Form::text('edu_sup_estudios_titulos_obtenidos_2',null,['disabled'=>'','class' => 'width-40']) !!}
                                </span>
                </div>
            </div>
            <br>

            <div class="form-group ">
                <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha de Terminacion:</label>
                <div >
                                <span class="block input-icon input-icon-right">
                                    {!! Form::date('edu_sup_fecha_terminacion_2',null,['disabled'=>'','class' => 'width-40']) !!}
                                </span>
                </div>
            </div>
            <br>

            <div class="form-group ">
                <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">N&uacute;mero de Tarjeta Profesional:</label>
                <div >
                                <span class="block input-icon input-icon-right">
                                    {!! Form::text('edu_sup_num_tarjeta_profesional_2',null,['disabled'=>'','class' => 'width-40', 'onkeypress' => 'return justNumbers(event);']) !!}
                                </span>
                </div>
            </div>
            <br>
            <br>

            <div class="form-group ">
                <br>
                <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Educaci&oacute;n Superior (Pregado, Postgrado):</label>
                <br>
                <br>
                <br>
                <div class="form-group ">
                    <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Tercera Modalidad Acad&eacute;mica:</label>
                    <div >
                                    <span class="block input-icon input-icon-right">
                                        {!! Form::text('edu_sup_modalidad_academica_3',null,['disabled'=>'','class' => 'width-40']) !!}
                                    </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="eduSupSemestresAprovados3" class="col-xs-12 col-sm-3 control-label no-padding-right">Semestres Aprovados:</label>
                    <div >
                        {!! Form::select('edu_sup_semestres_aprovados_3',['' => 'Seleccione una Opcion','1' =>'1','2' =>'2','3' => '3','4' => '4','5' =>'5','6' =>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11' =>'11','12' => '12'],null, ['disabled'=>'','class' => 'form-control width-40']) !!}
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Graduado(Si-No):</label>
                    <div >
                                    <span class="block input-icon input-icon-right">
                                        {!! Form::select('edu_sup_graduado_3',['' => 'Seleccione una Opcion','No' => 'No', 'Si' => 'Si'],null, ['disabled'=>'','class' => 'form-control width-40']) !!}

                                    </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nombre del Estudio O T&iacute;tulo Obtenido:</label>
                    <div >
                                    <span class="block input-icon input-icon-right">
                                        {!! Form::text('edu_sup_estudios_titulos_obtenidos_3',null,['disabled'=>'','class' => 'width-40']) !!}
                                    </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha de Terminacion:</label>
                    <div >
                                    <span class="block input-icon input-icon-right">
                                        {!! Form::date('edu_sup_fecha_terminacion_3',null,['disabled'=>'','class' => 'width-40']) !!}
                                    </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">N&uacute;mero de Tarjeta Profesional:</label>
                    <div >
                                    <span class="block input-icon input-icon-right">
                                        {!! Form::text('edu_sup_num_tarjeta_profesional_3',null,['disabled'=>'','class' => 'width-40', 'onkeypress' => 'return justNumbers(event);']) !!}
                                    </span>
                    </div>
                </div>
                <br>
                <br>

                <div class="form-group ">
                    <br>
                    <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Educaci&oacute;n Superior (Pregado, Postgrado):</label>
                    <br>
                    <br>
                    <br>

                    <div class="form-group ">
                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Cuarta Modalidad Acad&eacute;mica:</label>
                        <div >
                                        <span class="block input-icon input-icon-right">
                                            {!! Form::text('edu_sup_modalidad_academica_4',null,['disabled'=>'','class' => 'width-40']) !!}
                                        </span>
                        </div>
                    </div>
                    <br>

                    <div class="form-group ">
                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Semestres Aprovados:</label>
                        <div >
                            {!! Form::select('edu_sup_semestres_aprovados_4',['' => 'Seleccione una Opcion','1' =>'1','2' =>'2','3' => '3','4' => '4','5' =>'5','6' =>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11' =>'11','12' => '12'],null, ['disabled'=>'','class' => 'form-control width-40']) !!}
                        </div>
                    </div>
                    <br>

                    <div class="form-group ">
                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Graduado(Si-No):</label>
                        <div >
                            {!! Form::select('edu_sup_graduado_4',['' => 'Seleccione una Opcion','No' => 'No', 'Si' => 'Si'],null, ['disabled'=>'','class' => 'form-control width-40']) !!}
                        </div>
                    </div>
                    <br>

                    <div class="form-group ">
                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nombre del Estudio O T&iacute;tulo Obtenido:</label>
                        <div >
                                        <span class="block input-icon input-icon-right">
                                            {!! Form::text('edu_sup_estudios_titulos_obtenidos_4',null,['disabled'=>'','class' => 'width-40']) !!}
                                        </span>
                        </div>
                    </div>
                    <br>

                    <div class="form-group ">
                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha de Terminacion:</label>
                        <div >
                                        <span class="block input-icon input-icon-right">
                                            {!! Form::date('edu_sup_fecha_terminacion_4',null,['disabled'=>'','class' => 'width-40']) !!}
                                        </span>
                        </div>
                    </div>
                    <br>

                    <div class="form-group ">
                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">N&uacute;mero de Tarjeta Profesional:</label>
                        <div >
                                        <span class="block input-icon input-icon-right">
                                            {!! Form::text('edu_sup_num_tarjeta_profesional_4',null,['disabled'=>'','class' => 'width-40', 'onkeypress' => 'return justNumbers(event);']) !!}
                                        </span>
                        </div>
                    </div>
                    <br>


                    <div class="form-group ">
                        <br>
                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Educaci&oacute;n Superior (Pregado, Postgrado):</label>
                        <br>
                        <br>
                        <br>
                        <div class="form-group ">
                            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Quinta Modalidad Acad&eacute;mica:</label>
                            <div >
                                            <span class="block input-icon input-icon-right">
                                                {!! Form::text('edu_sup_modalidad_academica_5',null,['disabled'=>'','class' => 'width-40']) !!}
                                            </span>
                            </div>
                        </div>
                        <br>

                        <div class="form-group ">
                            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Semestres Aprovados:</label>
                            <div >
                                {!! Form::select('edu_sup_semestres_aprovados_5',['' => 'Seleccione una Opcion','1' =>'1','2' =>'2','3' => '3','4' => '4','5' =>'5','6' =>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11' =>'11','12' => '12'],null, ['disabled'=>'','class' => 'form-control width-40']) !!}
                            </div>
                        </div>
                        <br>

                        <div class="form-group ">
                            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Graduado(Si-No):</label>
                            <div >
                                {!! Form::select('edu_sup_graduado_5',['' => 'Seleccione una Opcion','No' => 'No', 'Si' => 'Si'],null, ['disabled'=>'','class' => 'form-control width-40']) !!}
                            </div>
                        </div>
                        <br>

                        <div class="form-group ">
                            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nombre del Estudio O T&iacute;tulo Obtenido:</label>
                            <div >
                                            <span class="block input-icon input-icon-right">
                                                {!! Form::text('edu_sup_estudios_titulos_obtenidos_5',null,['disabled'=>'','class' => 'width-40']) !!}
                                            </span>
                            </div>
                        </div>
                        <br>

                        <div class="form-group ">
                            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha de Terminacion:</label>
                            <div >
                                            <span class="block input-icon input-icon-right">
                                                {!! Form::date('edu_sup_fecha_terminacion_5',null,['disabled'=>'','class' => 'width-40']) !!}
                                            </span>
                            </div>
                        </div>
                        <br>

                        <div class="form-group ">
                            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">N&uacute;mero de Tarjeta Profesional:</label>
                            <div >
                                            <span class="block input-icon input-icon-right">
                                                {!! Form::text('edu_sup_num_tarjeta_profesional_5',null,['disabled'=>'','class' => 'width-40', 'onkeypress' => 'return justNumbers(event);']) !!}
                                            </span>
                            </div>
                        </div>
                        <br>

                        <h3 class="lighter block green">Idiomas:</h3>
                        <div class="form-group ">
                            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Primer Idioma:</label>
                            <div >
                                            <span class="block input-icon input-icon-right">
                                                {!! Form::text('idioma_1',null,['disabled'=>'','class' => 'width-40']) !!}
                                            </span>
                            </div>
                        </div>
                        <br>

                        <div class="form-group ">
                            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nivel de Habla:</label>
                            <div >
                                {!! Form::select('idioma_1_habla',['' => 'Seleccione una Opcion','Regular' => 'Regular','Bien' => 'Bien','Muy Bien' =>'Muy Bien'],null, ['disabled'=>'','class' => 'form-control width-40']) !!}
                            </div>
                        </div>
                        <br>

                        <div class="form-group ">
                            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nivel de Lectura:</label>
                            <div >
                                {!! Form::select('idioma_1_lee',['' => 'Seleccione una Opcion','Regular' => 'Regular','Bien' => 'Bien','Muy Bien' =>'Muy Bien'],null, ['disabled'=>'','class' => 'form-control width-40']) !!}
                            </div>
                        </div>
                        <br>

                        <div class="form-group ">
                            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nivel de Escritura:</label>
                            <div >
                                {!! Form::select('idioma_1_escribe',['' => 'Seleccione una Opcion','Regular' => 'Regular','Bien' => 'Bien','Muy Bien' =>'Muy Bien'],null, ['disabled'=>'','class' => 'form-control width-40']) !!}
                            </div>
                        </div>
                        <br>

                        <div>
                            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Segundo Idioma:</label>
                            <div >
                                            <span class="block input-icon input-icon-right">
                                                {!! Form::text('idioma_2',null,['disabled'=>'','class' => 'width-40']) !!}
                                            </span>
                            </div>
                        </div>

                        <br>
                        <div class="form-group ">
                            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nivel de Habla:</label>
                            <div >
                                {!! Form::select('idioma_2_habla',['' => 'Seleccione una Opcion','Regular' => 'Regular','Bien' => 'Bien','Muy Bien' =>'Muy Bien'],null, ['disabled'=>'','class' => 'form-control width-40']) !!}
                            </div>
                        </div>
                        <br>

                        <div class="form-group ">
                            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nivel de Lectura:</label>
                            <div >
                                {!! Form::select('idioma_2_lee',['' => 'Seleccione una Opcion','Regular' => 'Regular','Bien' => 'Bien','Muy Bien' =>'Muy Bien'],null, ['disabled'=>'','class' => 'form-control width-40']) !!}
                            </div>
                        </div>
                        <br>

                        <div class="form-group ">
                            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nivel de Escritura:</label>
                            <div >
                                {!! Form::select('idioma_2_escribe',['' => 'Seleccione una Opcion','Regular' => 'Regular','Bien' => 'Bien','Muy Bien' =>'Muy Bien'],null, ['disabled'=>'','class' => 'form-control width-40']) !!}
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>

</fieldset>




<h3>Experiencia Laboral </h3>

<fieldset>

    <h3 class="lighter block green">Empleo o Contrato Vigente:</h3>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Empresa o Entidad:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_actual_nombre',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="empresaActualTipoEntidad" class="col-xs-12 col-sm-3 control-label no-padding-right">Tipo de Entidad (publica, privada):</label>
        <div >
            {!! Form::select('empresa_actual_tipo_entidad',['' => 'Seleccione una Opcion','Publica'=>'Publica','Privada' => 'Privada'], null , ['disabled'=>'','class' => 'width-40']) !!}
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Pais:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_actual_pais',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Departamento:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_actual_departamento',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Municipio:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_actual_municipio',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Correo:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::email('empresa_actual_correo',null,['disabled'=>'','class' => 'email width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Telefono:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_actual_telefono',null,['disabled'=>'','class' => 'number width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha Ingreso:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::date('empresa_actual_fecha_ingreso',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha Retiro:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::date('empresa_actual_fecha_retiro',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Cargo:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_actual_cargo',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Dependencia:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_actual_dependencia',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Direcci&oacute;n:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_actual_direccion',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <br>
    <h3 class="lighter block green">Empleo o Contrato Anterior 1:</h3>
    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Empresa o Entidad:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_anterior_nombre',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="empresaAnteriorTipoEntidad" class="col-xs-12 col-sm-3 control-label no-padding-right">Tipo de Entidad (publica, privada):</label>
        <div >
            {!! Form::select('empresa_anterior_tipo_entidad',['' => 'Seleccione una Opcion','Publica'=>'Publica','Privada' => 'Privada'], null , ['disabled'=>'','class' => 'width-40']) !!}
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Pais:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_anterior_pais',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Departamento:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_anterior_departamento',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Municipio:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_anterior_municipio',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Correo:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::email('empresa_anterior_correo',null,['disabled'=>'','class' => 'email width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Telefono:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_anterior_telefono',null,['disabled'=>'','class' => 'number width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha Ingreso:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::date('empresa_anterior_fecha_ingreso',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha Retiro:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::date('empresa_anterior_fecha_retiro',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Cargo:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_anterior_cargo',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Dependencia:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_anterior_dependencia',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Direcci&oacute;n:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_anterior_direccion',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <hr>


    <h3 class="lighter block green">Empleo o Contrato Anterior 2:</h3>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Empresa o Entidad:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_otra_nombre',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="empresaOtraTipoEntidad" class="col-xs-12 col-sm-3 control-label no-padding-right">Tipo de Entidad (publica, privada):</label>
        <div >
            {!! Form::select('empresa_otra_tipo_entidad',['' => 'Seleccione una Opcion','Publica'=>'Publica','Privada' => 'Privada'], null , ['disabled'=>'','class' => 'width-40']) !!}
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Pais:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_otra_pais',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Departamento:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_otra_departamento',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Municipio:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_otra_municipio',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Correo:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::email('empresa_otra_correo',null,['disabled'=>'','class' => 'email width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Telefono:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_otra_telefono',null,['disabled'=>'','class' => 'number width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha Ingreso:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::date('empresa_otra_fecha_ingreso',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha Retiro:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::date('empresa_otra_fecha_retiro',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Cargo:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_otra_cargo',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Dependencia:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_otra_dependencia',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Direcci&oacute;n:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_otra_direccion',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>

    <br>

    <h3 class="lighter block green">Empleo o Contrato Anterior 3:</h3>
    <br>
    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Empresa o Entidad:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_otra2_nombre',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="empresaOtra2TipoEntidad" class="col-xs-12 col-sm-3 control-label no-padding-right">Tipo de Entidad (publica, privada):</label>
        <div >
            {!! Form::select('empresa_otra2_tipo_entidad',['' => 'Seleccione una Opcion','Publica'=>'Publica','Privada' => 'Privada'], null , ['disabled'=>'','class' => 'width-40']) !!}
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Pais:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_otra2_pais',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Departamento:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_otra2_departamento',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Municipio:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_otra2_municipio',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Correo:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::email('empresa_otra2_correo',null,['disabled'=>'','class' => 'email width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Telefono:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_otra2_telefono',null,['disabled'=>'','class' => 'number width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha Ingreso:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::date('empresa_otra2_fecha_ingreso',null,['disabled'=>'','class' => 'width-40']) !!}	                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha Retiro:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::date('empresa_otra2_fecha_retiro',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Cargo:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_otra2_cargo',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Dependencia:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_otra2_dependencia',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>
    <br>

    <div class="form-group ">
        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Direcci&oacute;n:</label>
        <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresa_otra2_direccion',null,['disabled'=>'','class' => 'width-40']) !!}
                        </span>
        </div>
    </div>

</fieldset>


<h3>Tiempo Total Experiencia</h3>
<fieldset>

    <div>
        <div class="form-group ">
            <label for="inputWarning" class="col-xs-12 col-sm-3 ">Experiencia En El Sector Publico:</label>
            <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">A&ntilde;os:</label>
            <div>
                            <span class="block input-icon input-icon-right">
                                {!! Form::text('experiencia_sector_publico_anos',null,['disabled'=>'','class' => 'required number width-40']) !!}
                            </span>
            </div>

            <label for="experiencia_sector_publico_meses" class="col-xs-12 col-sm-3 control-label no-padding-right">Meses:</label>
            <div class="form-group">
                {!! Form::text('experiencia_sector_publico_meses',null,['disabled'=>'','class' => 'required number width-40']) !!}
            </div>
        </div>
        <br>

        <div class="form-group ">
            <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Experiencia En El Sector Privado:</label>
            <label for="experiencia_sector_privado_anos" class="col-xs-12 col-sm-3 control-label no-padding-right">A&ntilde;os:</label>
            <div >
                            <span class="block input-icon input-icon-right">
                                {!! Form::text('experiencia_sector_privado_anos',null,['disabled'=>'','class' => 'required number width-40']) !!}
                            </span>
            </div>
            <label for="experiencia_sector_privado_meses" class="col-xs-12 col-sm-3 control-label no-padding-right">Meses:</label>
            <div >
                            <span class="block input-icon input-icon-right">
                                {!! Form::text('experiencia_sector_privado_meses',null,['disabled'=>'','class' => 'required number width-40']) !!}
                            </span>
            </div>
        </div>
        <br>


        <div class="form-group ">
            <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Experiencia Trabajador Independiente:</label>

            <label for="experiencia_independiente_anos" class="col-xs-12 col-sm-3 control-label no-padding-right">A&ntilde;os:</label>
            <div >
                            <span class="block input-icon input-icon-right">
                                {!! Form::text('experiencia_independiente_anos',null,['disabled'=>'','class' => 'required number width-40']) !!}
                            </span>
            </div>
            <label for="experiencia_independiente_meses" class="col-xs-12 col-sm-3 control-label no-padding-right">Meses:</label>
            <div>
                            <span class="block input-icon input-icon-right">
                                {!! Form::text('experiencia_independiente_meses',null,['disabled'=>'','class' => 'required number width-40']) !!}
                            </span>
            </div>
        </div>
        <br>


        <div class="form-group ">
            <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Experiencia <br> Total:</label>

            <label for="experiencia_total_anos" class="col-xs-12 col-sm-3 control-label no-padding-right">A&ntilde;os:</label>
            <div >
                            <span class="block input-icon input-icon-right">
                                {!! Form::text('experiencia_total_anos',null,['disabled'=>'','class' => 'required number width-40']) !!}
                            </span>
            </div>
            <label for="experiencia_total_meses" class="col-xs-12 col-sm-3 control-label no-padding-right">Meses:</label>
            <div>
                            <span class="block input-icon input-icon-right">
                                {!! Form::text('experiencia_total_meses',null,['disabled'=>'','class' => 'required number width-40']) !!}
                            </span>
            </div>
        </div>
        <br>




    </div>


</fieldset>




<h3>Observaciones</h3>
<fieldset>

    <div class="form-group ">
        <label for="inputError" class="col-xs-12 col-sm-3 control-label no-padding-right">Observaci&oacute;nes Contratista:</label>
        <div  >
            {!! Form::textarea('observaciones_recurso_humano',null,['disabled'=>'','class' => 'width-40']) !!}
        </div>
        <br>
        <br>
    </div>

</fieldset>


<h3>Final</h3>
<fieldset>
    <div class="center">
        <h3 class="green">Final!</h3>
        Aqui Terminan los datos. =)
        <br>
    </div>

</fieldset>