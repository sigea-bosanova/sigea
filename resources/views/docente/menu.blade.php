    @extends('compartido.navbar')
    @section('menu')

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">Gestionar Estudiante </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">

                <li class="">
                    <a href=" {{ route('gestionar.estudiantes.estudiante.index') }}">
                        <i class="fa fa-book fa-fw"></i>&nbsp;
                        Consultar Estudiante
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text">Gestionar Nota </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">

                <li class="">
                    <a href=" {{ url('docente/gestionar-notas')  }} ">
                        <i class="fa fa-pencil fa-fw"></i>&nbsp;
                        Modificar Nota
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href=" {{ url('docente/gestionar-notas')  }} ">
                        <i class="fa fa-book fa-fw"></i>&nbsp;
                        Consultar Nota
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
                        <!--<i class="menu-icon fa fa-caret-right"></i>-->
                        <i class="fa fa-plus"></i>&nbsp;
                        Cambiar Contrase&ntilde;a
                    </a>

                    <b class="arrow"></b>
                </li>

            </ul>
        </li>

    @stop

