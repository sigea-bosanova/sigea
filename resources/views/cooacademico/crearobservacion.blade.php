@extends('admin.base')
@section('contenido')


    <h4 class="lighter">
        <a href="#modal-wizard" data-toggle="modal" class="pink"> &nbsp;&nbsp;&nbsp;Registro de una observaci&oacute;n </a>
    </h4>

    <div class="hr hr-18 hr-double dotted"></div>


    @if(isset($mensaje))

        @if ($mensaje=="ok")
            <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                </button>
                <strong>Observaci&oacute;n agregada con exito!</strong><br><br>
            </div>
        @endif

        @if ($mensaje=="error")
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

    <div class="widget-box">
        <div class="widget-header widget-header-blue widget-header-flat">
            <h4 class="widget-title lighter">Nueva observaci&oacute;n</h4>


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
                        <div class="step-pane active" data-step="1">
                            <br>
                            <br>
                            {!! Form::open(['url'=>'xxx', 'method'=>'post',]) !!}
                          <!--  <form class="form-horizontal" id="sample-form"> -->
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

                                <!-- /section:elements.form.input-state -->
                                <div class="form-group has-warning">
                                    <label for="inputError" class="col-xs-12 col-sm-3 control-label no-padding-right">Observaci&oacute;n:</label>

                                    <div >

                                            <div  >
                                                {!! Form::textarea('descripcion',null,['class' => 'width-40']) !!}
                                            </div>
                                                  <div class="col-xs-6 ">
                                                         <button class="btn btn-app btn-grey width-25 height-25 pull-right btn btn-sm  ">
                                                             <i class="ace-icon fa fa-floppy-o "></i>

                                                             Guardar
											                <span class="badge badge-transparent">
												                <i class="light-red ace-icon fa fa-asterisk"></i>
											                </span>
                                                        </button>
                                                    </div>
                                        <br>
                                        <br>
                                        </div>

                                    </div>
                                </div>
                            {!! Form::close() !!}
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


@endsection