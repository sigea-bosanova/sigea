<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>SigeaBosaNova</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />


    {!! Html::style('css/jquery-steps/jquery.steps.css') !!}
    {!! Html::style('css/jquery-steps/bootstrap.min.css') !!}
    {!! Html::style('css/font-awesome.css') !!}
    {!! Html::style('css/ace-fonts.css') !!}
    {!! Html::style('css/ace.css') !!}
    {!! Html::style('css/ace-part2.css') !!}
    {!! Html::style('css/ace-rtl.css') !!}
    {!! Html::style('css/ui.jqgrid.css') !!}
    {!! Html::style('css/jquery-ui.css') !!}
    {!! Html::style('css/datepicker.css') !!}
    {!! Html::style('css/ace-ie.css') !!}
    {!! Html::script('js/html5shiv.js') !!}
    {!! Html::script('js/respond.js') !!}






</head>

<body class="no-skin">

@yield('navbar')


<!-- /section:basics/navbar.layout -->
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

    <!-- #section:basics/sidebar -->
    <div id="sidebar"   class="  sidebar         responsive">
        <script type="text/javascript">
            try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
        </script>

        <div class=" sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <button class="btn btn-success">
                    <i class="ace-icon fa fa-signal"></i>
                </button>

                <button class="btn btn-info">
                    <i class="ace-icon fa fa-pencil"></i>
                </button>

                <!-- #section:basics/sidebar.layout.shortcuts -->
                <button class="btn btn-warning">
                    <i class="ace-icon fa fa-users"></i>
                </button>

                <button class="btn btn-danger">
                    <i class="ace-icon fa fa-cogs"></i>
                </button>

                <!-- /section:basics/sidebar.layout.shortcuts -->
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div><!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list">
            <li class="">
                <a href="#">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Men&uacute;</span>
                </a>

                <b class="arrow"></b>
            </li>

            @yield('menu')


        </ul><!-- /.nav-list -->

        <!-- #section:basics/sidebar.layout.minimize -->


        <!-- /section:basics/sidebar.layout.minimize -->
        <script type="text/javascript">
            try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
        </script>
    </div>

    <!-- /section:basics/sidebar -->
    <div class="main-content">
        <div class="main-content-inner">                                       <!--esta es la barra de menu principal -->
            <!-- #section:basics/content.breadcrumbs -->
            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">
                    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                </script>

                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">Men&uacute; Principal</a>
                    </li>

                </ul>

            </div>

            <div class=""></div>


            <div class="">
                <div class="col-md-12">
                    <!-- PAGE CONTENT BEGINS -->

                                @yield('contenido')

                     <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->

<div class="footer">
    <div class="footer-inner">
        <!-- #section:basics/footer -->
        <div class="footer-content">
						<span class="bigger-120">
                            <i class="fa fa-laptop green"></i>
							<span class="red bolder">Sigea</span>
							BosaNova &copy; 2015
						</span>
        </div>

        <!-- /section:basics/footer -->
    </div>
</div>

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
    <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div><!-- /.main-container -->

<!-- basic scripts -->


<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='js/jquery-2.1.4.js'>"+"<"+"/script>");
</script>

<script type="text/javascript">
    window.jQuery || document.write("<script src= {!! asset('js/jquery1x.js')!!}>"+"<"+"/script>");
</script>

<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src= {!! asset('js/jquery.mobile.custom.js')!!}>"+"<"+"/script>");
</script>

{!! Html::script('js/bootstrap.js') !!}
{!! Html::script('js/ace/ace.js') !!}
{!! Html::script('js/ace/ace.sidebar.js') !!}
{!! Html::script('js/prettify.js') !!}






@yield('scripts')

</body>
</html>

