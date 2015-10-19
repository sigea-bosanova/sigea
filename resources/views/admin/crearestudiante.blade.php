@extends('admin.base')
@section('contenido')

    <h4 class="lighter">
        <a href="#modal-wizard" data-toggle="modal" class="pink"> &nbsp;&nbsp;&nbsp;Registro de un estudiante</a>
    </h4>

    <div class="hr hr-18 hr-double dotted"></div>
    @if(isset($mensaje))

        @if ($mensaje=="ok")
            <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                </button>
                <strong>Registro agregado con exito!</strong><br><br>
            </div>
        @endif

        @if ($mensaje=="error")
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                </button>
                <strong>Error en el registro.</strong><br><br>
            </div>
        @endif

    @endif
    <script>
        function justNumbers(e)
        {
            var keynum = window.event ? window.event.keyCode : e.which;
            if ((keynum == 8) || (keynum == 46))
                return true;

            return /\d/.test(String.fromCharCode(keynum));
        }


        function validacion(f){
            var txt_Usuario = f.txt_Usuario.value;
            var txt_Clave = f.txt_Clave.value;
            if(txt_Usuario==''){
                alert('No deje el usuario vacio');
                return false;
            }else
            if(txt_Clave =='')
            {
                alert('No deje la contraseña vacia');
                return false;
            }
            else {
                f.submit();
            }
        }
    </script>
