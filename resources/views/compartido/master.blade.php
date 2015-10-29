<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>SigeaBosaNova</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    {!! Html::style('css/bootstrap.css') !!}
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
    <div id="sidebar"   class="sidebar                  responsive">
        <script type="text/javascript">
            try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
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
                    <!--
                        <li>
                            <a href="#">Other Pages</a>
                        </li>
                        <li class="active">Blank Page</li>
                     /.breadcrumb -->
                </ul>
                <!-- #section:basics/content.searchbox-->
                <!--/.nav-search -->

                <!-- /section:basics/content.searchbox -->
            </div>

            <!-- /section:basics/content.breadcrumbs -->
            <div class="page-content">
                <!-- #section:settings.box -->
                <div class="ace-settings-container" id="ace-settings-container">
                    <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                        <i class="ace-icon fa fa-cog bigger-130"></i>
                    </div>

                    <div class="ace-settings-box clearfix" id="ace-settings-box">
                        <div class="pull-left width-50">
                            <!-- #section:settings.skins -->
                            <div class="ace-settings-item">
                                <div class="pull-left">
                                    <select id="skin-colorpicker" class="hide">
                                        <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                        <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                        <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                        <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                    </select>
                                </div>
                                <span>&nbsp; Escoja un color</span>
                            </div>

                            <!-- /section:settings.skins -->

                            <!-- #section:settings.navbar -->
                            <div class="ace-settings-item">

                                &nbsp;&nbsp; <label class="lbl" for="ace-settings-navbar">  <hr>       </label>
                            </div>

                            <!-- /section:settings.navbar -->



                            <!-- /section:settings.container -->
                        </div><!-- /.pull-left -->



                        <!-- /section:basics/sidebar.options -->
                    </div><!-- /.pull-left -->
                </div><!-- /.ace-settings-box -->
            </div><!-- /.ace-settings-container -->

            <!-- /section:settings.box -->
            <div class="row">
                <div class="col-xs-12">
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
    window.jQuery || document.write("<script src='js/jquery.js'>"+"<"+"/script>");
</script>

<script type="text/javascript">
    window.jQuery || document.write("<script src= {!! asset('js/jquery1x.js')!!}>"+"<"+"/script>");
</script>

<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src= {!! asset('js/jquery.mobile.custom.js')!!}>"+"<"+"/script>");
</script>
{!! Html::script('js/bootstrap.js') !!}


        <!-- page specific plugin scripts -->

<!-- ace scripts -->
{!! Html::script('js/ace/elements.scroller.js') !!}
{!! Html::script('js/ace/elements.colorpicker.js') !!}
{!! Html::script('js/ace/elements.fileinput.js') !!}
{!! Html::script('js/ace/elements.typeahead.js') !!}
{!! Html::script('js/ace/elements.wysiwyg.js') !!}
{!! Html::script('js/ace/elements.spinner.js') !!}
{!! Html::script('js/ace/elements.treeview.js') !!}
{!! Html::script('js/ace/elements.wizard.js') !!}
{!! Html::script('js/ace/elements.aside.js') !!}
{!! Html::script('js/ace/ace.js') !!}
{!! Html::script('js/ace/ace.ajax-content.js') !!}
{!! Html::script('js/ace/ace.touch-drag.js') !!}
{!! Html::script('js/ace/ace.sidebar.js') !!}
{!! Html::script('js/ace/ace.sidebar-scroll-1.js') !!}
{!! Html::script('js/ace/ace.submenu-hover.js') !!}
{!! Html::script('js/ace/ace.widget-box.js') !!}
{!! Html::script('js/ace/ace.settings.js') !!}
{!! Html::script('js/ace/ace.settings-rtl.js') !!}
{!! Html::script('js/ace/ace.settings-skin.js') !!}
{!! Html::script('js/ace/ace.widget-on-reload.js') !!}
{!! Html::script('js/ace/ace.searchbox-autocomplete.js') !!}

        <!-- inline scripts related to this page -->

<!-- the following scripts are used in demo only for onpage help and you don't need them -->
{!! Html::style('css/ace.onpage-help.css') !!}
{!! Html::style('js/themes/sunburst.css') !!}

<script type="text/javascript"> ace.vars['base'] = '..'; </script>
{!! Html::script('js/ace/elements.onpage-help.js') !!}
{!! Html::script('js/ace/ace.onpage-help.js') !!}
{!! Html::script('js/rainbow.js') !!}
{!! Html::script('js/language/generic.js') !!}
{!! Html::script('js/language/html.j') !!}
{!! Html::script('js/language/css.js') !!}
{!! Html::script('js/language/javascript.js') !!}

</body>
</html>

