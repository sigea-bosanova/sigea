@extends('docente.menu')
@section('contenido')


    <h4 class="lighter">
        <a href="#modal-wizard" data-toggle="modal" class="pink"> &nbsp;&nbsp;&nbsp;Consulta de un Estudiante </a>
    </h4>

    <div class="hr hr-18 hr-double dotted"></div>


    @if(isset($mensaje))

        @if ($mensaje=="ok")

        @endif

        @if ($mensaje=="vacio")
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                </button>
                <strong>Estudiante no encontrado.</strong><br><br>
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
    <div>
        <div class="col-lg-1"></div>
        <div class="widget-box col-lg-10">
            <div class="widget-header widget-header-blue widget-header-flat">
                <h1 class="header smaller lighter blue"> Consulta:</h1>


                <div class="widget-body">
                    <div class="widget-main">
                        <!-- #section:plugins/fuelux.wizard -->
                        <div id="fuelux-wizard-container">
                            <div>
                                <!-- #section:plugins/fuelux.wizard.steps -->


                                <!-- /section:plugins/fuelux.wizard.steps -->
                            </div>

                            <hr />

                            <!-- #section:plugins/fuelux.wizard.container -->
                            <div class="step-content pos-rel">
                               @if(isset($estudiante))

                                <div class="hr hr-18 hr-double dotted"></div>
                                <!-- /section:elements.form.input-state -->

                                <div class="form-group has-warning">
                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Nombre del Estudiante:</label>

                                    <div >
																	<span class="block input-icon input-icon-right">
																	{{$estudiante->nombre}}

																	</span>
                                    </div>

                                </div>
                                <br>
                                <div class="form-group has-warning">
                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Primer Apellido del Estudiante:</label>

                                    <div >
																	<span class="block input-icon input-icon-right">
																		{{$estudiante->primer_apellido}}

																	</span>
                                    </div>

                                </div>
                                <br>
                                <div class="form-group has-warning">
                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Segundo Apellido  del Estudiante:</label>

                                    <div >
																	<span class="block input-icon input-icon-right">
																		{{$estudiante->segundo_apellido}}
																	</span>
                                    </div>

                                </div>
                                <br>
                                <div class="form-group has-warning">
                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha de Nacimiento del Estudiante:</label>

                                    <div >
																	<span class="block input-icon input-icon-right">
																		{{$estudiante->fecha_nacimiento}}
																	</span>
                                    </div>

                                </div>
                                <br>
                                <div class="form-group has-warning">
                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Grado:</label>

                                    <div >
																	<span class="block input-icon input-icon-right">
                                                                        {{$estudiante->grado_id}}

																	</span>
                                    </div>

                                </div>
                                <br>
                                <div class="form-group has-warning">
                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Curso:</label>

                                    <div >
																	<span class="block input-icon input-icon-right">
                                                                        {{$estudiante->curso_id}}
																	</span>
                                    </div>

                                </div>
                                <br>

                                <div class="form-group has-warning">
                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Jornada:</label>

                                    <div >
																	<span class="block input-icon input-icon-right">
																		{{$estudiante->jornada}}
																	</span>
                                    </div>

                                </div>
                                <br>
                                <div class="form-group has-warning">
                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Antiguo:</label>

                                    <div >
																	<span class="block input-icon input-icon-right">
																		{{$estudiante->antiguo}}
																	</span>
                                    </div>

                                </div>
                                <br>
                                <div class="form-group has-warning">
                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Estrato:</label>

                                    <div >
																	<span class="block input-icon input-icon-right">
																		{{$estudiante->estrato}}
																	</span>
                                    </div>

                                </div>
                                <br>
                                <div class="form-group has-warning">
                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Genero:</label>

                                    <div >
																	<span class="block input-icon input-icon-right">
																		{{$estudiante->genero}}
																	</span>
                                    </div>

                                </div>
                                <br>
                                <div class="form-group has-warning">
                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">EPS:</label>

                                    <div >
																	<span class="block input-icon input-icon-right">
																		{{$estudiante->eps}}
																	</span>
                                    </div>

                                </div>
                                <br>
                                <div class="form-group has-warning">
                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Etnia:</label>

                                    <div >
																	<span class="block input-icon input-icon-right">
																		{{$estudiante->etnia}}
																	</span>
                                    </div>

                                </div>
                                <br>
                                <div class="form-group has-warning">
                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Telefono Fijo:</label>

                                    <div >
																	<span class="block input-icon input-icon-right">
																		{{$estudiante->telefono}}
																	</span>
                                    </div>

                                </div>
                                <br>
                                <div class="form-group has-warning">
                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Celular:</label>

                                    <div >
																	<span class="block input-icon input-icon-right">
																		{{$estudiante->celular}}
																	</span>
                                    </div>

                                </div>
                                <br>
                                <div class="form-group has-warning">
                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Direcci&oacute;n:</label>

                                    <div >
																	<span class="block input-icon input-icon-right">
																		{{$estudiante->direccion}}
																	</span>
                                    </div>

                                </div>
                                <br>
                                <div class="form-group has-warning">
                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Barrio:</label>

                                    <div >
																	<span class="block input-icon input-icon-right">
																		{{$estudiante->barrio}}
																	</span>
                                    </div>

                                </div>
                                <br>
                                <div class="form-group has-warning">
                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Correo:</label>

                                    <div >
																	<span class="block input-icon input-icon-right">
																		{{$estudiante->email}}
																	</span>
                                    </div>

                                </div>
                                <br>
                            </div>
                            @else

                            <div class="step-pane active" data-step="1">

                                <div>
                                    {!! Form::open(['url'=>'docente/consultar-estudiante', 'method'=>'post',]) !!}
                                            <!--  <form class="form-horizontal" id="sample-form"> -->
                                    <!-- #section:elements.form.input-state -->
                                    <div class="form-group has-warning">
                                        <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Id del Estudiante:</label>

                                        <div >
																	<span class="block input-icon input-icon-right">
										{!! Form::text('id',null,['class' => 'width-40', 'onkeypress' => 'return justNumbers(event);']) !!}
																	</span>
                                        </div>

                                    </div>
                                    <br>

                                    <div class="col-xs-6 ">
                                        <button class="btn btn-app btn-grey width-25 height-25 pull-right btn btn-sm  ">
                                            <i class="ace-icon fa fa-share "></i>

                                            Buscar

                                        </button>
                                    </div>
                                    <br>
                                    <br>
                                </div>


                                {!! Form::close() !!}
                            </div>
                           @endif

                        </div>



                    </div>

                    <!-- /section:plugins/fuelux.wizard.container -->
                </div>

                <hr />


                <!-- /section:plugins/fuelux.wizard -->
            </div><!-- /.widget-main -->
        </div><!-- /.widget-body -->
    </div>
    </div>
    </div>

@endsection