<?php 
	require_once("language.php");
	require_once ("tplconfig.php");
	require_once(ROOT_DIR. "config.php");

	
	
	
?>

<html>
	
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo TEMPLATE_DIRECTORY; ?>css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="<?php echo TEMPLATE_DIRECTORY; ?>js/validator.js"></script>
		<title>TruequeRD - El mejor sitio de intercambio de bienes</title>
		
		<script type="text/javascript">
			function tos()
			{
				window.open("<?php echo str_replace("/var/www/html", "", ROOT_DIR);?>/eula.html", "Términos y condiciones", "left=450,top=50,width=500,height=600");
			}
		</script>
		
	</head>
	
	<body onLoad="loadValidator()">
		
		<br /><br /><br /><br />
		<div class="container">
			<div class="col-md-6">
				<h2>Ingresa a tu cuenta</h2><small>si ya eres miembro.</small><br /><br /><br />

				<form class="form-horizontal" action="#" method="post">
				
					<div class="form-group">
						<div class="col-sm-2">
							<label for="username">Usuario<span style="color: #F00;">*</span></label>
						</div>
						
						<div class="col-sm-10">
							<input class="form-control" id="username" name="username" type="text"/>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-2">
							<label for="password">Contraseña<span style="color: #F00;">*</span></label>
						</div>
						
						<div class="col-sm-10">
							<input class="form-control" id="password" name="password" type="password"/>
						</div>
					</div>
					
					<div class="form-group">
						<button class="btn btn-primary" type="submit" name="loginBtn" id="loginBtn">Iniciar sesión</button>
					</div>
					
					<div id="statusLogin"></div>
					
				</form>
				
			</div>
			
			<div class="col-md-6" id="userTarget">
				<h2>Registrarse </h2><small>Si aún no eres miembro de <strong>TRUEQUERD</strong>. ¡Es gratis!</small><br /><br /><br />
				
				<form class="form-horizontal" action="#" method="post">
				
					<div class="form-group">
						<div class="col-sm-2">
							<label for="realName">Nombre<span style="color: #F00;">*</span></label>
						</div>
						
						<div class="col-sm-10">
							<input class="form-control" id="realName" name="realName" type="text" />
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-2">
							<label for="lastname">Apellido<span style="color: #F00;">*</span></label>
						</div>
						
						<div class="col-sm-10">
							<input class="form-control" id="lastname" name="lastname" type="text" />
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-2">
							<label for="userNew">Usuario<span style="color: #F00;">*</span></label>
						</div>
						
						<div class="col-sm-10">
							<input class="form-control" id="userNew" name="userNew" type="text" />
							<p style="color: #F00;" id="userExist"></p>
						</div>
					</div>
					

					<div class="form-group">
						<div class="col-sm-2">
							<label for="email">Correo electrónico<span style="color: #F00;">*</span></label>
						</div>
						
						<div class="col-sm-10">
							<input class="form-control" id="email" name="email" type="email" />
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-2">
							<label for="confirmEmail">Confirmar correo electrónico<span style="color: #F00;">*</span></label>
						</div>
						
						<div class="col-sm-10">
							<input class="form-control" id="confirmEmail" name="confirmEmail" type="email" />
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-2">
							<label for="passNew">Contraseña<span style="color: #F00;">*</span></label>
						</div>
						
						<div class="col-sm-10">
							<input class="form-control" id="passNew" name="passNew" type="password" />
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-2">
							<label for="confirmPassword">Confirmar contraseña<span style="color: #F00;">*</span></label>
						</div>
						
						<div class="col-sm-10">
							<input class="form-control" id="confirmPassword" name="confirmPassword" type="password" />
						</div>
					</div>
					

					<div class="form-group">
						<div class="col-sm-2">
							<label for="address">Dirección<span style="color: #F00;">*</span></label>
						</div>
						
						<div class="col-sm-6">
							<input class="form-control" id="address" name="address" type="text" />
						</div>
						
						<div class="col-sm-1">
							<label for="addressNum">
								Nro.<span style="color: #F00;">*</span>
							</label>
						</div>
						
						<div class="col-sm-3">
							<input class="form-control" id="addressNum" name="addressNum" type="text" />
						</div>
						
					</div>
					
					<div class="form-group">
						<div class="col-sm-2">
							<label for="cpN">ZIP<span style="color: #F00;">*</span></label>
						</div>
						
						<div class="col-sm-2">
							<input class="form-control" id="cpN" name="cpN" type="text" />
						</div>
						
						<div class="col-sm-2">
							<label for="city">Ciudad<span style="color: #F00;">*</span></label>
						</div>
						
						<div class="col-sm-6">
							<input class="form-control" id="city" name="city" type="text" />
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-2">
							<label for="state">Estado<span style="color: #F00;">*</span></label>
						</div>
						
						<div class="col-sm-3">
							<input class="form-control" id="state" name="state" type="text" />
						</div>

						<div class="col-sm-1">
							<label for="country">País<span style="color: #F00;">*</span></label>
						</div>
						
						<div class="col-sm-6">
							<input class="form-control" id="country" name="country" type="text" />
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-4">
							<label for="phoneNumber">Número de teléfono<span style="color: #F00;">*</span></label>
						</div>
						
						<div class="col-sm-8">
							<input class="form-control" id="phoneNumber" name="phoneNumber" type="text" />
						</div>						
					</div>
					
					<div class="form-group">
						<input type="checkbox" name="acceptEULA" id="acceptEULA" /> Acepto los <a onClick="tos()">términos y condiciones</a> de este sitio web.
					</div>
					
					<div class="form-group">
						<button class="btn btn-primary" type="submit" name="registerBtn" id="registerBtn">Crear cuenta</button>
					</div>
					
					<div id="statusRegister"></div>			

				</form>				
				
			</div>
			
		</div>		

		<script type="text/javascript" src="<?php echo TEMPLATE_DIRECTORY; ?>js/jquery-min.js"></script>
		<script type="text/javascript" src="<?php echo TEMPLATE_DIRECTORY; ?>js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo TEMPLATE_DIRECTORY; ?>js/npm.js"></script>