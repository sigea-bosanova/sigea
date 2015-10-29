@extends('compartido.navbar')
@section('menu')

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-pencil-square-o"></i>
            <span class="menu-text">Gestionar Notas </span>
            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">


            <li class="">
                <a href=" {{ url('estudiante/ver-notas')  }} ">
                    <i class="fa fa-book fa-fw"></i>&nbsp;
                    Consultar Notas
                </a>

                <b class="arrow"></b>
            </li>


        </ul>
    </li>

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-eye"></i>
            <span class="menu-text">Gestionar Observaci&oacute;n </span>
            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">


            <li class="">
                <a href=" {{ url('estudiante/ver-observaciones') }}">
                    <i class="fa fa-book fa-fw"></i>&nbsp;
                    Consultar Observaci&oacute;n
                </a>

                <b class="arrow"></b>
            </li>


        </ul>
    </li>

  @stop