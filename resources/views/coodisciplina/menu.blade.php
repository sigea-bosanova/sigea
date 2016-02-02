    @extends('compartido.navbar')
    @section('menu')

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa  fa-user"></i>
                <span class="menu-text">Gestionar Docente </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">


                <li class="">
                    <a href="#">
                        <i class="fa fa-book fa-fw"></i>&nbsp;
                        Consultar Docente
                    </a>

                    <b class="arrow"></b>
                </li>



            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">Gestionar Estudiante </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{{ route('gestionar.estudiantes.estudiante.create') }}">
                        <!--<i class="menu-icon fa fa-caret-right"></i>-->
                        <i class="fa fa-plus"></i>&nbsp;
                        Crear Estudiante
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('gestionar.estudiantes.estudiante.index') }}">
                        <i class="fa fa-pencil fa-fw"></i>&nbsp;
                        Modificar Estudiante
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('gestionar.estudiantes.estudiante.index') }}">
                        <i class="fa fa-book fa-fw"></i>&nbsp;
                        Consultar Estudiante
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('gestionar.estudiantes.estudiante.index') }}">
                        <i class="fa fa-trash-o fa-fw"></i>&nbsp
                        Eliminar Estudiante
                    </a>

                    <b class="arrow"></b>

                </li>

            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-eye"></i>
                <span class="menu-text">Gestionar  Observaci&oacute;n </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{{ route('observaciones.crear') }}">
                        <!--<i class="menu-icon fa fa-caret-right"></i>-->
                        <i class="fa fa-plus"></i>&nbsp;
                        Crear Observaci&oacute;n
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="#">
                        <i class="fa fa-pencil fa-fw"></i>&nbsp;
                        Modificar Observaci&oacute;n
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href=" {{ route('observaciones.index') }} ">
                        <i class="fa fa-book fa-fw"></i>&nbsp;
                        Consultar Observaci&oacute;n
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>





        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-key"></i>
                <span class="menu-text">Gestionar Contrase&ntilde;a  </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">

                <li class="">
                    <a href="#">
                        <i class="fa fa-book fa-fw"></i>&nbsp;
                        Cambiar Contrase&ntilde;a
                    </a>

                    <b class="arrow"></b>
                </li>



            </ul>
        </li>

    @stop