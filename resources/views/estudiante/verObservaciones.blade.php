@extends('estudiante.menu')
@section('contenido')



    <div>
        <div class="col-lg-1"></div>
        <div class="row"><br></div>
        <div class="widget-box col-lg-12">

            <div class="widget-header widget-header-blue widget-header-flat">
                <h1 class="header smaller lighter blue">Observaciones de {{  Session::get('nombre') }}</h1>



                <div class="widget-body">
                    <div class="widget-main">
                        <!-- #section:plugins/fuelux.wizard -->
                        <div id="fuelux-wizard-container">



                            <!-- #section:plugins/fuelux.wizard.container -->
                            <div class="">
                                <div  >
                                    @if(isset($mensaje))

                                        @if ($mensaje=="ok")
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


                                        @endif

                                        @if ($mensaje=="no")
                                            <div>
                                                <div class="alert alert-success">

                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <i class="ace-icon fa fa-times"></i>
                                                    </button>
                                                    <strong>Felicitaciones, No se encontraron observaci&oacute;n.</strong><br><br>
                                                </div>
                                            </div>

                                        @endif

                                    @endif
                                            <br>
                                            <br>
                                        </div>

                                    </div>
                                </div>

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