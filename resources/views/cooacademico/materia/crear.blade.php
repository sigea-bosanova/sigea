    @extends('cooacademico.menu')

    @section('contenido')


        <h2 class="header smaller lighter blue">Creando Materia</h2>




        <div class="col-md-1"></div>
        <div class="col-md-10">

            @if(isset($error))
                <div class="alert alert-danger"> {{ $error }}</div>
            @endif

            @if(!isset ($error))
            {{ Html::ul($errors->all()) }}




            {!! Form::open(['id' => 'formulario', 'method' =>'post', 'route' => 'coordinador-academico.materia.store']) !!}

            <div class="widget-box">
                <div class="widget-header widget-header-small">
                    <h5 class="widget-title lighter">Ingrese la informacion necesaria... </h5>
                </div>
                <br>
                <div class="widget-body">
                    <div class="widget-main">

            <div class="row">
                <div class="col-xs-6 col-sm-6">
                    <div class="input-group">
											<span class="input-group-addon">
												<i class="ace-icon fa fa-child"></i> Nombre de la materia:
											</span>

                        {!! Form::text('nombre', null , ['class' => ' form-control ']) !!}

                    </div>
                </div>
                <div class="col-xs-6 col-sm-6">
                    <div class="input-group">
											<span class="input-group-addon">
												<i class="ace-icon fa fa-send-o"></i> Grado:
											</span>

                        {!! Form::select('grado_id', $grados, null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-xs-6 col-sm-6">
                    <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="ace-icon fa fa-book"></i> Logro Primer Periodo:
                                </span>

                        {!! Form::textarea('logro1', null , ['class' => ' form-control ']) !!}

                    </div>
                </div>
                <div class="col-xs-6 col-sm-6">
                    <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="ace-icon fa fa-book"></i> Logro Segundo Periodo:
                                </span>

                        {!! Form::textarea('logro2', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-xs-6 col-sm-6">
                    <div class="input-group">
                    <span class="input-group-addon">
                        <i class="ace-icon fa fa-book"></i> Logro Tercer Periodo:
                    </span>

                        {!! Form::textarea('logro3', null , ['class' => ' form-control ']) !!}

                    </div>
                </div>
                <div class="col-xs-6 col-sm-6">
                    <div class="input-group">
                    <span class="input-group-addon">
                        <i class="ace-icon fa fa-book"></i> Logro Cuarto Periodo:
                    </span>

                        {!! Form::textarea('logro4', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div><br>

            <div class="row">
                    <div class="col-xs-6 col-sm-6">
                        <div class="input-group">
            <span class="input-group-addon">
                <i class="ace-icon fa fa-book"></i> Logro Final:
            </span>

                            {!! Form::textarea('logro_final', null , ['class' => ' form-control ']) !!}

                        </div>
                    </div>

                     <div class="col-xs-6 col-sm-6">
                         <br><br><br><br>
                         <button type="submit" class="btn btn-lg btn-purple form-control">
                             <span class="ace-icon fa fa-floppy-o icon-on-right bigger-150"></span>
                             Guardar
                         </button>
                    </div>
            </div><br>

                    </div>
                </div>
            </div>

            {!! Form::close() !!}



        </div>
        @endif

    @stop

    @section('scripts')


        {!! Html::script('js/jquery-steps/jquery-validate-1.13.1.js') !!}
        {!! Html::script('js/jquery-steps/messages_es.js') !!}



        <script>

            var form = $("#formulario").show();

           form.validate({
                errorPlacement: function errorPlacement(error, element) { element.before(error); },
                rules: {
                    nombre:{
                      required:true
                    },
                    grado_id:{
                        required:true
                    },
                    logro1:{
                        required:true
                    },
                    logro2:{
                        required:true
                    },
                    logro3:{
                        required:true
                    },
                    logro4:{
                        required:true
                    },
                    logro_final:{
                        required:true
                    }
                }
            });
        </script>

    @stop
