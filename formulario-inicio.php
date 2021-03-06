<?php 
	@session_start();
	require_once('../core_nufarm/libs.php');
	// Auth::check();
 ?>
<!DOCTYPE html>
<html lang="en" ng-app="Nufarm">
<head>
	<meta charset="UTF-8">
	<title>Formulario - inicio</title>
	<!-- CSS de Bootstrap -->
	<link href="assets/bootstrap-3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/bootstrap-3.3.4/css/bootstrap-social.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="assets/css/estilos.css">

</head>
<body>
<div class="container-fluid" id="select">
	
	<div class="col-xs-12 head">
		<div class="inner">
			<div class="col-xs-6">
				<img src="assets/images/logo-green.png" id="Nufarm Gold" title="Nufarm Gold" alt="Imagen no encontrada">
				<img src="assets/images/logo-white.png" id="Nufarm" title="Nufarm" alt="Imagen no encontrada">
			</div>
		</div>
	</div>


	<div class="col-xs-12 bg">
		<div class="inner">
			<div id="app-form">
				<div class="form-header">
					<p>
						confirmar datos
						<br>
						<span>
							para recibir los productos canjeados.
						</span>
					</p>
				</div>
				
				<div class="form-steps">
					<span class="active">
						1
					</span>
					<p>
						&nbsp;
					</p>
					<span>
						2
					</span>
					<p>
						&nbsp;
					</p>
					<span>
						3
					</span>
					<p>
						&nbsp;
					</p>
					<span>
						4
					</span>
				</div>

				<section ng-controller="ctrlAppInicio" id="step1">
					<div class="row">
						<div class="col-xs-12">
							<p class="group-title">
								Domicio Entrega
							</p>
						</div>

						<div class="col-xs-6">
							<div class="form-group">
								<label for="">Empresa</label>
								<input type="text" ng-model="company">
							</div>

							<div class="form-group">
								<label for="">Nombre</label>
								<input type="text" ng-model="name">
							</div>

							<div class="form-group">
								<label for="">Apellido</label>
								<input type="text" ng-model="lastname">
							</div>

							<div class="form-group">
								<label for="">Telefono</label>
								<input type="text" ng-model="phone">
							</div>
						</div>

						<div class="col-xs-6">
							<div class="form-group">
								<label for="">Direccion</label>
								<input type="text" ng-model="direction">
							</div>
							
							<div class="form-group">
								<label for="">Ciudad</label>
								<input type="text" ng-model="city">
							</div>

							<div class="form-group">
								<label for="">Codigo Postal</label>
								<input type="text" ng-model="cod">
							</div>

							<div class="form-group">
								<label for="">Provincia</label>
								<div class="custom-select">
									<select name="" id="" ng-model="province" ng-options=" item for item in optionProvinces">
										<option value="">Seleccionar provincia</option>
									</select>
									<i class="fa fa-caret-down"></i>
								</div>
							</div>	
						</div>
					
						<div class="col-xs-12 confirm-btn">
							<input type="submit" value="guardar datos" ng-click="basics();">
						</div>


						<form ng-submit="uploadLogo();">
							<div class="col-xs-12">
								<p class="group-title">
									Logo de empresa
								</p>
							</div>

							<div class="col-xs-12 new-logo">
								<div class="row">
									<div class="col-xs-6 curr-logo">
										<label>
											logo guardado:
										</label>
										<div class="logo-display">
											<img ng-src="{{logoEmpresa}}" preloader-img alt="">
										</div>
									</div>
									<div class="col-xs-6 logo-pick">
										<label>seleccionar archivo de imagen</label>
										<input type="text" value="nombre de imagen" preloader-text id="img-name">
										<input type="file" name="logo" accept="image/*" preloader-input nv-file-select uploader="logo" id="img-upload">
										<input type="submit" value="subir imagen">
									</div>
								</div>
							</div>
						</form>

						<form ng-cloak>
							<div class="col-xs-12">
								<p class="group-title">
									otros archivos del logo de empresa <span>(opcional)</span>
								</p>
							</div>
							<div class="col-xs-12 optional-logo">
								<ul ng-repeat="(key, value) in otherFiles.queue | filter:addAlias">
									<li>
										<div>
											{{value.file.name}} <br> <button ng-click="value.upload();">Upload</button> <br> <button ng-click="value.remove();">Delete</button>
										</div>
									</li>
								</ul>
								<label>seleccionar archivo en jpg, psd, ai, cdr, pdf, png o gif</label>
								<input type="text" value="Examinar..." preloader-text id="other-name">
								<input type="file" nv-file-select uploader="otherFiles" id="other-upload">
								<br clear="all">
								<button ng-click="ver();">Ver scope</button>
							</div>
						</form>

						<div class="col-xs-12 confirm-btn">
							<button id="next-step">Confirmar</button>
						</div>
					</div><!-- end row -->
				</section><!-- end section 1 -->

				<section ng-controller="ctrlAppTwo" id="step2">
					<div class="col-xs-12">
						<p class="group-title">
							Datos de usuarios
						</p>
					</div>

					<div class="col-xs-6">
						<div class="form-group">
							<label for="">Nombre</label>
							<input type="text" ng-model="name">
						</div>

						<div class="form-group">
							<label for="">Apellido</label>
							<input type="text" ng-model="lastName">
						</div>

						<div class="form-group">
							<label for="">Fecha de nacimiento</label>
							<input type="text" ng-model="birthday">
						</div>

						<div class="form-group email">
							<label for="">Email</label>
							<input type="text" ng-model="mail">
							<p>Complete formato email.</p>
						</div>
					</div>

					<div class="col-xs-6">
						<div class="form-group">
							<label for="">Cargo</label>
							<input type="text" ng-model="appointment">
						</div>

						<div class="form-group">
							<label for="">Numero de celular</label>
							<input type="text" ng-model="cellphone">
						</div>

						<div class="form-group">
							<label for="">Compania</label>
							<input type="text" ng-model="company">
						</div>

						<div class="form-group">
							<label for="">Desea recibir comunicados por sms</label>
							<input type="radio" name="radiog_lite" id="radio1" class="css-checkbox" ng-model="sms"/>
							<label for="radio1" class="css-label radGroup1">Sí, deseo recibir SMS</label>
						</div>
					</div>

					<div class="col-xs-12 confirm-btn">
						<input type="submit" value="Guardar" ng-click="submitData();">
					</div>

					<div class="col-xs-12">
						<p class="group-title">
							acceso: usuario y clave
						</p>
					</div>

					<div class="col-xs-6">
						<div class="form-group email">
							<label for="">Usuario</label>
							<input type="text" ng-model="mail" disabled="">
							<p>Complete formato email.</p>
						</div>
					</div>

					<div class="col-xs-6">
						<div class="form-group">
							<label for="">Cambiar Clave</label>
							<input type="password" ng-model="password">
						</div>
					</div>

					<div class="col-xs-12 confirm-btn">
						<input type="submit" value="Guardar" ng-click="editPassword()" id="next-step">	
					</div>
				</section><!-- end section 2 -->

				<section ng-controller="ctrlAppThree" class="activities" id="step3">
					<div class="col-xs-12">
						<p class="group-title">
							Datos de usuario
						</p>
					</div>

					<div class="col-xs-12">
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label>
										Deportes de preferencia
									</label>
									<ul class="custom-checks">
										<li ng-repeat="(key,item) in sports">
											<input type="checkbox" name="sport{{$index + 1}}" id="sport{{$index + 1}}" class="css-checkbox" ng-model="sports[key]"/>
											<label for="sport{{$index + 1}}" class="check-label">{{key}}</label>
										</li>
									</ul>
								</div>

							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label>
										Equipo de Futbol
									</label>
									
									<div class="custom-select">
										<select name="" id="" ng-model="userFutbol" ng-options="value for value in futbol">
											<option value="">Seleccione su equipo de futbol</option>
										</select>
										<i class="fa fa-caret-down"></i>
									</div>
								</div>

								<div class="form-group f-team">
									<label>
										otro
									</label>
									<input type="text">
									<input type="submit" ng-click="editPreferences()">
								</div>

							</div>
						</div>
						
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label>
										Actividades recreativas
									</label>
									<ul class="custom-checks">
										<li ng-repeat="(key,item) in actividades">
											<input type="checkbox" name="activity{{$index + 1}}" id="activity{{$index + 1}}" class="css-checkbox" ng-model="actividades[key]"/>
											<label for="activity{{$index + 1}}" class="check-label">{{key}}</label>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label>
										Redes Sociales
									</label>
									<ul class="custom-checks">
										<li ng-repeat="(key,item) in social">
											<input type="checkbox" name="social{{$index + 1}}" id="social{{$index + 1}}" class="css-checkbox" ng-model="social[key]"/>
											<label for="social{{$index + 1}}" class="check-label">{{key}}</label>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-8">
								<div class="form-group o-activities">
									<label>
										Otras activades
									</label>
									<ul>
										<li ng-repeat="(key, value) in other_activity">{{value}} <button>Borrar</button> </li>
									</ul>
									<input type="text">
									<button id="next-step">Agregar</button>
								</div>
							</div>
							<div class="col-xs-12 confirm-btn">
								<button id="next-step">Confirmar</button>
							</div>
						</div>
					</div>
				</section><!-- end section 3 -->

				<section ng-controller="ctrlAppFourth" id="step4">
					<div class="col-xs-12">
						<p class="group-title">
							datos de empresa
						</p>
					</div>

					<div class="col-xs-6">
						<div class="form-group">
							<label for="">Empresa</label>
							<input type="text" ng-model="company">
						</div>
						<div class="form-group">
							<label for="">Telefono</label>
							<input type="text" ng-model="phone">
						</div>
						<div class="form-group">
							<label for="">Direccion</label>
							<input type="text" ng-model="direction">
						</div>
					</div>

					<div class="col-xs-6">
						<div class="form-group">
							<label for="">Codigo Postal</label>
							<input type="text" ng-model="cp">
						</div>
						<div class="form-group">
							<label for="">Ciudad</label>
							<input type="text" ng-model="city">
						</div>
						<div class="form-group">
							<label for="">Provincia</label>
							<div class="custom-select">
								<select name="" id="" ng-model="province" ng-options=" item for item in optionProvinces">
									<option value="">Seleccionar provincia</option>
								</select>
								<i class="fa fa-caret-down"></i>
							</div>
						</div>
					</div>

					<div class="col-xs-6">
						<p class="group-title">
							vendedor 1
						</p>

						<div class="form-group">
							<label for="">nombre</label>
							<input type="text">
						</div>
						<div class="form-group">
							<label for="">email</label>
							<input type="text">
						</div>
						<div class="form-group">
							<label for="">celular</label>
							<input type="text">
						</div>

					</div>

					<div class="col-xs-6">
						<p class="group-title">
							vendedor 2
						</p>

						<div class="form-group">
							<label for="">nombre</label>
							<input type="text">
						</div>
						<div class="form-group">
							<label for="">email</label>
							<input type="text">
						</div>
						<div class="form-group">
							<label for="">celular</label>
							<input type="text">
						</div>
						
					</div>

					<div class="col-xs-6" ng-repeat="(key, value) in seller">
						<p class="group-title">
							Vendedor {{value.num}}
						</p>

						<div class="form-group">
							<label for="">nombre</label>
							<input type="text" ng-model="seller[key].name">
						</div>
						<div class="form-group">
							<label for="">email</label>
							<input type="text" ng-model="seller[key].mail">
						</div>
						<div class="form-group">
							<label for="">celular</label>
							<input type="text" ng-model="seller[key].cellphone">
						</div>
					</div>

					<div class="col-xs-12 confirm-btn">
						<button ng-click="saveStep4();">Guardar</button>
					</div>

				</section><!-- end section 4 -->
			</div><!-- end app-form -->
		</div>
	</div>
</div>
	


<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="assets/bootstrap-3.3.4/js/bootstrap.min.js"></script>
<script src="js/angular.min.js"></script>
<script src="js/angular-route.min.js"></script>
<script src="js/app_init.js"></script>
<script src="js/angular-file-upload.min.js"></script>
<script src="js/services.js"></script>
<script src="js/directives.js"></script>
<script src="js/ctrlAppInicio.js"></script>
<script src="js/ctrlAppTwo.js"></script>
<script src="js/ctrlAppThree.js"></script>
<script src="js/ctrlAppFourth.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {

		$('#step1').show(function(){
			$('#next-step').click(function() {
				$('#step1').hide(function() {
					$('#step2').show(function() {
						$('#step2 #next-step').click(function() {
							$('#step2').hide(function() {
								$('#step3').show(function() {
									$('#step3 #next-step').click(function() {
										$('#step3').hide(function() {
											$('#step4').show();
										});
									});
								});
							});
						});
					});
				});
			});
		});

		$('#img-name').click(function(){
			$('#img-upload').trigger('click')
		});

		$('#other-name').click(function(){
			$('#other-upload').trigger('click')
		})
	});
</script>
</body>
</html>