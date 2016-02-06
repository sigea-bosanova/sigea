    @extends('cooacademico.menu')

    @section('contenido')

  @if(isset($persona))
        <h2 class="header smaller lighter blue">Mostrando datos de: {{ $persona->nombres }}</h2>



        <div class="col-md-1"></div>
        <div class="col-md-10">

            {{ Html::ul($errors->all()) }}

            <style type="text/css">
                /* Adjust the height of section */
                #formulario .content {
                    min-height: 100px;
                }
                #formulario .content > .body {
                    width: 100%;
                    height: auto;
                    padding: 15px;
                    position: relative;
                }
            </style>



            {!! Form::open(['id' => 'formulario']) !!}
            {!! Form::model($persona) !!}

            @include('compartido.docente.formularioMostrar')

            {!! Form::close() !!}
  @endif

            @if (Session::has('error'))
                <br><br><div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif


        </div>

    @stop






    @section('scripts')


        {!! Html::script('js/jquery-steps/jquery.steps.js') !!}
        {!! Html::script('js/jquery-steps/jquery-validate-1.13.1.js') !!}
        {!! Html::script('js/jquery-steps/messages_es.js') !!}






        <script>

            var form = $("#formulario").show();

            form.steps({
                headerTag: "h3",
                bodyTag: "fieldset",
                transitionEffect: "slideLeft",
                cssClass: "wizard",


                labels: {
                    cancel: "Cancelar",
                    current: "current step:",
                    pagination: "Pagination",
                    finish: "Finalizar",
                    next: "Siguiente",
                    previous: "Atras",
                    loading: "Cargando... "
                },

            });
        </script>

    @stop
