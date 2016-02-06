    @extends('cooacademico.menu')

    @section('contenido')


        <h2 class="header smaller lighter blue">Creando Grado</h2>




        <div class="col-md-1"></div>
        <div class="col-md-10">

            @if(isset($error))
                <div class="alert alert-danger"> {{ $error }}</div>
            @endif

            {{ Html::ul($errors->all()) }}




            {!! Form::open(['id' => 'formulario', 'method' =>'post', 'route' => 'coordinador-academico.grado.store']) !!}

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
												<i class="ace-icon fa fa-child"></i> Nombre del grado:
											</span>

                        {!! Form::text('nombre', null , ['class' => ' form-control ']) !!}

                    </div>
                </div>
                <div class="col-xs-6 col-sm-6">
                    <div class="input-group">
											<span class="input-group-addon">
												<i class="ace-icon fa fa-send-o"></i> Intencidad Horaria:
											</span>

                        {!! Form::text('intensidad_horaria', null, ['class' => ' form-control ']) !!}

                    </div>
                </div>
            </div><br>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4"></div>
                                <div class="col-xs-4 col-sm-4">
                                    <button type="submit" class="btn btn-purple form-control">
                                        <span class="ace-icon fa fa-floppy-o icon-on-right bigger-150"></span>
                                        Guardar
                                    </button>
                                </div>
                            <div class="col-xs-4 col-sm-4"></div>
                        </div>
                    </div>
                </div>
            </div>

            {!! Form::close() !!}



        </div>

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
                    intensidad_horaria:{
                        required:true,
                        number : true,
                        max:990,
                        min:8
                    }
                }
            });
        </script>

    @stop
