@extends('compartido.master')
@section('navbar')

        <!-- #section:basics/navbar.layout -->
<div id="navbar" class="navbar navbar-default">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>

    <div class="navbar-container" id="navbar-container">
        <!-- #section:basics/sidebar.mobile.toggle -->
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <!-- /section:basics/sidebar.mobile.toggle -->
        <div class="navbar-header pull-left">
            <!-- #section:basics/navbar.layout.brand -->
            <a href="#" class="navbar-brand">
                <small>
                    <!--
                    <h1>
                        <i class="ace-icon fa fa-laptop green"></i>
                        <span class="red">Sigea</span>
                        <span class="white" id="id-text2">BosaNova</span>
                    </h1>
                    -->
                    <i class="fa fa-laptop"></i>
                    SigeaBosaNova

                </small>
            </a>

            <!-- /section:basics/navbar.layout.brand -->

            <!-- #section:basics/navbar.toggle -->

            <!-- /section:basics/navbar.toggle -->
        </div>

        <!-- #section:basics/navbar.dropdown -->
        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">


                <!-- #section:basics/navbar.user_menu -->
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        {!!Html::image('avatars/profile-pic.jpg', 'Foto de Usuario',['class' =>'nav-user-photo']) !!}

								<span class="user-info">
									<small>Bienvenido,</small>
                                    <?php $nombre = Session::get('nombre') ?>
                                    {{ $nombre }}
								</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-user"></i>
                                Perfil
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href = ' {{ route('salir') }} ' >
                                <i class="ace-icon fa fa-power-off"></i>
                                Salir
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- /section:basics/navbar.user_menu -->
            </ul>
        </div>

        <!-- /section:basics/navbar.dropdown -->
    </div><!-- /.navbar-container -->
</div>


@stop