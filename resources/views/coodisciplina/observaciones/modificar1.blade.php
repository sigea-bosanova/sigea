@extends('coodisciplina.menu')

@section('contenido')

    <div class="row col-xs-1"> <div></div> </div>
        <div class="row col-xs-10"> <br><br>

                <div ><h2 class="text-center text-primary green"> Modificar Observacion</h2></div>

            @if(isset($mensaje))
                @if($mensaje =='ok')
                    <div class="alert alert-info">Observacion Modificada con Exito.</div>

                @endif

                @if($mensaje =='error')
                    <div  class="alert alert-danger "> El estudiante no esta registrado en el sistema. Verifique el numero de Identificacion.</div>
                @endif
            @endif

            <div class="widget-box">
                <div class="widget-header widget-header-small">
                    <h5 class="widget-title lighter">Ingrese el Numero de  Identificacion del estudiante: </h5>
                </div>
                <br>
                <div class="widget-body">
                    <div class="widget-main">
                       {!! Form::open(['route' => 'observaciones.buscar.modificar']) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="input-group">
											<span class="input-group-addon">
												<i class="ace-icon fa fa-check"></i>
											</span>

                                    {!! Form::text('id',null, ['placeholder' => 'No. Identificacion', 'class' => ' form-control ']) !!}
                                    <span class="input-group-btn">
												<button type="submit" class="btn btn-purple btn-sm">
                                                    <span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
                                                    Buscar
                                                </button>
											</span>
                                </div>
                            </div>
                        </div><br>
                        {!! Form::close()!!}
                    </div>
                </div>
        </div>
      </div>
    <div class="col-xs-1"></div>
@stop