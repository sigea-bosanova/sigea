@extends('coodisciplina.menu')

@section('contenido')
    <div class="container col-xs-1"></div>
    <div class="container col-lg-10">


        <div class="row">
            <div class="col-xs-11">
                @if(!isset($estudiante))
                <h3 class="header smaller lighter blue">Busqueda de Observaciones de Estudiantes</h3>
                @endif

                    @if(isset($estudiante))
                        <h3 class="header smaller lighter blue"> Observaciones de {{$estudiante->nombre}}</h3>
                    @endif

                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif





                {!!   Form::open(['route' => 'observaciones.buscar']) !!}

                <div class="widget-box">
                    <div class="widget-header widget-header-small">
                        <h5 class="widget-title lighter">Busqueda por Numero de  Identificacion: </h5>
                    </div>
                    <br>
                    <div class="widget-body">
                        <div class="widget-main">
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
                     @if(isset($observaciones))
                                @if(empty($observaciones))
                                    <div class="alert alert-info"> El estudiante no tiene observaciones.</div>
                                @endif
                                        <div>
                                            <div>
                                                <div class="alert alert-info">


                                                    <strong><div>
                                                            <?php  $i=1; ?>
                                                            @foreach($observaciones as $observacion)
                                                                <span class="label label-grey">
						                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                    <?php $fecha = Carbon\Carbon::parse($observacion->created_at) ?>
                                                                    {{ $fecha->toDateString()   }}
                                                                    </span>


                                                                &nbsp;&nbsp; {{  $observacion->descripcion }} <br><br><br>
                                                                <?php  $i++; ?>
                                                            @endforeach
                                                        </div></strong><br>
                                                </div>
                                            </div>


                                        </div>
                        </div>

                    </div>
                    <br>
                </div>
              <div class="row"><br></div>


              @endif


                   @if(isset($mensaje))
                    @if($mensaje =='error')
                    <div class="alert alert-danger"> El estudiante no  registrado en la base de datos.</div>
                    @endif
                   @endif



            </div>
         </div>
    </div>
@stop