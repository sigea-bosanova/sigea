@section('contenido')



    <div class="hr hr-18 hr-double dotted"></div>


    @if(isset($mensaje))

        @if ($mensaje=="ok")

        @endif

        @if ($mensaje=="error")

            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                </button>
                <strong>Error al cargar el perfil.</strong><br><br>
            </div>
        @endif

    @endif

    <div>
        <div class="col-lg-1"></div>
        <div class="widget-box col-lg-10">
            <div class="widget-header widget-header-blue widget-header-flat">
                <h1 class="header smaller lighter blue">Bienvenido</h1>


                <div class="widget-body">
                    <div class="widget-main">
                        <!-- #section:plugins/fuelux.wizard -->
                        <div id="fuelux-wizard-container">


                            <!-- #section:plugins/fuelux.wizard.container -->
                            <div class="step-content pos-rel">
                                <div class="col-sm-4"> </div>
                                        <div id="user-profile-1" class="user-profile row ">
                                                <div>
                                                    <!-- #section:pages/profile.picture -->
                                                    <div >
						                                <span class="profile-picture">
						                            	<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="avatars/profile-pic.jpg" />
						                                    </span>
                                                    </div>
                                                    <div class="col-sm-4"> </div>

                                                    <!-- /section:pages/profile.picture -->
                                                    <div class="space-4"></div>

                                                    <div class=" width-95 label label-info label-xlg arrowed-in arrowed-in-right">
                                                        <div class="inline position-relative">
                                                            <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                                                                <i class="ace-icon fa fa-circle light-green"></i>
                                                                &nbsp;
                                                                <span class="white">{{ Session::get('nombre') }}</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>


                                            <div class="hr hr-18 hr-double dotted"></div>

                                    <!-- /section:elements.form.input-state -->

                                                <div class="profile-user-info profile-user-info-striped">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Identificaci&oacute;n: </div>


                                                        <div class="profile-info-value">
                                                            <i class="fa fa-fighter-jet light-orange bigger-110"></i>
                                                            <span class="editable" id="about">&nbsp;&nbsp;{{ Session::get('id') }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nombre: </div>

                                                        <div class="profile-info-value">
                                                            <i class="fa fa-smile-o light-orange bigger-110"></i>
                                                            <span class="editable" id="username">&nbsp;&nbsp;{{ Session::get('nombreCompleto') }}</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Perfil: </div>

                                                        <div class="profile-info-value">
                                                            <i class="fa fa-user light-orange bigger-110"></i>
                                                            <span class="editable" id="country">&nbsp;&nbsp;{{ Session::get('perfil') }}</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Correo: </div>

                                                        <div class="profile-info-value">
                                                            <i class="fa fa-envelope light-orange bigger-110"></i>
                                                            <span class="editable" id="age">&nbsp;&nbsp;{{ Session::get('email') }}</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Direccion: </div>

                                                        <div class="profile-info-value">
                                                            <i class="fa fa-home light-orange bigger-110"></i>
                                                            <span class="editable" id="signup">&nbsp;&nbsp;{{ Session::get('direccion') }}</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Telefono: </div>

                                                        <div class="profile-info-value">
                                                            <i class="fa fa-phone light-orange bigger-110"></i>
                                                            <span class="editable" id="login">&nbsp;&nbsp;{{ Session::get('celular') }}</span>
                                                        </div>
                                                    </div>


                                                </div>


                                </div>

                            </div>



                        </div>

                        <!-- /section:plugins/fuelux.wizard.container -->
                    </div>

                    <hr />


                    <!-- /section:plugins/fuelux.wizard -->
                </div><!-- /.widget-main -->
            </div><!-- /.widget-body -->
        </div>
    </div>

    </div>
    </div>
@endsection