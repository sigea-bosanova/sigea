@extends('admin.menu')

@section('contenido')
    <div class="container col-xs-1"></div>
    <div class="container col-lg-10">


        <div class="row">
            <div class="col-xs-11">
                <h3 class="header smaller lighter blue">Busqueda de Estudiantes</h3>

                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif


                {!!   Form::open(['route' => 'busqueda.por.curso']) !!}

                <div class="widget-box">
                    <div class="widget-header widget-header-small">
                        <h5 class="widget-title lighter">Busqueda por Curso:</h5>
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

                                            {!! Form::select('curso',['' => 'Seleccione el Curso','1' =>'1-A','2' =>'1-B','3' => '1-C','4' => '2-A','5' =>'2-B','6' =>'2-C','7'=>'3-A','8'=>'3-B','9'=>'3-C','10'=>'4-A','11' =>'4-B','12' => '4-C','13'=>'5-A','14' =>'5-B','15' => '5-C','16'=>'6-A','17' =>'6-B','18' => '6-C','19'=>'7-A','20' =>'7-B','21' => '7-C','22'=>'8-A','23' =>'8-B','24' => '8-C','25'=>'9-A','26'=>'9-B','27'=>'9-C','28'=>'10-A','29'=>'10-B','30'=>'10-C','31'=>'11-A','32'=>'11-B','33'=>'11-C'],null, ['class' => 'form-control ']) !!}
											<span class="input-group-btn">
												<button type="submit" class="btn btn-purple btn-sm">
                                                    <span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
                                                    Buscar
                                                </button>
											</span>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <br>
                </div>
              <div class="row"><br></div>
                {!! Form::close()!!}

                {!!   Form::open(['route' => 'busqueda.por.grado']) !!}

                <div class="widget-box">
                    <div class="widget-header widget-header-small">
                        <h5 class="widget-title lighter">Busqueda por Grado:</h5>
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

                                            {!! Form::select('grado',['' => 'Seleccione el Grado','1' => 'Primero', '2' => 'Segundo', '3' => 'Tercero', '4' => 'Cuarto', '5' => 'Quinto', '6' => 'Sexto', '7' => 'Septimo', '8' => 'Octavo', '9' => 'Noveno', '10' => 'Decimo', '11' => 'Decimo Primero'],null, ['class' => 'form-control']) !!}
                                            <span class="input-group-btn">
												<button type="submit" class="btn btn-info btn-sm">
                                                    <span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
                                                    Buscar
                                                </button>
											</span>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="row"><br></div>
                {!! Form::close()!!}

                {!!   Form::open(['route' => 'busqueda.por.id']) !!}

                <div class="widget-box">
                    <div class="widget-header widget-header-small">
                        <h5 class="widget-title lighter">Busqueda Numero de Identificacion:</h5>
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

                                            {!! Form::text('id',null, ['class' => 'form-control ']) !!}
                                            <span class="input-group-btn">
												<button type="submit" class="btn btn-danger btn-sm">
                                                    <span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
                                                    Buscar
                                                </button>
											</span>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="row"><br></div>
                {!! Form::close()!!}
















            </div>
         </div>
    </div>

@stop