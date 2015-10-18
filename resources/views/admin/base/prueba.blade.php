@extends('admin.base')
@section('contenido')

    <form class="form-horizontal" role="form">
        <!-- #section:elements.form -->
        <div class="form-group">
            <h4 class="widget-title">Registro de un cargo</h4>
            <hr>
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Cargo: </label><br>
            <input type="text" id="form-field-1" placeholder="Nombre del cargo" class="col-xs-10 col-sm-5" />
        </div><br>

        <div>
            <label for="form-field-9">Descripcion:</label><br>
            <textarea class="form-control limited" id="form-field-9" maxlength="100" placeholder="Descripcion del cargo" rows="4" cols="30"></textarea>
        </div>


    </form>

@endsection