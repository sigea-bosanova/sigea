<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Inicio de Sesión SigeaBosaNova</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		{!! Html::style('css/bootstrap.css') !!}
		{!! Html::style('css/font-awesome.css') !!}
		{!! Html::style('css/ace-fonts.css') !!}
		{!! Html::style('css/ace.css') !!}
		{!! Html::style('css/ace-part2.css') !!}
		{!! Html::style('css/ace-rtl.css') !!}
		{!! Html::style('css/ace-ie.css') !!}
		{!! Html::script('js/html5shiv.js') !!}
		{!! Html::script('js/respond.js') !!}



	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-laptop green"></i>
									<span class="red">Sigea</span>
									<span class="white" id="id-text2">BosaNova</span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy; UDFT</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-user green"></i>
												Inicio de Sesión
											</h4>

											<div class="space-6"></div>

											<form method="post" onsubmit="return validacion(this)">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" id="txt_Usuario" class="form-control"  onkeypress="return justNumbers(event);" placeholder="Digite su Usuario" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>
													<script>
														function justNumbers(e)
														{
															var keynum = window.event ? window.event.keyCode : e.which;
															if ((keynum == 8) || (keynum == 46))
																return true;

															return /\d/.test(String.fromCharCode(keynum));
														}


														function validacion(f){
															var txt_Usuario = f.txt_Usuario.value;
															var txt_Clave = f.txt_Clave.value;
															if(txt_Usuario==''){
																alert('No deje el usuario vacio');
																return false;
															}else
															if(txt_Clave =='')
															{
																alert('No deje la contraseña vacia');
																return false;
															}
															else {
																f.submit();
															}
														}
													</script>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" id="txt_Contraseña" class="form-control" placeholder="Digite su Contraseña" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>
										            	<button type="submit" onsubmit="" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-circle-o"></i>
															<span class="bigger-110">Entrar</span>
														</button>


													<div class="space-4"></div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar clearfix">
											<div>
												<a href="#" data-target="#forgot-box" class="forgot-password-link">
													<i class="ace-icon fa fa-arrow-left"></i>
													A cerca de
												</a>
											</div>

											<div>
												<a href="#" data-target="#signup-box" class="user-signup-link">
													Creditos
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-home"></i>
												Sigea BosaNova
											</h4>

											<div class="space-6"></div>
											<p>
												Sigea BosaNova es un sistema de gestion academica el cual tiene como fin de dar a conocer
												la situacion academica de los alumnos del colegio Bosa Nova
											</p>


										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												Regresar al inicio de sesión
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->

								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="ace-icon fa fa-users blue"></i>
												Creditos
											</h4>

											<div class="space-6"></div>
											<div class="space-6"></div>
											<p>
												Juan Jose Medina Sarmiento<br><br>
												David Stiven Araque Agudelo<br><br><br>

												Estudiantes de Tecnologia en Sistematizacion de Datos
												Universidad Distrital Francisco Jose de Caldas -
												Facultad tecnologica
											</p>
										</div>

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												Regresar al inicio de sesión
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->

							<div class="navbar-fixed-top align-right">
								<br />
								&nbsp;
								<a id="btn-login-dark" href="#">Negro</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-blur" href="#">Azul</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-light" href="#">Blanco</a>
								&nbsp; &nbsp; &nbsp;
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src = {!! asset('js/jquery.js')!!} >"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src = {!! asset('/js/jquery1x.js') !!} >"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src = {!! asset('js/jquery.mobile.custom.js')!!}  >"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
	</body>
</html>
