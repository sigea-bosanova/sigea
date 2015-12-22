    @extends('admin.menu')

    @section('contenido')


        <h2 class="header smaller lighter blue">Editando:</h2>



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





            {!!  Form::model($persona, ['id' => 'formulario','route' => ['gestionar.coordinadores-academicos.persona.update', $persona->id], 'method' => 'PUT']) !!}

            @include('compartido.persona.formulario')

            {!! Form::close() !!}


            <div class="modal fade" id="final" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Actualizando Coordinador Academico</h4>
                        </div>
                        <div class="modal-body">
                            <p class="text-center">...</p>
                        </div>
                    </div>
                </div>
            </div>
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


                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Allways allow previous action even if the current form is not valid!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Needed in some cases if the user went back (clean up)
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        form.find(".body:eq(" + newIndex + ") label.error").remove();
                        form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
                    }
                    form.validate().settings.ignore = ":disabled,:hidden";
                    return form.valid();
                },


                onFinishing: function (event, currentIndex)
                {
                    form.validate().settings.ignore = ":disabled";
                    return form.valid();
                },

                onFinished: function (event, currentIndex)
                {

                    $('#final').modal();
                    form.submit();

                },

                labels: {
                    cancel: "Cancelar",
                    current: "current step:",
                    pagination: "Pagination",
                    finish: "Finalizar",
                    next: "Siguiente",
                    previous: "Atras",
                    loading: "Cargando... "
                },

            }).validate({
                errorPlacement: function errorPlacement(error, element) { element.before(error); },
                rules: {
                    tipoId:{
                        required:true
                    },
                    sexo:{
                      required:true
                    },
                    nacionalidad:{
                        required:true
                    },
                    eduBasMedia:{
                        required:true
                    },
                    confirm: {
                        equalTo: "#password-2"
                    }
                }
            });
        </script>

    @stop
