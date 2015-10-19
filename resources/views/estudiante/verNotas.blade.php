@extends('estudiante.base')
@section('contenido')
<div>
    <div class="col-md-1"></div>
    <div class= "col-md-10   widget-box">
        <div class="widget-header widget-header-blue widget-header-flat">
            <h4 class="widget-title lighter">Notas de {{ Session::get('nombre') }} </h4>
        </div>

        <div class="row"><br><br></div>
        <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <table id="simple-table" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="center">


                        <th class="center">Cognitivo</th>
                        <th class="center">Actitudinal</th>
                        <th class="center">
                            Procedimental
                        </th>

                        <th class="center">Acumulado</th>
                    </tr>
                    </thead>


                    <thead>
                    <tr>
                        <th class="center">Materia</th>
                        <th class="center">
                            <div class="hidden-sm hidden-xs btn-group">
                                <button class="btn btn-xs btn-success">
                                    N 1
                                </button>
                                <button class="btn btn-xs btn-success">
                                    N 2
                                </button>
                                <button class="btn btn-xs btn-success">
                                    N 3
                                </button>
                                <button class="btn btn-xs btn-success">
                                    N 4
                                </button>
                                <button class="btn btn-xs btn-success">
                                    N 5
                                </button>
                            </div>
                        </th>


                        <th class="center">
                            <div class="hidden-sm hidden-xs btn-group">
                                <button class="btn btn-xs btn-danger">
                                    N 1
                                </button>
                                <button class="btn btn-xs btn-danger">
                                    N 2
                                </button>
                                <button class="btn btn-xs btn-danger">
                                    N 3
                                </button>
                                <button class="btn btn-xs btn-danger">
                                    N 4
                                </button>
                                <button class="btn btn-xs btn-danger">
                                    N 5
                                </button>
                            </div>
                        </th>


                        <th class="center">
                            <div class="hidden-sm hidden-xs btn-group">
                                <button class="btn btn-xs btn-info">
                                    N 1
                                </button>
                                <button class="btn btn-xs btn-info">
                                    N 2
                                </button>
                                <button class="btn btn-xs btn-info">
                                    N 3
                                </button>
                                <button class="btn btn-xs btn-info">
                                    N 4
                                </button>
                                <button class="btn btn-xs btn-info">
                                    N 5
                                </button>
                            </div>
                        </th>

                        <th class="center">
                            <div class="hidden-sm hidden-xs btn-group">
                                <button class="btn btn-xs btn-warning">
                                    Nota
                                </button>

                            </div>
                        </th>

                    </tr>
                    </thead>

                    <tbody>
                    <tr>




                        <div class="hidden-md hidden-lg">
                            <div class="inline pos-rel">
                                <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                    <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
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

                    <tr>
                        <td class="center">
                            <label class="pos-rel">
                                Matematicas
                                <span class="lbl"></span>
                            </label>
                        </td>

                        <td>
                            <div class="center">
                                <label class="pos-rel">
                                    54 - 34 -84 -34 -32
                                    <span class="lbl"></span>
                                </label>
                            </div>
                        </td>
                        <td class="center"> 54 - 64 -84 -34 -32 </td>
                        <td class="center"> 54 - 34 -84 -34 -32 </td>
                        <td class="center">  74</td>

                    </tr>
                    <tr>
                        <td class="center">
                            <label class="pos-rel">
                                Filosofia
                                <span class="lbl"></span>
                            </label>
                        </td>

                        <td>
                            <div class="center">
                                <label class="pos-rel">
                                    54 - 34 -84 -34 -32
                                    <span class="lbl"></span>
                                </label>
                            </div>
                        </td>
                        <td class="center"> 54 - 34 -84 -34 -32 </td>
                        <td class="center"> 54 - 34 -84 -34 -32 </td>
                        <td class="center">  74</td>

                    </tr>

                    <tr>
                        <td class="center">
                            <label class="pos-rel">
                                Castellano
                                <span class="lbl"></span>
                            </label>
                        </td>

                        <td>
                            <div class="center">
                                <label class="pos-rel">
                                    54 - 34 -84 -34 -32
                                    <span class="lbl"></span>
                                </label>
                            </div>
                        </td>
                        <td class="center"> 54 - 34 -84 -34 -32 </td>
                        <td class="center"> 54 - 34 -84 -34 -32 </td>
                        <td class="center">  74</td>

                    </tr>


                    </tbody>
                </table>
            </div><!-- /.span -->
        </div><!-- /.row -->
        <div><br><br></div>



    </div>
</div>

@endsection