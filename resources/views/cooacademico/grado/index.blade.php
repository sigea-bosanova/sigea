@extends('cooacademico.menu')

@section('contenido')

    <div class="container">


        <div class="row">
            <div class="col-xs-11">
                <h3 class="header smaller lighter blue">Grados de la institucion:</h3>

                @if (isset($ok))
                    <div class="alert alert-info">{{ $ok }}</div>
                @endif

                @if(!isset($grados))
                    <div class="alert alert-info">No existen registros en el sistema.</div>
                @endif
                <br>
                <div class="row">
                    <div class="col-xs-7 col-sm-7"></div>
                    <div class="col-xs-5 col-sm-5">
                        <a href=" {{ route('coordinador-academico.grado.create') }}" class="btn btn-danger form-control">
                            <span class="ace-icon fa fa-plus-circle icon-on-right bigger-120"></span>
                            Agregar otro Grado
                        </a>
                    </div>

                </div>
                <br>


                @if(isset($grados))


                <div class="clearfix">
                    <div class="pull-right tableTools-container"></div>
                </div>
                <div class="table-header">
                   Listado de todos los Grados de la Institucion:
                </div>

                <div>
                    <table id="" class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>
                                <i class="ace-icon fa fa-user center"></i>
                                Id
                            </th>
                            <th> Nombre</th>
                            <th> Intensidad Horaria </th>
                            <th> Acciones </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($grados as $grado)

                            <tr>
                                <td>{{ $grado->id }}</td>
                                <td>{{ $grado->nombre }}</td>
                                <td>{{ $grado->intensidad_horaria }}</td>
                                <td>
                                    <div class="hidden-sm hidden-xs action-buttons editableform ">
                                        <a class="btn btn-small btn-success" href=" {{ url('coordinador-academico/grado/'. $grado->id) }}" >
                                            <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                        </a>

                                        <a class="btn btn-small btn-info" href="{{ url('coordinador-academico/grado/'. $grado->id).'/edit' }}">
                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                        </a>


                                        {!!  Form::open(array('url' => 'coordinador-academico/grado/' . $grado->id, 'class' => 'pull-left')) !!}
                                        {!!  Form::hidden('_method', 'DELETE') !!}
                                                        <button type="submit" class="btn btn-small btn-danger">
                                                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                        </button>
                                        {!!  Form::close() !!}


                                    </div>

                        <div class="hidden-md hidden-lg">
                            <div class="inline pos-rel">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                    <li>
                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                    <span class="blue">
                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                    </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                    <span class="green">
                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                    </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                    <span class="red">
                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                    </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </td>

                </tr>


            @endforeach




            </tbody>
        </table>
    </div>
                @endif
</div>
</div>




</div>

@stop