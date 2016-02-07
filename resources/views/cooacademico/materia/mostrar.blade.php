    @extends('cooacademico.menu')

    @section('contenido')

        <h2 class="header smaller lighter blue">Mostrando datos: </h2><br>

        <div class="col-md-1"></div>
        <div class="col-md-10">
            @if(!isset($materia))
                <div class="alert alert-danger"> Error. Registro no encontrado.</div>
            @endif


    @if(isset($materia))


            @if(isset($error))
                <div class="alert alert-danger"> {{ $error }}</div>
            @endif

            {{ Html::ul($errors->all()) }}




            {!! Form::open(['id' => 'formulario']) !!}

            <div class="widget-box">
                <div class="widget-header widget-header-small">
                    <h5 class="widget-title lighter">Informacion de la materia. </h5>
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

                                    {!! Form::text('nombre', $materia->nombre , ['disabled' =>'','class' => ' form-control ']) !!}

                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <div class="input-group">
											<span class="input-group-addon">
												<i class="ace-icon fa fa-send-o"></i> Grado:
											</span>

                                    {!! Form::select('grado_id', $grados, $materia->grado->id, ['disabled' =>'','class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6">
                                <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="ace-icon fa fa-book"></i> Logro Primer Periodo:
                                </span>

                                    {!! Form::textarea('logro1', $materia->logro1 , ['disabled' =>'','class' => ' form-control ']) !!}

                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="ace-icon fa fa-book"></i> Logro Segundo Periodo:
                                </span>

                                    {!! Form::textarea('logro2', $materia->logro2, ['disabled' =>'','class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6">
                                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="ace-icon fa fa-book"></i> Logro Tercer Periodo:
                    </span>

                                    {!! Form::textarea('logro3', $materia->logro3 , ['disabled' =>'','class' => ' form-control ']) !!}

                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="ace-icon fa fa-book"></i> Logro Cuarto Periodo:
                    </span>

                                    {!! Form::textarea('logro4', $materia->logro4, ['disabled' =>'','class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6">
                                <div class="input-group">
            <span class="input-group-addon">
                <i class="ace-icon fa fa-book"></i> Logro Final:
            </span>

                                    {!! Form::textarea('logro_final', $materia->logro_final , ['disabled' =>'','class' => ' form-control ']) !!}

                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6">
                                <br><br><br><br>
                                <a href=" {{ route('coordinador-academico.materia.index') }}" class="btn btn-lg btn-purple form-control">
                                    <span class="ace-icon fa fa-floppy-o icon-on-right bigger-150"></span>
                                    Ok
                                </a>
                            </div>
                        </div><br>

                    </div>
                </div>
            </div>

            {!! Form::close() !!}



        </div>
@endif

    @stop






