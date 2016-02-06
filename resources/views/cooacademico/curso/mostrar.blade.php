    @extends('cooacademico.menu')

    @section('contenido')

        <h2 class="header smaller lighter blue">Mostrando datos: </h2><br>

        <div class="col-md-1"></div>
        <div class="col-md-10">
            @if(!isset($curso))
                <div class="alert alert-danger"> Error. Registro no encontrado.</div>
            @endif


    @if(isset($curso))


            @if(isset($error))
                <div class="alert alert-danger"> {{ $error }}</div>
            @endif

            {{ Html::ul($errors->all()) }}




            {!! Form::open(['id' => 'formulario']) !!}

            <div class="widget-box">
                <div class="widget-header widget-header-small">
                    <h5 class="widget-title lighter">Informacion del Curso. </h5>
                </div>
                <br>
                <div class="widget-body">
                    <div class="widget-main">

                        <div class="row">
                            <div class="col-xs-6 col-sm-6">
                                <div class="input-group">
											<span class="input-group-addon">
												<i class="ace-icon fa fa-child"></i> Nombre del Curso:
											</span>

                                    {!! Form::text('nombre', $curso->nombre , ['disabled' =>'','class' => ' form-control ']) !!}

                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <div class="input-group">
											<span class="input-group-addon">
												<i class="ace-icon fa fa-send-o"></i> Grado:
											</span>

                                    {!! Form::text('intensidad_horaria', $curso->grado->nombre, ['disabled' =>'','class' => ' form-control ']) !!}

                                </div>
                            </div>
                        </div><br>

                    </div>
                </div>
            </div>

            {!! Form::close() !!}



        </div>
@endif

    @stop






