    @extends('docente.base')

    @section('contenido')
     <div>
        <div class="col-md-1"></div>
        <div class= "col-md-10   widget-box">
            <div class="widget-header widget-header-blue widget-header-flat">
                <h4 class="widget-title lighter">Gestionar Notas  </h4>
            </div>

            <?php
                $cursos = array('8-3','7-5','4-4','11-3');
            ?>

            <div class="col-md-8">
                <br>
                {!! Form::open(['url' => 'docente/gestionar-notas', 'method' => 'post' ])   !!}

            <div class="form-group">
                <div class="col-md-6">
                {!! Form::label('Seleccione el Curso:')  !!}  {!! Form::select('curso',$cursos)  !!}
                </div>
                {!! Form::submit('Buscar',['class' => ' btn-primary'])  !!}
            </div>
                {!! Form::close()  !!}

            </div>

                   <div>
                       @if(isset($mostrarTabla))


                           <div class="row">
                               <div class="col-xs-12">
                                   <!-- PAGE CONTENT BEGINS -->
                                   <div class="well well-sm">
                                       Recomendaciones de uso....
                                   </div>


                                   <div id="grid-pager"></div>

                                   <script type="text/javascript">
                                       var $path_base = "../..";//in Ace demo this will be used for editurl parameter
                                   </script>

                                   <!-- PAGE CONTENT ENDS -->
                               </div><!-- /.col -->
                           </div><!-- /.row -->

                           <!-- page specific plugin scripts -->
                           <script type="text/javascript">
                               var scripts = [null,"../../../../public/js/date-time/bootstrap-datepicker.js","../../../../public/js/jqGrid/jquery.jqGrid.src.js","../../../../public/js/jqGrid/i18n/grid.locale-en.js", null]
                               $('.page-content-area').ace_ajax('loadScripts', scripts, function() {
                                   //inline scripts related to this page
                                   var grid_data =
                                           [
                                               {IdEstudiante:"1234234",Nombre:"Pepe", Cog1:"43",Cog2:"45",Cog3:"13",Cog4:"21",Cog5:"33",Act1:"43",Act2:"45",Act3:"13",Act4:"21",Act5:"33",Pro1:"43",Pro2:"45",Pro3:"13",Pro4:"21",Pro5:"33", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"Anastasia", Cog1:"34",Cog2:"46",Cog3:"31",Cog4:"12",Cog5:"33",Act1:"23",Act2:"44",Act3:"34",Act4:"31",Act5:"34",Pro1:"23",Pro2:"45",Pro3:"43",Pro4:"31",Pro5:"34", "Acumulado":34},
                                               {IdEstudiante:"1234234",Nombre:"Josele", Cog1:"23",Cog2:"25",Cog3:"23",Cog4:"31",Cog5:"23",Act1:"23",Act2:"25",Act3:"23",Act4:"21",Act5:"23",Pro1:"42",Pro2:"42",Pro3:"23",Pro4:"21",Pro5:"23", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"Maria", Cog1:"43",Cog2:"45",Cog3:"13",Cog4:"21",Cog5:"33",Act1:"43",Act2:"45",Act3:"13",Act4:"21",Act5:"33",Pro1:"43",Pro2:"45",Pro3:"13",Pro4:"21",Pro5:"33", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"Juan", Cog1:"23",Cog2:"25",Cog3:"23",Cog4:"31",Cog5:"23",Act1:"23",Act2:"25",Act3:"23",Act4:"21",Act5:"23",Pro1:"42",Pro2:"42",Pro3:"23",Pro4:"21",Pro5:"23", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"David", Cog1:"34",Cog2:"46",Cog3:"31",Cog4:"12",Cog5:"33",Act1:"23",Act2:"44",Act3:"34",Act4:"31",Act5:"34",Pro1:"23",Pro2:"45",Pro3:"43",Pro4:"31",Pro5:"34", "Acumulado":34},
                                               {IdEstudiante:"1234234",Nombre:"Felipe", Cog1:"43",Cog2:"45",Cog3:"13",Cog4:"21",Cog5:"33",Act1:"43",Act2:"45",Act3:"13",Act4:"21",Act5:"33",Pro1:"43",Pro2:"45",Pro3:"13",Pro4:"21",Pro5:"33", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"Santiago", Cog1:"34",Cog2:"46",Cog3:"31",Cog4:"12",Cog5:"33",Act1:"23",Act2:"44",Act3:"34",Act4:"31",Act5:"34",Pro1:"23",Pro2:"45",Pro3:"43",Pro4:"31",Pro5:"34", "Acumulado":34},
                                               {IdEstudiante:"1234234",Nombre:"Yerson", Cog1:"23",Cog2:"25",Cog3:"23",Cog4:"31",Cog5:"23",Act1:"23",Act2:"25",Act3:"23",Act4:"21",Act5:"23",Pro1:"42",Pro2:"42",Pro3:"23",Pro4:"21",Pro5:"23", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"Kharen", Cog1:"43",Cog2:"45",Cog3:"13",Cog4:"21",Cog5:"33",Act1:"43",Act2:"45",Act3:"13",Act4:"21",Act5:"33",Pro1:"43",Pro2:"45",Pro3:"13",Pro4:"21",Pro5:"33", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"Lina", Cog1:"23",Cog2:"25",Cog3:"23",Cog4:"31",Cog5:"23",Act1:"23",Act2:"25",Act3:"23",Act4:"21",Act5:"23",Pro1:"42",Pro2:"42",Pro3:"23",Pro4:"21",Pro5:"23", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"Lizet", Cog1:"34",Cog2:"46",Cog3:"31",Cog4:"12",Cog5:"33",Act1:"23",Act2:"44",Act3:"34",Act4:"31",Act5:"34",Pro1:"23",Pro2:"45",Pro3:"43",Pro4:"31",Pro5:"34", "Acumulado":34},
                                               {IdEstudiante:"1234234",Nombre:"Sergio", Cog1:"43",Cog2:"45",Cog3:"13",Cog4:"21",Cog5:"33",Act1:"43",Act2:"45",Act3:"13",Act4:"21",Act5:"33",Pro1:"43",Pro2:"45",Pro3:"13",Pro4:"21",Pro5:"33", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"Zulma", Cog1:"34",Cog2:"46",Cog3:"31",Cog4:"12",Cog5:"33",Act1:"23",Act2:"44",Act3:"34",Act4:"31",Act5:"34",Pro1:"23",Pro2:"45",Pro3:"43",Pro4:"31",Pro5:"34", "Acumulado":34},
                                               {IdEstudiante:"1234234",Nombre:"Camila", Cog1:"23",Cog2:"25",Cog3:"23",Cog4:"31",Cog5:"23",Act1:"23",Act2:"25",Act3:"23",Act4:"21",Act5:"23",Pro1:"42",Pro2:"42",Pro3:"23",Pro4:"21",Pro5:"23", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"Fernanda", Cog1:"43",Cog2:"45",Cog3:"13",Cog4:"21",Cog5:"33",Act1:"43",Act2:"45",Act3:"13",Act4:"21",Act5:"33",Pro1:"43",Pro2:"45",Pro3:"13",Pro4:"21",Pro5:"33", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"Juan", Cog1:"23",Cog2:"25",Cog3:"23",Cog4:"31",Cog5:"23",Act1:"23",Act2:"25",Act3:"23",Act4:"21",Act5:"23",Pro1:"42",Pro2:"42",Pro3:"23",Pro4:"21",Pro5:"23", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"David", Cog1:"34",Cog2:"46",Cog3:"31",Cog4:"12",Cog5:"33",Act1:"23",Act2:"44",Act3:"34",Act4:"31",Act5:"34",Pro1:"23",Pro2:"45",Pro3:"43",Pro4:"31",Pro5:"34", "Acumulado":34},
                                               {IdEstudiante:"1234234",Nombre:"Pepe", Cog1:"43",Cog2:"45",Cog3:"13",Cog4:"21",Cog5:"33",Act1:"43",Act2:"45",Act3:"13",Act4:"21",Act5:"33",Pro1:"43",Pro2:"45",Pro3:"13",Pro4:"21",Pro5:"33", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"Anastasia", Cog1:"34",Cog2:"46",Cog3:"31",Cog4:"12",Cog5:"33",Act1:"23",Act2:"44",Act3:"34",Act4:"31",Act5:"34",Pro1:"23",Pro2:"45",Pro3:"43",Pro4:"31",Pro5:"34", "Acumulado":34},
                                               {IdEstudiante:"1234234",Nombre:"Juan", Cog1:"23",Cog2:"25",Cog3:"23",Cog4:"31",Cog5:"23",Act1:"23",Act2:"25",Act3:"23",Act4:"21",Act5:"23",Pro1:"42",Pro2:"42",Pro3:"23",Pro4:"21",Pro5:"23", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"David", Cog1:"34",Cog2:"46",Cog3:"31",Cog4:"12",Cog5:"33",Act1:"23",Act2:"44",Act3:"34",Act4:"31",Act5:"34",Pro1:"23",Pro2:"45",Pro3:"43",Pro4:"31",Pro5:"34", "Acumulado":34},
                                               {IdEstudiante:"1234234",Nombre:"Felipe", Cog1:"43",Cog2:"45",Cog3:"13",Cog4:"21",Cog5:"33",Act1:"43",Act2:"45",Act3:"13",Act4:"21",Act5:"33",Pro1:"43",Pro2:"45",Pro3:"13",Pro4:"21",Pro5:"33", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"Santiago", Cog1:"34",Cog2:"46",Cog3:"31",Cog4:"12",Cog5:"33",Act1:"23",Act2:"44",Act3:"34",Act4:"31",Act5:"34",Pro1:"23",Pro2:"45",Pro3:"43",Pro4:"31",Pro5:"34", "Acumulado":34},
                                               {IdEstudiante:"1234234",Nombre:"Yerson", Cog1:"23",Cog2:"25",Cog3:"23",Cog4:"31",Cog5:"23",Act1:"23",Act2:"25",Act3:"23",Act4:"21",Act5:"23",Pro1:"42",Pro2:"42",Pro3:"23",Pro4:"21",Pro5:"23", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"Kharen", Cog1:"43",Cog2:"45",Cog3:"13",Cog4:"21",Cog5:"33",Act1:"43",Act2:"45",Act3:"13",Act4:"21",Act5:"33",Pro1:"43",Pro2:"45",Pro3:"13",Pro4:"21",Pro5:"33", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"Lina", Cog1:"23",Cog2:"25",Cog3:"23",Cog4:"31",Cog5:"23",Act1:"23",Act2:"25",Act3:"23",Act4:"21",Act5:"23",Pro1:"42",Pro2:"42",Pro3:"23",Pro4:"21",Pro5:"23", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"Lizet", Cog1:"34",Cog2:"46",Cog3:"31",Cog4:"12",Cog5:"33",Act1:"23",Act2:"44",Act3:"34",Act4:"31",Act5:"34",Pro1:"23",Pro2:"45",Pro3:"43",Pro4:"31",Pro5:"34", "Acumulado":34},
                                               {IdEstudiante:"1234234",Nombre:"Sergio", Cog1:"43",Cog2:"45",Cog3:"13",Cog4:"21",Cog5:"33",Act1:"43",Act2:"45",Act3:"13",Act4:"21",Act5:"33",Pro1:"43",Pro2:"45",Pro3:"13",Pro4:"21",Pro5:"33", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"Zulma", Cog1:"34",Cog2:"46",Cog3:"31",Cog4:"12",Cog5:"33",Act1:"23",Act2:"44",Act3:"34",Act4:"31",Act5:"34",Pro1:"23",Pro2:"45",Pro3:"43",Pro4:"31",Pro5:"34", "Acumulado":34},
                                               {IdEstudiante:"1234234",Nombre:"Camila", Cog1:"23",Cog2:"25",Cog3:"23",Cog4:"31",Cog5:"23",Act1:"23",Act2:"25",Act3:"23",Act4:"21",Act5:"23",Pro1:"42",Pro2:"42",Pro3:"23",Pro4:"21",Pro5:"23", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"Fernanda", Cog1:"43",Cog2:"45",Cog3:"13",Cog4:"21",Cog5:"33",Act1:"43",Act2:"45",Act3:"13",Act4:"21",Act5:"33",Pro1:"43",Pro2:"45",Pro3:"13",Pro4:"21",Pro5:"33", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"Juan", Cog1:"23",Cog2:"25",Cog3:"23",Cog4:"31",Cog5:"23",Act1:"23",Act2:"25",Act3:"23",Act4:"21",Act5:"23",Pro1:"42",Pro2:"42",Pro3:"23",Pro4:"21",Pro5:"23", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"David", Cog1:"34",Cog2:"46",Cog3:"31",Cog4:"12",Cog5:"33",Act1:"23",Act2:"44",Act3:"34",Act4:"31",Act5:"34",Pro1:"23",Pro2:"45",Pro3:"43",Pro4:"31",Pro5:"34", "Acumulado":34},
                                               {IdEstudiante:"1234234",Nombre:"Pepe", Cog1:"43",Cog2:"45",Cog3:"13",Cog4:"21",Cog5:"33",Act1:"43",Act2:"45",Act3:"13",Act4:"21",Act5:"33",Pro1:"43",Pro2:"45",Pro3:"13",Pro4:"21",Pro5:"33", "Acumulado":39},
                                               {IdEstudiante:"1234234",Nombre:"Anastasia", Cog1:"34",Cog2:"46",Cog3:"31",Cog4:"12",Cog5:"33",Act1:"23",Act2:"44",Act3:"34",Act4:"31",Act5:"34",Pro1:"23",Pro2:"45",Pro3:"43",Pro4:"31",Pro5:"34", "Acumulado":34},



                                           ];



                                   jQuery(function($) {
                                       var grid_selector = "#grid-table";
                                       var pager_selector = "#grid-pager";

                                       //resize to fit page size
                                       $(window).on('resize.jqGrid', function () {
                                           $(grid_selector).jqGrid( 'setGridWidth', $(".page-content").width() );
                                       })
                                       //resize on sidebar collapse/expand
                                       var parent_column = $(grid_selector).closest('[class*="col-"]');
                                       $(document).on('settings.ace.jqGrid' , function(ev, event_name, collapsed) {
                                           if( event_name === 'sidebar_collapsed' || event_name === 'main_container_fixed' ) {
                                               //setTimeout is for webkit only to give time for DOM changes and then redraw!!!
                                               setTimeout(function() {
                                                   $(grid_selector).jqGrid( 'setGridWidth', parent_column.width() );
                                               }, 0);
                                           }
                                       })

                                       //if your grid is inside another element, for example a tab pane, you should use its parent's width:
                                       /**
                                        $(window).on('resize.jqGrid', function () {
			var parent_width = $(grid_selector).closest('.tab-pane').width();
			$(grid_selector).jqGrid( 'setGridWidth', parent_width );
		})
                                        //and also set width when tab pane becomes visible
                                        $('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		  if($(e.target).attr('href') == '#mygrid') {
			var parent_width = $(grid_selector).closest('.tab-pane').width();
			$(grid_selector).jqGrid( 'setGridWidth', parent_width );
		  }
		})
                                        */





                                       jQuery(grid_selector).jqGrid({
                                           //direction: "rtl",

                                           //subgrid options
                                           subGrid : true,
                                           //subGridModel: [{ name : ['No','Item Name','Qty'], width : [55,200,80] }],
                                           //datatype: "xml",
                                           subGridOptions : {
                                               plusicon : "ace-icon fa fa-plus center bigger-110 blue",
                                               minusicon  : "ace-icon fa fa-minus center bigger-110 blue",
                                               openicon : "ace-icon fa fa-chevron-right center orange"
                                           },
                                           //for this example we are using local data



                                           data: grid_data,
                                           datatype: "local",
                                           height: 250,
                                           colNames:[' Acciones', 'IdEstudiante', 'Nombre ','Cog1', 'Cog2', 'Cog3', 'Cog4','Cog5','Act1', 'Act2', 'Act3', 'Act4','Act5', 'Pro1', 'Pro2', 'Pro3', 'Pro4','Pro5','Acumulado' ],
                                           colModel:[
                                               {name:'myac',index:'', width:80, fixed:true, sortable:false, resize:false,
                                                   formatter:'actions',
                                                   formatoptions:{
                                                       keys:true,
                                                       //delbutton: false,//disable delete button

                                                       delOptions:{recreateForm: true, beforeShowForm:beforeDeleteCallback},
                                                       //editformbutton:true, editOptions:{recreateForm: true, beforeShowForm:beforeEditCallback}
                                                   }
                                               },
                                               {name:'IdEstudiante',index:'IdEstudiante', width:25, sorttype:"int", editable: false},
                                               {name:'Nombre', width:60, sortable:false, editable: false},
                                               {name:'Cog1', width:15, sortable:true, editable: true },
                                               {name:'Cog2', width:15, sortable:true, editable: true },
                                               {name:'Cog3', width:15, sortable:true, editable: true },
                                               {name:'Cog4', width:15, sortable:true, editable: true },
                                               {name:'Cog5', width:15, sortable:true, editable: true },
                                               {name:'Act1', width:15, sortable:true, editable: true },
                                               {name:'Act2', width:15, sortable:true, editable: true },
                                               {name:'Act3', width:15, sortable:true, editable: true },
                                               {name:'Act4', width:15, sortable:true, editable: true },
                                               {name:'Act5', width:15, sortable:true, editable: true },
                                               {name:'Pro1', width:15, sortable:true, editable: true },
                                               {name:'Pro2', width:15, sortable:true, editable: true },
                                               {name:'Pro3', width:15, sortable:true, editable: true },
                                               {name:'Pro4', width:15, sortable:true, editable: true },
                                               {name:'Pro5', width:15, sortable:true, editable: true },
                                               {name:'Acumulado', width:30, sortable:true, editable: false }


                                           ],

                                           viewrecords : true,
                                           rowNum:40,
                                           rowList:[10,20,30],
                                           pager : pager_selector,
                                           altRows: true,
                                           toppager: true,

                                           multiselect: true,
                                           //multikey: "ctrlKey",
                                           multiboxonly: true,

                                           loadComplete : function() {
                                               var table = this;
                                               setTimeout(function(){
                                                   styleCheckbox(table);

                                                   updateActionIcons(table);
                                                   updatePagerIcons(table);
                                                   enableTooltips(table);
                                               }, 0);
                                           },

                                           //editurl: "/dummy.html",//nothing is saved
                                           caption: "Notas del Curso"

                                           //,autowidth: true,


                                           /**
                                            ,
                                            grouping:true,
                                            groupingView : {
				 groupField : ['name'],
				 groupDataSorted : true,
				 plusicon : 'fa fa-chevron-down bigger-110',
				 minusicon : 'fa fa-chevron-up bigger-110'
			},
                                            caption: "Grouping"
                                            */

                                       });
                                       $(window).triggerHandler('resize.jqGrid');//trigger window resize to make the grid get the correct size



                                       //enable search/filter toolbar
                                       //jQuery(grid_selector).jqGrid('filterToolbar',{defaultSearch:true,stringResult:true})
                                       //jQuery(grid_selector).filterToolbar({});


                                       //switch element when editing inline
                                       function aceSwitch( cellvalue, options, cell ) {
                                           setTimeout(function(){
                                               $(cell) .find('input[type=checkbox]')
                                                       .addClass('ace ace-switch ace-switch-5')
                                                       .after('<span class="lbl"></span>');
                                           }, 0);
                                       }
                                       //enable datepicker
                                       function pickDate( cellvalue, options, cell ) {
                                           setTimeout(function(){
                                               $(cell) .find('input[type=text]')
                                                       .datepicker({format:'yyyy-mm-dd' , autoclose:true});
                                           }, 0);
                                       }


                                       //navButtons
                                       jQuery(grid_selector).jqGrid('navGrid',pager_selector,
                                               { 	//navbar options
                                                   edit: true,
                                                   editicon : 'ace-icon fa fa-pencil blue',
                                                   add: true,
                                                   addicon : 'ace-icon fa fa-plus-circle purple',
                                                   del: true,
                                                   delicon : 'ace-icon fa fa-trash-o red',
                                                   search: true,
                                                   searchicon : 'ace-icon fa fa-search orange',
                                                   refresh: true,
                                                   refreshicon : 'ace-icon fa fa-refresh green',
                                                   view: true,
                                                   viewicon : 'ace-icon fa fa-search-plus grey',
                                               },
                                               {
                                                   //edit record form
                                                   //closeAfterEdit: true,
                                                   //width: 700,
                                                   recreateForm: true,
                                                   beforeShowForm : function(e) {
                                                       var form = $(e[0]);
                                                       form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
                                                       style_edit_form(form);
                                                   }
                                               },
                                               {
                                                   //new record form
                                                   //width: 700,
                                                   closeAfterAdd: true,
                                                   recreateForm: true,
                                                   viewPagerButtons: false,
                                                   beforeShowForm : function(e) {
                                                       var form = $(e[0]);
                                                       form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar')
                                                               .wrapInner('<div class="widget-header" />')
                                                       style_edit_form(form);
                                                   }
                                               },
                                               {
                                                   //delete record form
                                                   recreateForm: true,
                                                   beforeShowForm : function(e) {
                                                       var form = $(e[0]);
                                                       if(form.data('styled')) return false;

                                                       form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
                                                       style_delete_form(form);

                                                       form.data('styled', true);
                                                   },
                                                   onClick : function(e) {
                                                       //alert(1);
                                                   }
                                               },
                                               {
                                                   //search form
                                                   recreateForm: true,
                                                   afterShowSearch: function(e){
                                                       var form = $(e[0]);
                                                       form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />')
                                                       style_search_form(form);
                                                   },
                                                   afterRedraw: function(){
                                                       style_search_filters($(this));
                                                   }
                                                   ,
                                                   multipleSearch: true,
                                                   /**
                                                    multipleGroup:true,
                                                    showQuery: true
                                                    */
                                               },
                                               {
                                                   //view record form
                                                   recreateForm: true,
                                                   beforeShowForm: function(e){
                                                       var form = $(e[0]);
                                                       form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />')
                                                   }
                                               }
                                       )



                                       function style_edit_form(form) {
                                           //enable datepicker on "sdate" field and switches for "stock" field
                                           form.find('input[name=sdate]').datepicker({format:'yyyy-mm-dd' , autoclose:true})

                                           form.find('input[name=stock]').addClass('ace ace-switch ace-switch-5').after('<span class="lbl"></span>');
                                           //don't wrap inside a label element, the checkbox value won't be submitted (POST'ed)
                                           //.addClass('ace ace-switch ace-switch-5').wrap('<label class="inline" />').after('<span class="lbl"></span>');


                                           //update buttons classes
                                           var buttons = form.next().find('.EditButton .fm-button');
                                           buttons.addClass('btn btn-sm').find('[class*="-icon"]').hide();//ui-icon, s-icon
                                           buttons.eq(0).addClass('btn-primary').prepend('<i class="ace-icon fa fa-check"></i>');
                                           buttons.eq(1).prepend('<i class="ace-icon fa fa-times"></i>')

                                           buttons = form.next().find('.navButton a');
                                           buttons.find('.ui-icon').hide();
                                           buttons.eq(0).append('<i class="ace-icon fa fa-chevron-left"></i>');
                                           buttons.eq(1).append('<i class="ace-icon fa fa-chevron-right"></i>');
                                       }

                                       function style_delete_form(form) {
                                           var buttons = form.next().find('.EditButton .fm-button');
                                           buttons.addClass('btn btn-sm btn-white btn-round').find('[class*="-icon"]').hide();//ui-icon, s-icon
                                           buttons.eq(0).addClass('btn-danger').prepend('<i class="ace-icon fa fa-trash-o"></i>');
                                           buttons.eq(1).addClass('btn-default').prepend('<i class="ace-icon fa fa-times"></i>')
                                       }

                                       function style_search_filters(form) {
                                           form.find('.delete-rule').val('X');
                                           form.find('.add-rule').addClass('btn btn-xs btn-primary');
                                           form.find('.add-group').addClass('btn btn-xs btn-success');
                                           form.find('.delete-group').addClass('btn btn-xs btn-danger');
                                       }
                                       function style_search_form(form) {
                                           var dialog = form.closest('.ui-jqdialog');
                                           var buttons = dialog.find('.EditTable')
                                           buttons.find('.EditButton a[id*="_reset"]').addClass('btn btn-sm btn-info').find('.ui-icon').attr('class', 'ace-icon fa fa-retweet');
                                           buttons.find('.EditButton a[id*="_query"]').addClass('btn btn-sm btn-inverse').find('.ui-icon').attr('class', 'ace-icon fa fa-comment-o');
                                           buttons.find('.EditButton a[id*="_search"]').addClass('btn btn-sm btn-purple').find('.ui-icon').attr('class', 'ace-icon fa fa-search');
                                       }

                                       function beforeDeleteCallback(e) {
                                           var form = $(e[0]);
                                           if(form.data('styled')) return false;

                                           form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
                                           style_delete_form(form);

                                           form.data('styled', true);
                                       }

                                       function beforeEditCallback(e) {
                                           var form = $(e[0]);
                                           form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
                                           style_edit_form(form);
                                       }



                                       //it causes some flicker when reloading or navigating grid
                                       //it may be possible to have some custom formatter to do this as the grid is being created to prevent this
                                       //or go back to default browser checkbox styles for the grid
                                       function styleCheckbox(table) {
                                           /**
                                            $(table).find('input:checkbox').addClass('ace')
                                            .wrap('<label />')
                                            .after('<span class="lbl align-top" />')


                                            $('.ui-jqgrid-labels th[id*="_cb"]:first-child')
                                            .find('input.cbox[type=checkbox]').addClass('ace')
                                            .wrap('<label />').after('<span class="lbl align-top" />');
                                            */
                                       }


                                       //unlike navButtons icons, action icons in rows seem to be hard-coded
                                       //you can change them like this in here if you want
                                       function updateActionIcons(table) {
                                           /**
                                            var replacement =
                                            {
                                                'ui-ace-icon fa fa-pencil' : 'ace-icon fa fa-pencil blue',
                                                'ui-ace-icon fa fa-trash-o' : 'ace-icon fa fa-trash-o red',
                                                'ui-icon-disk' : 'ace-icon fa fa-check green',
                                                'ui-icon-cancel' : 'ace-icon fa fa-times red'
                                            };
                                            $(table).find('.ui-pg-div span.ui-icon').each(function(){
				var icon = $(this);
				var $class = $.trim(icon.attr('class').replace('ui-icon', ''));
				if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
			})
                                            */
                                       }

                                       //replace icons with FontAwesome icons like above
                                       function updatePagerIcons(table) {
                                           var replacement =
                                           {
                                               'ui-icon-seek-first' : 'ace-icon fa fa-angle-double-left bigger-140',
                                               'ui-icon-seek-prev' : 'ace-icon fa fa-angle-left bigger-140',
                                               'ui-icon-seek-next' : 'ace-icon fa fa-angle-right bigger-140',
                                               'ui-icon-seek-end' : 'ace-icon fa fa-angle-double-right bigger-140'
                                           };
                                           $('.ui-pg-table:not(.navtable) > tbody > tr > .ui-pg-button > .ui-icon').each(function(){
                                               var icon = $(this);
                                               var $class = $.trim(icon.attr('class').replace('ui-icon', ''));

                                               if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
                                           })
                                       }

                                       function enableTooltips(table) {
                                           $('.navtable .ui-pg-button').tooltip({container:'body'});
                                           $(table).find('.ui-pg-div').tooltip({container:'body'});
                                       }

                                       //var selr = jQuery(grid_selector).jqGrid('getGridParam','selrow');

                                       $(document).one('ajaxloadstart.page', function(e) {
                                           $(grid_selector).jqGrid('GridUnload');
                                           $('.ui-jqdialog').remove();
                                       });
                                   });
                               });
                           </script>







                       @endif
                   </div>


        </div>
     </div>



    @endsection