<?php
$grados=array(1,2,3);
$cursos=array(1,2,3);
?>

    <div class="widget-box">
        <div class="widget-header widget-header-blue widget-header-flat">
            <h4 class="widget-title lighter">Nuevo estudiante</h4>


        </div>

        <div class="widget-body">
            <div class="widget-main">
                <!-- #section:plugins/fuelux.wizard -->
                <div id="fuelux-wizard-container">
                    <div>
                        <!-- #section:plugins/fuelux.wizard.steps -->
                        <ul class="steps">
                            <li data-step="1" class="active">
                                <span class="step">1</span>
                                <span class="title">Datos del Estudiante</span>
                            </li>

                            <li data-step="2">
                                <span class="step">2</span>
                                <span class="title">Primer Acudiente</span>
                            </li>

                            <li data-step="3">
                                <span class="step">3</span>
                                <span class="title">Segundo Acudiente</span>
                            </li>

                            <li data-step="4">
                                <span class="step">4</span>
                                <span class="title">Tercer Acudiente</span>
                            </li>
                        </ul>

                        <!-- /section:plugins/fuelux.wizard.steps -->
                    </div>

                    <hr />

                    <!-- #section:plugins/fuelux.wizard.container -->
                    <div class="step-content pos-rel">
                        <div class="step-pane active" data-step="1">

                            {!! Form::open(['url'=>'xxx', 'method'=>'post',]) !!}

                                <!-- #section:elements.form.input-state -->
                            <div class="form-group has-warning">
                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Id del Estudiante:</label>

                                <div >
																	<span class="block input-icon input-icon-right">
																		{!! Form::text('idEstudiante',null,['class' => 'width-40', 'onkeypress' => 'return justNumbers(event);']) !!}
																	</span>
                                </div>

                            </div>
                            <br>
                            <div class="form-group has-warning">
                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Nombre del Estudiante:</label>

                                <div >
																	<span class="block input-icon input-icon-right">
																		{!! Form::text('nombreEstudiante',null,['class' => 'width-40']) !!}
																	</span>
                                </div>

                            </div>
                            <br>
                            <div class="form-group has-warning">
                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Primer Apellido del Estudiante:</label>

                                <div >
																	<span class="block input-icon input-icon-right">
																		{!! Form::text('primerApellidoEstudiante',null,['class' => 'width-40']) !!}
																	</span>
                                </div>

                            </div>
                            <br>
                            <div class="form-group has-warning">
                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Segundo Apellido  del Estudiante:</label>

                                <div >
																	<span class="block input-icon input-icon-right">
																		{!! Form::text('SegundoApellidoEstudiante',null,['class' => 'width-40']) !!}
																	</span>
                                </div>

                            </div>
                            <br>
                            <div class="form-group has-warning">
                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha de Nacimiento del Estudiante:</label>

                                <div >
																	<span class="block input-icon input-icon-right">
																		{!! Form::date('fechaNacimientoEstudiante',null,['class' => 'width-40', 'onkeypress' => 'return justNumbers(event);']) !!}
																	</span>
                                </div>

                            </div>
                            <br>
                            <div class="form-group has-warning">
                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Grado:</label>

                                <div >
																	<span class="block input-icon input-icon-right">
																		{!! Form::select('grados',$grados,['class' => 'width-40']) !!}
																	</span>
                                </div>

                            </div>
                            <br>
                            <div class="form-group has-warning">
                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Curso:</label>

                                <div >
																	<span class="block input-icon input-icon-right">
																		{!! Form::select('cursos',$cursos,['class' => 'width-40']) !!}
																	</span>
                                </div>

                            </div>
                            <br>

                            <div class="form-group has-warning">
                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Jornada:</label>

                                <div >
																	<span class="block input-icon input-icon-right">
																		{!! Form::radio('jornada', 'Mañana') !!}<label for="inputWarning" class=" control-label no-padding-right">Ma&ntilde;ana</label>&nbsp;&nbsp;&nbsp;
                                                                        {!! Form::radio('jornada', 'Tarde') !!}<label for="inputWarning" class="    control-label no-padding-right">Tarde</label>
																	</span>
                                </div>

                            </div>
                            <br>
                            <div class="form-group has-warning">
                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Antiguo:</label>

                                <div >
																	<span class="block input-icon input-icon-right">
																		{!! Form::radio('antiguo', 'Si') !!}<label for="inputWarning" class=" control-label no-padding-right">Si</label>&nbsp;&nbsp;&nbsp;
                                                                        {!! Form::radio('antiguo', 'No') !!}<label for="inputWarning" class=" control-label no-padding-right">No</label>
																	</span>
                                </div>

                            </div>
                            <br>
                            <div class="form-group has-warning">
                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Estrato:</label>

                                <div >
																	<span class="block input-icon input-icon-right">
																		{!!   Form::radio('estrato', '0') !!}<label for="inputWarning" class=" control-label no-padding-right">0</label>&nbsp;&nbsp;&nbsp;
                                                                        {!! Form::radio('estrato', '1') !!}<label for="inputWarning" class=" control-label no-padding-right">1</label>&nbsp;&nbsp;&nbsp;
                                                                        {!! Form::radio('estrato', '2') !!}<label for="inputWarning" class=" control-label no-padding-right">2</label>&nbsp;&nbsp;&nbsp;
                                                                        {!! Form::radio('estrato', '3') !!}<label for="inputWarning" class=" control-label no-padding-right">3</label>&nbsp;&nbsp;&nbsp;
                                                                        {!! Form::radio('estrato', '4') !!}<label for="inputWarning" class=" control-label no-padding-right">4</label>&nbsp;&nbsp;&nbsp;
                                                                        {!! Form::radio('estrato', '5') !!}<label for="inputWarning" class=" control-label no-padding-right">5</label>&nbsp;&nbsp;&nbsp;
                                                                        {!! Form::radio('estrato', '6') !!}<label for="inputWarning" class=" control-label no-padding-right">6</label>
																	</span>
                                </div>

                            </div>
                            <br>
                            <div class="form-group has-warning">
                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Genero:</label>

                                <div >
																	<span class="block input-icon input-icon-right">
																		{!!  Form::radio('genero', 'Femenino') !!}<label for="inputWarning" class=" control-label no-padding-right">Femenino</label>&nbsp;&nbsp;&nbsp;
                                                                        {!!  Form::radio('genero', 'Masculino')!!}<label for="inputWarning" class=" control-label no-padding-right">Masculino</label>
																	</span>
                                </div>

                            </div>
                            <br>
                            <div class="form-group has-warning">
                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">EPS:</label>

                                <div >
																	<span class="block input-icon input-icon-right">
																		{!! Form::text('epsEstudiante',null,['class' => 'width-40']) !!}
																	</span>
                                </div>

                            </div>
                            <br>
                            <div class="form-group has-warning">
                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Etnia:</label>

                                <div >
																	<span class="block input-icon input-icon-right">
																		{!! Form::text('etniaEstudiante',null,['class' => 'width-40']) !!}
																	</span>
                                </div>

                            </div>
                            <br>
                            <div class="form-group has-warning">
                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Telefono Fijo:</label>

                                <div >
																	<span class="block input-icon input-icon-right">
																		{!! Form::text('telefonoFijoEstudiante',null,['class' => 'width-40', 'onkeypress' => 'return justNumbers(event);']) !!}
																	</span>
                                </div>

                            </div>
                            <br>
                            <div class="form-group has-warning">
                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Celular:</label>

                                <div >
																	<span class="block input-icon input-icon-right">
																		{!! Form::text('celularEstudiante',null,['class' => 'width-40', 'onkeypress' => 'return justNumbers(event);']) !!}
																	</span>
                                </div>

                            </div>
                            <br>
                            <div class="form-group has-warning">
                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Direcci&oacute;n:</label>

                                <div >
																	<span class="block input-icon input-icon-right">
																		{!! Form::text('direccionEstudiantee',null,['class' => 'width-40']) !!}
																	</span>
                                </div>

                            </div>
                            <br>
                            <div class="form-group has-warning">
                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Barrio:</label>

                                <div >
																	<span class="block input-icon input-icon-right">
																		{!! Form::text('barrioEstudiante',null,['class' => 'width-40']) !!}
																	</span>
                                </div>

                            </div>
                            <br>
                            <div class="form-group has-warning">
                                <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Correo:</label>

                                <div >
																	<span class="block input-icon input-icon-right">
																		{!! Form::text('idEstudiante',null,['class' => 'width-40']) !!}
																	</span>
                                </div>

                            </div>
                            <br>
                                <!-- /section:elements.form.input-state -->

                            {!! Form::close() !!}

                        </div>

                        <div class="step-pane" data-step="2">
                            <div>
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>

                                    <strong>
                                        <i class="ace-icon fa fa-check"></i>
                                        Well done!
                                    </strong>

                                    You successfully read this important alert message.
                                    <br />
                                </div>

                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>

                                    <strong>
                                        <i class="ace-icon fa fa-times"></i>
                                        Oh snap!
                                    </strong>

                                    Change a few things up and try submitting again.
                                    <br />
                                </div>

                                <div class="alert alert-warning">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>
                                    <strong>Warning!</strong>

                                    Best check yo self, you're not looking too good.
                                    <br />
                                </div>

                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>
                                    <strong>Heads up!</strong>

                                    This alert needs your attention, but it's not super important.
                                    <br />
                                </div>
                            </div>
                        </div>

                        <div class="step-pane" data-step="3">
                            <div class="center">
                                <h3 class="blue lighter">This is step 3</h3>
                            </div>
                        </div>

                        <div class="step-pane" data-step="4">
                            <div class="center">
                                <h3 class="green">Congrats!</h3>
                                Your product is ready to ship! Click finish to continue!
                            </div>
                        </div>
                    </div>

                    <!-- /section:plugins/fuelux.wizard.container -->
                </div>

                <hr />
                <div class="wizard-actions">
                    <!-- #section:plugins/fuelux.wizard.buttons -->
                    <button class="btn btn-prev">
                        <i class="ace-icon fa fa-arrow-left"></i>
                        Prev
                    </button>

                    <button class="btn btn-success btn-next" data-last="Finish">
                        Next
                        <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                    </button>

                    <!-- /section:plugins/fuelux.wizard.buttons -->
                </div>

                <!-- /section:plugins/fuelux.wizard -->
            </div><!-- /.widget-main -->
        </div><!-- /.widget-body -->


    <div id="modal-wizard" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="modal-wizard-container">
                    <div class="modal-header">
                        <ul class="steps">
                            <li data-step="1" class="active">
                                <span class="step">1</span>
                                <span class="title">Validation states</span>
                            </li>

                            <li data-step="2">
                                <span class="step">2</span>
                                <span class="title">Alerts</span>
                            </li>

                            <li data-step="3">
                                <span class="step">3</span>
                                <span class="title">Payment Info</span>
                            </li>

                            <li data-step="4">
                                <span class="step">4</span>
                                <span class="title">Other Info</span>
                            </li>
                        </ul>
                    </div>

                    <div class="modal-body step-content">
                        <div class="step-pane active" data-step="1">
                            <div class="center">
                                <h4 class="blue">Step 1</h4>
                            </div>
                        </div>

                        <div class="step-pane" data-step="2">
                            <div class="center">
                                <h4 class="blue">Step 2</h4>
                            </div>
                        </div>

                        <div class="step-pane" data-step="3">
                            <div class="center">
                                <h4 class="blue">Step 3</h4>
                            </div>
                        </div>

                        <div class="step-pane" data-step="4">
                            <div class="center">
                                <h4 class="blue">Step 4</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer wizard-actions">
                    <button class="btn btn-sm btn-prev">
                        <i class="ace-icon fa fa-arrow-left"></i>
                        Prev
                    </button>

                    <button class="btn btn-success btn-sm btn-next" data-last="Finish">
                        Next
                        <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                    </button>

                    <button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
                        <i class="ace-icon fa fa-times"></i>
                        Cancel
                    </button>
                </div>
            </div>
        </div>
</div>
    </div>
@endsection