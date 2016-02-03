@extends('coodisciplina.menu')

@section('contenido')

    <div class="row col-xs-1"> <div></div> </div>
        <div class="row col-xs-10"> <br><br>

                <div ><h2 class="text-center text-primary green"> Modificar Observacion</h2></div>
            @if(isset($mensaje))
                @if($mensaje =='ok')
                    <div ><h2 class="alert alert-info"> Observacion modificada con Exito.</h2></div>
                @endif
            @endif



            @if(isset($estudiante))
            <div class="widget-box">
                <div class="widget-header widget-header-small">
                    <h5 class="widget-title lighter">Creando... </h5>
                </div>
                <br>
                <div class="widget-body">
                    <div class="widget-main">

                        <div class="row">
                            <div class="col-xs-6 col-sm-6">
                                <div class="input-group">
											<span class="input-group-addon">
												<i class="ace-icon fa fa-child"></i> Identificacion:
											</span>

                                    {!! Form::text('id',$estudiante->id, ['class' => ' form-control ']) !!}

                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <div class="input-group">
											<span class="input-group-addon">
												<i class="ace-icon fa fa-send-o"></i> Nombres:
											</span>

                                    {!! Form::text('nombre',$estudiante->nombre, ['class' => ' form-control ']) !!}

                                </div>
                            </div>
                        </div><br>

                        @if(!isset($observaciones))
                                <div ><h2 class="alert alert-info"> El estudiante no tiene observaciones.</h2></div>
                        @endif
                      @if(isset($observaciones))
                        @foreach($observaciones as $observacion)
                          {!! Form::open(['route' =>'observaciones.actualizar']) !!}
                        <div class="row">

                            <div class="row">
                                <div class="col-xs-1 col-sm-1"></div>

                                <div class="col-xs-8 col-sm-8">
                                    <div class="input-group">
											<span class="input-group-addon">
												<i class="ace-icon fa fa-pencil-square-o x2"></i> Observacion:
											</span>
                                        {!! Form::hidden('id_observacion',$observacion->id) !!}
                                        {!! Form::hidden('id_estudiante',$estudiante->id) !!}
                                        {!! Form::textarea('observacion', $observacion->descripcion, ['class' => ' form-control ']) !!}

                                    </div>
                                </div>

                                <div class="col-xs-2 col-sm-2"><br><br><br><br><br>
                                    <button type="submit" class="btn btn-purple form-control">
                                        <span class="ace-icon fa fa-floppy-o icon-on-right bigger-150"></span>
                                        Guardar
                                    </button>

                                </div>

                            </div><br>
                        </div><br>



                          {!! Form::close()!!}
                       @endforeach
                    @endif
                    </div>
                </div>
            </div>

            @endif
    <div class="col-xs-1"></div>
@stop