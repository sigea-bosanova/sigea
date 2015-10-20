@extends('cooacademico.base')
@section('contenido')

    <h4 class="lighter">
        <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
        <a href="#modal-wizard" data-toggle="modal" class="pink"> Registro de una observaci&oacute;n </a>
    </h4>

    <div class="hr hr-18 hr-double dotted"></div>

    <div class="widget-box">
        <div class="widget-header widget-header-blue widget-header-flat">
            <h4 class="widget-title lighter blue">Nueva observaci&oacute;n</h4>


        <div class="widget-body">
            <div class="widget-main">
                <!-- #section:plugins/fuelux.wizard -->
                <div id="fuelux-wizard-container">
                    <div>
                        <!-- #section:plugins/fuelux.wizard.steps -->


                        <!-- /section:plugins/fuelux.wizard.steps -->
                    </div>

                    <hr />

                    <!-- #section:plugins/fuelux.wizard.container -->
                    <div class="step-content pos-rel">
                        <div class="step-pane active" data-step="1">
                            <h3 class="lighter block green">Introduzca la siguiente informaci&oacute;n</h3>

                            <form class="form-horizontal" id="sample-form">
                                <!-- #section:elements.form.input-state -->
                                <div class="form-group has-warning">
                                    <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Id del estudiante:</label>

                                    <div class="col-xs-12 col-sm-5">
																	<span class="block input-icon input-icon-right">
																		<input type="text" id="inputWarning" class="width-100" />
																		<i class="ace-icon fa fa-user"></i>
																	</span>
                                    </div>

                                </div>

                                <!-- /section:elements.form.input-state -->
                                <div class="form-group has-error">
                                    <label for="inputError" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">Observaci&oacute;n</label>

                                    <div class="col-xs-12 col-sm-5">
																	<span class="block input-icon input-icon-right">
																		<input type="text" id="inputError" class="width-100" />
																		<i class="ace-icon fa fa-times-circle"></i>
																	</span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Comment</label>

                                        <div class="col-xs-12 col-sm-9">
                                            <div class="clearfix">
                                                <textarea class="input-xlarge" name="comment" id="comment"></textarea>
                                            </div>
                                        </div>
                                    </div>








                                <div class="space-8"></div>

                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4 col-sm-offset-3">
                                        <label>
                                            <input name="agree" id="agree" type="checkbox" class="ace" />
                                            <span class="lbl"> I accept the policy</span>
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="step-pane" data-step="2">
                            <div>
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>

                                    <strong>
                                        <i class="ace-icon fa fa-check"></i>
                                        Well done!
                                    </strong>

                                    You successfully read this important alert message.
                                    <br />
                                </div>

                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>

                                    <strong>
                                        <i class="ace-icon fa fa-times"></i>
                                        Oh snap!
                                    </strong>

                                    Change a few things up and try submitting again.
                                    <br />
                                </div>

                                <div class="alert alert-warning">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>
                                    <strong>Warning!</strong>

                                    Best check yo self, you're not looking too good.
                                    <br />
                                </div>

                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>
                                    <strong>Heads up!</strong>

                                    This alert needs your attention, but it's not super important.
                                    <br />
                                </div>
                            </div>
                        </div>

                        <div class="step-pane" data-step="3">
                            <div class="center">
                                <h3 class="blue lighter">This is step 3</h3>
                            </div>
                        </div>

                        <div class="step-pane" data-step="4">
                            <div class="center">
                                <h3 class="green">Congrats!</h3>
                                Your product is ready to ship! Click finish to continue!
                            </div>
                        </div>
                    </div>

                    <!-- /section:plugins/fuelux.wizard.container -->
                </div>

                <hr />
                <div class="wizard-actions">
                    <!-- #section:plugins/fuelux.wizard.buttons -->
                    <button class="btn btn-prev">
                        <i class="ace-icon fa fa-arrow-left"></i>
                        Prev
                    </button>

                    <button class="btn btn-success btn-next" data-last="Finish">
                        Next
                        <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                    </button>

                    <!-- /section:plugins/fuelux.wizard.buttons -->
                </div>

                <!-- /section:plugins/fuelux.wizard -->
            </div><!-- /.widget-main -->
        </div><!-- /.widget-body -->
    </div>

    <div id="modal-wizard" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="modal-wizard-container">
                    <div class="modal-header">
                        <ul class="steps">
                            <li data-step="1" class="active">
                                <span class="step">1</span>
                                <span class="title">Validation states</span>
                            </li>

                            <li data-step="2">
                                <span class="step">2</span>
                                <span class="title">Alerts</span>
                            </li>

                            <li data-step="3">
                                <span class="step">3</span>
                                <span class="title">Payment Info</span>
                            </li>

                            <li data-step="4">
                                <span class="step">4</span>
                                <span class="title">Other Info</span>
                            </li>
                        </ul>
                    </div>

                    <div class="modal-body step-content">
                        <div class="step-pane active" data-step="1">
                            <div class="center">
                                <h4 class="blue">Step 1</h4>
                            </div>
                        </div>

                        <div class="step-pane" data-step="2">
                            <div class="center">
                                <h4 class="blue">Step 2</h4>
                            </div>
                        </div>

                        <div class="step-pane" data-step="3">
                            <div class="center">
                                <h4 class="blue">Step 3</h4>
                            </div>
                        </div>

                        <div class="step-pane" data-step="4">
                            <div class="center">
                                <h4 class="blue">Step 4</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer wizard-actions">
                    <button class="btn btn-sm btn-prev">
                        <i class="ace-icon fa fa-arrow-left"></i>
                        Prev
                    </button>

                    <button class="btn btn-success btn-sm btn-next" data-last="Finish">
                        Next
                        <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                    </button>

                    <button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
                        <i class="ace-icon fa fa-times"></i>
                        Cancel
                    </button>
                </div>
            </div>
        </div>

@endsection