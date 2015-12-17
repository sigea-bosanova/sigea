    @extends('admin.menu')

    @section('contenido')


        <h1> <p class="text-danger text-center"></p> </h1>


        <div class="col-md-1"></div>
        <div class="col-md-10">



            <style type="text/css">
                /* Adjust the height of section */
                #formulario .content {
                    min-height: 100px;
                }
                #formulario .content > .body {
                    width: 100%;
                    height: auto;
                    padding: 15px;
                    position: relative;
                }
            </style>



            {!! Form::open(['id' => 'formulario', 'method' => 'post', 'route' => 'form.wizard']) !!}

            <h3>Datos Personales</h3>

            <fieldset>



                <div class="form-group ">
                    <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Id del Empleado:</label>

                    <div >
						<span class="block input-icon input-icon-right">
					    {!! Form::text('id',null,['class' => 'required number width-40']) !!}
						</span>
                    </div>

                </div>
                <br>
                <div class="form-group ">
                    <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nombres del Empleado:</label>

                    <div >
						<span class="block input-icon input-icon-right">
						{!! Form::text('nombres',null,['class' => 'required  width-40']) !!}
						</span>
                    </div>

                </div>
                <br>
                <div class="form-group ">
                    <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Primer Apellido del Empleado:</label>

                    <div >
						<span class="block input-icon input-icon-right">
						{!! Form::text('primerApellido',null,['class' => 'required width-40']) !!}
						</span>
                    </div>

                </div>
                <br>
                <div class="form-group ">
                    <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Segundo Apellido  del Empleado:</label>

                    <div >
						<span class="block input-icon input-icon-right">
                        {!! Form::text('SegundoApellido',null,['class' => 'width-40']) !!}
						</span>
                    </div>

                </div>
                <br>

                <div class="form-group ">
                    <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha de Nacimiento del Empleado:</label>
                    <div >
						<span class="block input-icon input-icon-right">
						{!! Form::date('fechaNacimiento',null,['class' => 'required date width-40']) !!}
						</span>
                    </div>
                </div>
                <br>


                <div class="form-group ">
                    <label  class="col-xs-12 col-sm-3 ">Tipo de identificaci&oacute;n:</label>

                    <div class="radio-inline">
                        <div class="radio">
                            <label>{!! Form::radio('tipoId', 'Cedula de Ciudadania') !!}Cedula de Ciudadania</label>
                        </div>
                        <div class="radio">
                            <label>  {!! Form::radio('tipoId', 'Cedula de Extranjeria') !!}Cedula de Extranjeria</label>
                        </div>
                        <div class="radio">
                            <label>   {!! Form::radio('tipoId', 'Pasaporte') !!} Pasaporte</label>
                        </div>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label  class="col-xs-12 col-sm-3 ">Genero :</label>

                    <div class="radio-inline">
                        <div class="radio">
                            <label> {!!  Form::radio('sexo', 'Femenino') !!} Femenino</label>
                        </div>
                        <div class="radio">
                            <label>  {!!  Form::radio('sexo', 'Masculino')!!} Masculino</label>
                        </div>
                    </div>
                </div>
                <br>


                <div class="form-group ">
                    <label  class="col-xs-12 col-sm-3 ">Nacionalidad :</label>

                    <div class="radio-inline">
                        <div class="radio">
                            <label> {!! Form::radio('nacionalidad', 'Colombiano') !!} Colombiano</label>
                        </div>
                        <div class="radio">
                            <label>  {!! Form::radio('nacionalidad', 'Extranjero') !!} Extranjero</label>
                        </div>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label  class="col-xs-12 col-sm-3 ">Libreta Militar :</label>

                    <div class="radio-inline">
                        <div class="radio">
                            <label> {!! Form::radio('claseLibretaMilitar', 'Primera Clase') !!} Primera Clase</label>
                        </div>
                        <div class="radio">
                            <label> {!! Form::radio('claseLibretaMilitar', 'Segunda Clase') !!} Segunda Clase</label>
                        </div>
                    </div>
                </div>
                <br>




                <div class="form-group ">
                    <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Numero Libreta Militar:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('numeroLibretaMilitar',null,['class' => 'number width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Distrito Militar:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('distritoMilitar',null,['class' => 'number width-40']) !!}
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
                            {!! Form::text('paisNacimiento',null,['class' => 'required form-control width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Departamento:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('departamentoNacimiento',null,['class' => 'required width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Municipio:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('municipio',null,['class' => 'required width-40']) !!}
                        </span>
                    </div>
                </div>

            </fieldset>





            <h3>Formacion Academica</h3>
            <fieldset>


                <div class="form-group">
                    <label for="eduBasPrimaria" class="col-xs-12 col-sm-3 control-label">Nivel Alcanzado B&aacute;sica Primaria:</label>
                    <div class="form-input" >
                        {!! Form::select('eduBasPrimaria',['' => 'Seleccione una Opcion','Quinto' =>'Quinto' ,'Cuarto' => 'Cuarto' ,'Tercero' => 'Tercero','Segundo' => 'Segundo','Primero' =>'Primero'],null , ['class' => 'required form-control width-40']) !!}
                    </div>
                </div>
                <br>


                <div class="form-group ">
                    <label for="eduBasSecuandaria" class="col-xs-12 col-sm-3 ">Nivel Alcanzado B&aacute;sica Secundaria:</label>
                    <div >
                        {!! Form::select('eduBasSecuandaria',['' => 'Seleccione una Opcion','Noveno' => 'Noveno','Octavo' => 'Octavo','Septimo'=>'Septimo','Sexto' => 'Sexto'],null, ['class' => 'form-control width-40']) !!}
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="eduBasMedia" class="col-xs-12 col-sm-3 control-label no-padding-right">Nivel Alcanzado Educaci&oacute;n Media:</label>
                    <div >
                        {!! Form::select('eduBasMedia',['' => 'Seleccione una Opcion','Once'=> 'Once','Decimo'=>'Decimo'],null, ['class' => 'form-control width-40']) !!}
                    </div>

                </div>
                <br>

                <div class="form-group ">
                    <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">T&iacute;tulo Obtenido:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('eduBasTitulo',null,['class' => 'required required width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha de Grado:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::date('eduBasFechaGrado',null,['class' => 'required date width-40']) !!}
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
                                {!! Form::text('eduSupModalidadAcademica',null,['class' => 'width-40']) !!}
                            </span>
                        </div>
                    </div>
                    <br>

                    <div class="form-group ">
                        <label for="eduSupSemestresAprovados" class="col-xs-12 col-sm-3 control-label no-padding-right">Semestres Aprovados:</label>
                        <div >
                            <span class="block input-icon input-icon-right">
                                {!! Form::select('eduSupSemestresAprovados',['' => 'Seleccione una Opcion','1' =>'1','2' =>'2','3' => '3','4' => '4','5' =>'5','6' =>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11' =>'11','12' => '12'],null, ['class' => 'form-control width-40']) !!}
                            </span>
                        </div>
                    </div>
                    <br>

                    <div class="form-group ">
                        <label for="eduSupGraduado" class="col-xs-12 col-sm-3 control-label no-padding-right">Graduado(Si-No):</label>
                        <div >
                            <span class="block input-icon input-icon-right">
                                {!! Form::select('eduSupGraduado',['' => 'Seleccione una Opcion','No' => 'No', 'Si' => 'Si'],null, ['class' => 'form-control width-40']) !!}
                            </span>
                        </div>
                    </div>
                    <br>

                    <div class="form-group ">
                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nombre del Estudio O T&iacute;tulo Obtenido:</label>
                        <div >
                            <span class="block input-icon input-icon-right">
                                {!! Form::text('eduSupEstudioTitulo',null,['class' => 'width-40']) !!}
                            </span>
                        </div>
                    </div>
                    <br>

                    <div class="form-group ">
                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha de Terminacion:</label>
                        <div >
                            <span class="block input-icon input-icon-right">
                                {!! Form::date('edusupFechaTerminacion',null,['class' => 'width-40']) !!}
                            </span>
                        </div>
                    </div>
                    <br>

                    <div class="form-group ">
                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">N&uacute;mero de Tarjeta Profesional:</label>
                        <div >
                            <span class="block input-icon input-icon-right">
                                {!! Form::text('eduSupNumeroTarjetaProfesional',null,['class' => 'width-40']) !!}
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
                                    {!! Form::text('eduSupModalidadAcademica2',null,['class' => 'width-40']) !!}
                                </span>
                            </div>
                        </div>
                        <br>

                        <div class="form-group ">
                            <label for="eduSupSemestresAprovados2" class="col-xs-12 col-sm-3 control-label no-padding-right">Semestres Aprovados:</label>
                            <div >
                                {!! Form::select('eduSupSemestresAprovados2',['' => 'Seleccione una Opcion','1' =>'1','2' =>'2','3' => '3','4' => '4','5' =>'5','6' =>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11' =>'11','12' => '12'],null, ['class' => 'form-control width-40']) !!}
                            </div>
                        </div>
                        <br>

                        <div class="form-group ">
                            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Graduado(Si-No):</label>
                            <div >
                                <span class="block input-icon input-icon-right">
                                    {!! Form::select('eduSupGraduado2',['' => 'Seleccione una Opcion','No' => 'No', 'Si' => 'Si'],null, ['class' => 'form-control width-40']) !!}
                                </span>
                            </div>
                        </div>
                        <br>

                        <div class="form-group ">
                            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nombre del Estudio O T&iacute;tulo Obtenido:</label>
                            <div >
                                <span class="block input-icon input-icon-right">
                                    {!! Form::text('eduSupEstudioTitulo2',null,['class' => 'width-40']) !!}
                                </span>
                            </div>
                        </div>
                        <br>

                        <div class="form-group ">
                            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha de Terminacion:</label>
                            <div >
                                <span class="block input-icon input-icon-right">
                                    {!! Form::date('edusupFechaTerminacion2',null,['class' => 'width-40']) !!}
                                </span>
                            </div>
                        </div>
                        <br>

                        <div class="form-group ">
                            <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">N&uacute;mero de Tarjeta Profesional:</label>
                            <div >
                                <span class="block input-icon input-icon-right">
                                    {!! Form::text('eduSupNumeroTarjetaProfesional2',null,['class' => 'width-40', 'onkeypress' => 'return justNumbers(event);']) !!}
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
                                        {!! Form::text('eduSupModalidadAcademica3',null,['class' => 'width-40']) !!}
                                    </span>
                                </div>
                            </div>
                            <br>

                            <div class="form-group ">
                                <label for="eduSupSemestresAprovados3" class="col-xs-12 col-sm-3 control-label no-padding-right">Semestres Aprovados:</label>
                                <div >
                                    {!! Form::select('eduSupSemestresAprovados3',['' => 'Seleccione una Opcion','1' =>'1','2' =>'2','3' => '3','4' => '4','5' =>'5','6' =>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11' =>'11','12' => '12'],null, ['class' => 'form-control width-40']) !!}
                                </div>
                            </div>
                            <br>

                            <div class="form-group ">
                                <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Graduado(Si-No):</label>
                                <div >
                                    <span class="block input-icon input-icon-right">
                                        {!! Form::select('eduSupGraduado3',['' => 'Seleccione una Opcion','No' => 'No', 'Si' => 'Si'],null, ['class' => 'form-control width-40']) !!}

                                    </span>
                                </div>
                            </div>
                            <br>

                            <div class="form-group ">
                                <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nombre del Estudio O T&iacute;tulo Obtenido:</label>
                                <div >
                                    <span class="block input-icon input-icon-right">
                                        {!! Form::text('eduSupEstudioTitulo3',null,['class' => 'width-40']) !!}
                                    </span>
                                </div>
                            </div>
                            <br>

                            <div class="form-group ">
                                <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha de Terminacion:</label>
                                <div >
                                    <span class="block input-icon input-icon-right">
                                        {!! Form::date('eduSupFechaTerminacion3',null,['class' => 'width-40']) !!}
                                    </span>
                                </div>
                            </div>
                            <br>

                            <div class="form-group ">
                                <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">N&uacute;mero de Tarjeta Profesional:</label>
                                <div >
                                    <span class="block input-icon input-icon-right">
                                        {!! Form::text('eduSupNumeroTarjetaProfesional3',null,['class' => 'width-40', 'onkeypress' => 'return justNumbers(event);']) !!}
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
                                            {!! Form::text('eduSupModalidadAcademica4',null,['class' => 'width-40']) !!}
                                        </span>
                                    </div>
                                </div>
                                <br>

                                <div class="form-group ">
                                    <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Semestres Aprovados:</label>
                                    <div >
                                        {!! Form::select('eduSupSemestresAprovados4',['' => 'Seleccione una Opcion','1' =>'1','2' =>'2','3' => '3','4' => '4','5' =>'5','6' =>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11' =>'11','12' => '12'],null, ['class' => 'form-control width-40']) !!}
                                    </div>
                                </div>
                                <br>

                                <div class="form-group ">
                                    <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Graduado(Si-No):</label>
                                    <div >
                                        {!! Form::select('eduSupGraduado4',['' => 'Seleccione una Opcion','No' => 'No', 'Si' => 'Si'],null, ['class' => 'form-control width-40']) !!}
                                    </div>
                                </div>
                                <br>

                                <div class="form-group ">
                                    <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nombre del Estudio O T&iacute;tulo Obtenido:</label>
                                    <div >
                                        <span class="block input-icon input-icon-right">
                                            {!! Form::text('eduSupEstudioTitulo4',null,['class' => 'width-40']) !!}
                                        </span>
                                    </div>
                                </div>
                                <br>

                                <div class="form-group ">
                                    <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha de Terminacion:</label>
                                    <div >
                                        <span class="block input-icon input-icon-right">
                                            {!! Form::date('edusupFechaTerminacion4',null,['class' => 'width-40']) !!}
                                        </span>
                                    </div>
                                </div>
                                <br>

                                <div class="form-group ">
                                    <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">N&uacute;mero de Tarjeta Profesional:</label>
                                    <div >
                                        <span class="block input-icon input-icon-right">
                                            {!! Form::text('eduSupNumeroTarjetaProfesional4',null,['class' => 'width-40', 'onkeypress' => 'return justNumbers(event);']) !!}
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
                                                {!! Form::text('eduSupModalidadAcademica5',null,['class' => 'width-40']) !!}
                                            </span>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group ">
                                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Semestres Aprovados:</label>
                                        <div >
                                            {!! Form::select('eduSupSemestresAprovados5',['' => 'Seleccione una Opcion','1' =>'1','2' =>'2','3' => '3','4' => '4','5' =>'5','6' =>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11' =>'11','12' => '12'],null, ['class' => 'form-control width-40']) !!}
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group ">
                                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Graduado(Si-No):</label>
                                        <div >
                                            {!! Form::select('eduSupGraduado5',['' => 'Seleccione una Opcion','No' => 'No', 'Si' => 'Si'],null, ['class' => 'form-control width-40']) !!}
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group ">
                                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nombre del Estudio O T&iacute;tulo Obtenido:</label>
                                        <div >
                                            <span class="block input-icon input-icon-right">
                                                {!! Form::text('eduSupEstudioTitulo5',null,['class' => 'width-40']) !!}
                                            </span>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group ">
                                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha de Terminacion:</label>
                                        <div >
                                            <span class="block input-icon input-icon-right">
                                                {!! Form::date('edusupFechaTerminacion5',null,['class' => 'width-40']) !!}
                                            </span>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group ">
                                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">N&uacute;mero de Tarjeta Profesional:</label>
                                        <div >
                                            <span class="block input-icon input-icon-right">
                                                {!! Form::text('eduSupNumeroTarjetaProfesional5',null,['class' => 'width-40', 'onkeypress' => 'return justNumbers(event);']) !!}
                                            </span>
                                        </div>
                                    </div>
                                    <br>

                                    <h3 class="lighter block green">Idiomas:</h3>
                                    <div class="form-group ">
                                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Primer Idioma:</label>
                                        <div >
                                            <span class="block input-icon input-icon-right">
                                                {!! Form::text('idioma1',null,['class' => 'width-40']) !!}
                                            </span>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group ">
                                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nivel de Habla:</label>
                                        <div >
                                            {!! Form::select('idioma1Habla',['' => 'Seleccione una Opcion','Regular' => 'Regular','Bien' => 'Bien','Muy Bien' =>'Muy Bien'],null, ['class' => 'form-control width-40']) !!}
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group ">
                                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nivel de Lectura:</label>
                                        <div >
                                            {!! Form::select('idioma1Lee',['' => 'Seleccione una Opcion','Regular' => 'Regular','Bien' => 'Bien','Muy Bien' =>'Muy Bien'],null, ['class' => 'form-control width-40']) !!}
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group ">
                                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nivel de Escritura:</label>
                                        <div >
                                            {!! Form::select('idioma1Escribe',['' => 'Seleccione una Opcion','Regular' => 'Regular','Bien' => 'Bien','Muy Bien' =>'Muy Bien'],null, ['class' => 'form-control width-40']) !!}
                                        </div>
                                    </div>
                                    <br>

                                    <div>
                                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Segundo Idioma:</label>
                                        <div >
                                            <span class="block input-icon input-icon-right">
                                                {!! Form::text('idioma2',null,['class' => 'width-40']) !!}
                                            </span>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="form-group ">
                                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nivel de Habla:</label>
                                        <div >
                                            {!! Form::select('idioma2Habla',['' => 'Seleccione una Opcion','Regular' => 'Regular','Bien' => 'Bien','Muy Bien' =>'Muy Bien'],null, ['class' => 'form-control width-40']) !!}
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group ">
                                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nivel de Lectura:</label>
                                        <div >
                                            {!! Form::select('idioma2Lee',['' => 'Seleccione una Opcion','Regular' => 'Regular','Bien' => 'Bien','Muy Bien' =>'Muy Bien'],null, ['class' => 'form-control width-40']) !!}
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group ">
                                        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">Nivel de Escritura:</label>
                                        <div >
                                            {!! Form::select('idioma2Escribe',['' => 'Seleccione una Opcion','Regular' => 'Regular','Bien' => 'Bien','Muy Bien' =>'Muy Bien'],null, ['class' => 'form-control width-40']) !!}
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
                            {!! Form::text('empresaActualNombre',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="empresaActualTipoEntidad" class="col-xs-12 col-sm-3 control-label no-padding-right">Tipo de Entidad (publica, privada):</label>
                    <div >
                            {!! Form::select('empresaActualTipoEntidad',['' => 'Seleccione una Opcion','Publica'=>'Publica','Privada' => 'Privada'], null , ['class' => 'width-40']) !!}
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Pais:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaActualPais',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Departamento:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaActualDepartamento',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Municipio:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaActualMunicipio',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Correo:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::email('empresaActualCorreo',null,['class' => 'email width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Telefono:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaActualTelefono',null,['class' => 'number width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha Ingreso:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::date('empresaActualFechaIngreso',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha Retiro:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::date('empresaActualFechaRetiro',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Cargo:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaActualCargo',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Dependencia:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaActualDependencia',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Direcci&oacute;n:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaActualDireccion  ',null,['class' => 'width-40']) !!}
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
                            {!! Form::text('empresaAnteriorNombre',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="empresaAnteriorTipoEntidad" class="col-xs-12 col-sm-3 control-label no-padding-right">Tipo de Entidad (publica, privada):</label>
                    <div >
                        {!! Form::select('empresaAnteriorTipoEntidad',['' => 'Seleccione una Opcion','Publica'=>'Publica','Privada' => 'Privada'], null , ['class' => 'width-40']) !!}
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Pais:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaAnteriorPais',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Departamento:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaAnteriorDepartamento',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Municipio:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaAnteriorMunicipio',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Correo:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::email('empresaAnteriorCorreo',null,['class' => 'email width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Telefono:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaAnteriorTelefono',null,['class' => 'number width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha Ingreso:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::date('empresaAnteriorFechaIngreso',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha Retiro:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::date('empresaAnteriorFechaRetiro',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Cargo:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaAnteriorCargo',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Dependencia:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaAnteriorDependencia',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Direcci&oacute;n:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaAnteriorDireccion  ',null,['class' => 'width-40']) !!}
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
                            {!! Form::text('empresaOtraNombre',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="empresaOtraTipoEntidad" class="col-xs-12 col-sm-3 control-label no-padding-right">Tipo de Entidad (publica, privada):</label>
                    <div >
                        {!! Form::select('empresaOtraTipoEntidad',['' => 'Seleccione una Opcion','Publica'=>'Publica','Privada' => 'Privada'], null , ['class' => 'width-40']) !!}
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Pais:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaOtraPais',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Departamento:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaOtraDepartamento',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Municipio:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaOtraMunicipio',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Correo:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::email('empresaOtraCorreo',null,['class' => 'email width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Telefono:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaOtraTelefono',null,['class' => 'number width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha Ingreso:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::date('empresaOtraFechaIngreso',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha Retiro:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::date('empresaOtraFechaRetiro',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Cargo:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaOtraCargo',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Dependencia:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaOtraDependencia',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Direcci&oacute;n:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaOtraDireccion  ',null,['class' => 'width-40']) !!}
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
                            {!! Form::text('empresaOtra2Nombre',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="empresaOtra2TipoEntidad" class="col-xs-12 col-sm-3 control-label no-padding-right">Tipo de Entidad (publica, privada):</label>
                    <div >
                        {!! Form::select('empresaOtra2TipoEntidad',['' => 'Seleccione una Opcion','Publica'=>'Publica','Privada' => 'Privada'], null , ['class' => 'width-40']) !!}
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Pais:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaOtra2Pais',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Departamento:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaOtra2Departamento',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Municipio:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaOtra2Municipio',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Correo:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::email('empresaOtra2Correo',null,['class' => 'email width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Telefono:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaOtra2Telefono',null,['class' => 'number width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha Ingreso:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::date('empresaOtra2FechaIngreso',null,['class' => 'width-40']) !!}	                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha Retiro:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::date('empresaOtra2FechaRetiro',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Cargo:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaOtra2Cargo',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Dependencia:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaOtra2Dependencia',null,['class' => 'width-40']) !!}
                        </span>
                    </div>
                </div>
                <br>

                <div class="form-group ">
                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Direcci&oacute;n:</label>
                    <div >
                        <span class="block input-icon input-icon-right">
                            {!! Form::text('empresaOtra2Direccion  ',null,['class' => 'width-40']) !!}
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
                                {!! Form::text('experienciaSectorPublicoAnos',null,['class' => 'number width-40']) !!}
                            </span>
                        </div>

                            <label for="experienciaSectorPublicoMeses" class="col-xs-12 col-sm-3 control-label no-padding-right">Meses:</label>
                        <div class="form-group">
                            {!! Form::text('experienciaSectorPublicoMeses',null,['class' => 'number width-40']) !!}
                        </div>
                    </div>
                    <br>

                    <div class="form-group ">
                        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Experiencia En El Sector Privado:</label>
                        <label for="experienciaSectorPrivadoAnos" class="col-xs-12 col-sm-3 control-label no-padding-right">A&ntilde;os:</label>
                        <div >
                            <span class="block input-icon input-icon-right">
                                {!! Form::text('experienciaSectorPrivadoAnos',null,['class' => 'number width-40']) !!}
                            </span>
                        </div>
                        <label for="experienciaSectorPrivadoMeses" class="col-xs-12 col-sm-3 control-label no-padding-right">Meses:</label>
                        <div >
                            <span class="block input-icon input-icon-right">
                                {!! Form::text('experienciaSectorPrivadoMeses',null,['class' => 'number width-40']) !!}
                            </span>
                        </div>
                    </div>
                    <br>


                    <div class="form-group ">
                        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Experiencia Trabajador Independiente:</label>

                        <label for="experienciaIndependienteAnos" class="col-xs-12 col-sm-3 control-label no-padding-right">A&ntilde;os:</label>
                        <div >
                            <span class="block input-icon input-icon-right">
                                {!! Form::text('experienciaIndependienteAnos',null,['class' => 'number width-40']) !!}
                            </span>
                        </div>
                        <label for="experienciaIndependienteMeses" class="col-xs-12 col-sm-3 control-label no-padding-right">Meses:</label>
                        <div>
                            <span class="block input-icon input-icon-right">
                                {!! Form::text('experienciaIndependienteMeses',null,['class' => 'number width-40']) !!}
                            </span>
                        </div>
                    </div>
                    <br>


                    <div class="form-group ">
                        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Experiencia <br> Total:</label>

                        <label for="experienciaTotalAnos" class="col-xs-12 col-sm-3 control-label no-padding-right">A&ntilde;os:</label>
                        <div >
                            <span class="block input-icon input-icon-right">
                                {!! Form::text('experienciaTotalAnos',null,['class' => 'number width-40']) !!}
                            </span>
                        </div>
                        <label for="experienciaTotalMeses" class="col-xs-12 col-sm-3 control-label no-padding-right">Meses:</label>
                        <div>
                            <span class="block input-icon input-icon-right">
                                {!! Form::text('experienciaTotalMeses',null,['class' => 'number width-40']) !!}
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
                        {!! Form::textarea('observacionesRecursoHumano',null,['class' => 'width-40']) !!}
                    </div>
                    <br>
                    <br>
                </div>

            </fieldset>


            <h3>Final</h3>
            <fieldset>
                <div class="center">
                    <h3 class="green">Felicitaciones!</h3>
                    Ya diligenciaste todo  el formulario. Presiona Finalizar para guardarlo.
                </div>

            </fieldset>

            {!! Form::close() !!}


            <div class="modal fade" id="final" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Creando Secretaria</h4>
                        </div>
                        <div class="modal-body">
                            <p class="text-center">...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @stop






    @section('scripts')


        {!! Html::script('js/jquery-steps/jquery.steps.js') !!}
        {!! Html::script('js/jquery-steps/jquery-validate-1.13.1.js') !!}
        {!! Html::script('js/jquery-steps/messages_es.js') !!}






        <script>

            var form = $("#formulario").show();

            form.steps({
                headerTag: "h3",
                bodyTag: "fieldset",
                transitionEffect: "slideLeft",
                cssClass: "wizard",


                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Allways allow previous action even if the current form is not valid!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Needed in some cases if the user went back (clean up)
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        form.find(".body:eq(" + newIndex + ") label.error").remove();
                        form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
                    }
                    form.validate().settings.ignore = ":disabled,:hidden";
                    return form.valid();
                },

                
                onFinishing: function (event, currentIndex)
                {
                    form.validate().settings.ignore = ":disabled";
                    return form.valid();
                },

                onFinished: function (event, currentIndex)
                {

                    $('#final').modal();
                    form.submit();

                }
            }).validate({
                errorPlacement: function errorPlacement(error, element) { element.before(error); },
                rules: {
                    tipoId:{
                        required:true
                    },
                    sexo:{
                      required:true
                    },
                    nacionalidad:{
                        required:true
                    },
                    eduBasMedia:{
                        required:true
                    },
                    confirm: {
                        equalTo: "#password-2"
                    }
                }
            });
        </script>

    @stop
