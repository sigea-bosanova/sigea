@extends('admin.menu')

@section('contenido')

    <div class="container">


        <div class="row">
            <div class="col-xs-11">
                <h3 class="header smaller lighter blue">Docentes</h3>

                @if(empty($personas))
                    <div class="alert alert-info">No existen registros en el sistema.</div>
                @endif

                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif


                @if(isset($personas))


                <div class="clearfix">
                    <div class="pull-right tableTools-container"></div>
                </div>
                <div class="table-header">
                   Listado Coordinadores de Docentes de la Institucion:
                </div>

                <div>
                    <table id="" class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>
                                <i class="ace-icon fa fa-user center"></i>
                                Identificacion
                            </th>
                            <th> Nombre</th>
                            <th> Primer Apellido </th>
                            <th> Segundo Apellido</th>
                            <th> Guardar </th>
                        </tr>
                        </thead>

                        <tbody>

                      @foreach ($personas as $persona)

                         {!!  Form::open(['id'=>'formulario','route' => 'llegada']) !!}
                            <tr>
                                <td>{!! Form::text('id',$persona->id,['class' => 'form-control']) !!}</td>
                                <td>{!! Form::text('nombre',$persona->nombres,['class' => 'form-control']) !!}</td>
                                <td>{!! Form::text('primer_apellido',$persona->primer_apellido,['class' => 'form-control']) !!}</td>
                                <td>{!! Form::text('segundo_apellido',$persona->segundo_apellido,['class' => 'form-control']) !!}</td>


                                <td>
                                    <div class="hidden-sm hidden-xs action-buttons editableform ">

                                        <button type="submit" class="btn btn-small btn-danger">
                                            <i class="ace-icon fa fa-floppy-o bigger-130"></i>
                                        </button>

                                    </div>
                                </td>

                </tr>

                         {!!  Form::close() !!}
            @endforeach




            </tbody>
        </table>
    </div>
                @endif
</div>
</div>




</div>

@stop

