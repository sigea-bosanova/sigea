@extends('admin.menu')

@section('contenido')

    <div class="container">


        <div class="row">
            <div class="col-xs-11">
                <h3 class="header smaller lighter blue">Estudiantes:</h3>

                @if(empty($estudiantes)&& empty($unicoEstudiante))
                    <div class="alert alert-info">No existen registros en el sistema.</div>
                @endif

                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif
                @if(isset($estudiantes))


                    <div class="clearfix">
                        <div class="pull-right tableTools-container"></div>
                    </div>
                    <div class="table-header">
                        Resultado de la Busqueda
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
                                <th> Email</th>
                                <th> Acciones </th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($estudiantes as $estudiante)

                                <tr>
                                    <td>{{ $estudiante->id }}</td>
                                    <td>{{ $estudiante->nombre }}</td>
                                    <td>{{ $estudiante->primer_apellido }}</td>
                                    <td>{{ $estudiante->email }}</td>


                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons editableform ">
                                            <a class="btn btn-small btn-success" href=" {{ url('gestionar/estudiantes/estudiante/'. $estudiante->id) }}" >
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="btn btn-small btn-info" href="{{ url('gestionar/estudiantes/estudiante/'. $estudiante->id).'/edit' }}">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>


                                            {!!  Form::open(array('url' => 'gestionar/estudiantes/estudiante/'. $estudiante->id, 'class' => 'pull-left')) !!}
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



                @if(isset($unicoEstudiante))


                    <div class="clearfix">
                        <div class="pull-right tableTools-container"></div>
                    </div>
                    <div class="table-header">
                        Resultado de la Busqueda
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
                                <th> Email</th>
                                <th> Acciones </th>
                            </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>{{ $unicoEstudiante->id }}</td>
                                    <td>{{ $unicoEstudiante->nombre }}</td>
                                    <td>{{ $unicoEstudiante->primer_apellido }}</td>
                                    <td>{{ $unicoEstudiante->email }}</td>


                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons editableform ">
                                            <a class="btn btn-small btn-success" href=" {{ url('gestionar/estudiantes/estudiante/'. $unicoEstudiante->id) }}" >
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="btn btn-small btn-info" href="{{ url('gestionar/estudiantes/estudiante/'. $unicoEstudiante->id).'/edit' }}">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>


                                            {!!  Form::open(array('url' => 'gestionar/estudiantes/estudiante/'. $unicoEstudiante->id, 'class' => 'pull-left')) !!}
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

                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>




    </div>

@stop


