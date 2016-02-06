@extends('cooacademico.menu')

@section('contenido')

    <div class="container">


        <div class="row">
            <div class="col-xs-11">
                <h3 class="header smaller lighter blue">Cursos de la institucion:</h3>

                @if (isset($ok))
                    <div class="alert alert-info">{{ $ok }}</div>
                @endif

                @if(!isset($cursos))
                    <div class="alert alert-info">No existen registros en el sistema.</div>
                @endif

                <br>
                <div class="row">
                    <div class="col-xs-7 col-sm-7"></div>
                    <div class="col-xs-5 col-sm-5">
                        <a href=" {{ route('coordinador-academico.curso.create') }}" class="btn btn-warning form-control">
                            <span class="ace-icon fa fa-plus-circle icon-on-right bigger-120"></span>
                            Agregar otro Curso
                        </a>
                    </div>

                </div>
                <br>


                @if(isset($cursos))


                <div class="clearfix">
                    <div class="pull-right tableTools-container"></div>
                </div>
                <div class="table-header">
                   Listado de todos los Cursos de la Institucion:
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
                            <th> Grado al que Pertenece </th>
                            <th> Acciones </th>
                        </tr>
                        </thead>


                        <tbody>

                        @foreach ($cursos as $curso)

                            <tr>
                                <td> {{ $curso->id }} </td>
                                <td> {{ $curso->nombre }} </td>
                                <td> {{ $curso->grado->nombre }} </td>
                                <td>
                                    <div class="hidden-sm hidden-xs action-buttons editableform ">
                                        <a class="btn btn-small btn-success" href=" {{ url('coordinador-academico/curso/'. $curso->id) }}" >
                                            <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                        </a>

                                        <a class="btn btn-small btn-info" href="{{ url('coordinador-academico/curso/'. $curso->id).'/edit' }}">
                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                        </a>


                                        {!!  Form::open(array('url' => 'coordinador-academico/curso/' . $curso->id, 'class' => 'pull-left')) !!}
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