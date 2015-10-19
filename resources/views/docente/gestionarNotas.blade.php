    @extends('docente.base')

    @section('contenido')
     <div>
        <div class="col-md-1"></div>
        <div class= "col-md-10   widget-box">
            <div class="widget-header widget-header-blue widget-header-flat">
                <h4 class="widget-title lighter">Gestionar Notas  </h4>
            </div>

            <?php
                $cursos = array(1,2,3,4,5,5);
            ?>

            <div class="col-md-8">
                <br>
                {!! Form::open(['action' => 'NotasController@index', 'method' => 'post' ])   !!}

            <div class="form-group">
                <div class="col-md-6">
                {!! Form::label('Seleccione el Curso:')  !!}  {!! Form::select('curso',$cursos)  !!}
                </div>
                {!! Form::submit('Buscar',['class' => ' btn-primary'])  !!}
            </div>
                {!! Form::close()  !!}

            </div>


        </div>
     </div>



    @endsection