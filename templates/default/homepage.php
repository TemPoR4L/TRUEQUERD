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
		<title>TruequeRD - El mejor sitio de intercambio de bienes</title>
		
		<style type="text/css">
			.nolink {
				text-decoration: none;
				color: #FFF;
				font-size: 10pt;
				font-weight: bolder;
			}
			
		</style>
		

	</head>
	
	<body>

	
		<br /><br />
		<div class="jumbotron">
		  <div class="container">
		    <h1><?php echo $lang["JUMBO_HEAD"]; ?></h1>
		    <p><?php echo $lang["JUMBO_BODY"]; ?></p>
		    
		    <p><a class="btn btn-primary btn-lg" href="#" role="button"><?php echo $lang["JUMBO_BUTTON"]; ?> &raquo;</a></p>
		  </div>
		</div>
		
		
		<h2 align="center">Encuentra lo que buscas</h2>
		<h3 align="center">Hay miles de objetos publicados, con los vendedores más seguros.</h3>
		
		<div class="container">
			
			<div class="col-md-4">
			<h3>Clasificados</h3>
			<br />
					<kbd><a href="#" class="nolink">Carros, Motos y Otros</a></kbd>
					<kbd><a href="#" class="nolink">Inmuebles</a></kbd>
					<kbd><a href="#" class="nolink">Servicios</a></kbd>
			<br /><br />
			</div>
	
			<div class="col-md-8">
			<h3>Categorías</h3>
			<br />
			
					<kbd><a href="#" class="nolink">Accesorios para Vehículos</a></kbd>
					<kbd><a href="#" class="nolink">Arte y Antigüedades</a></kbd>
					<kbd><a href="#" class="nolink">Cámaras Digitales y Foto</a></kbd>
					<kbd><a href="#" class="nolink">Celulares y Teléfonos</a></kbd>
					<kbd><a href="#" class="nolink">Coleccionables y Hobbies</a></kbd>
					<kbd><a href="#" class="nolink">Computación</a></kbd>
					<kbd><a href="#" class="nolink">Consolas y Videojuegos</a></kbd>
					<kbd><a href="#" class="nolink">Deportes y Fitness</a></kbd>
					<kbd><a href="#" class="nolink">Electrónica Audio Video</a></kbd>
					<kbd><a href="#" class="nolink">Hogar y Electrodomésticos</a></kbd>
					<kbd><a href="#" class="nolink">Instrumentos Musicales</a></kbd>
					<kbd><a href="#" class="nolink">Juegos y Juguetes</a></kbd>
					<kbd><a href="#" class="nolink">Libros, Revistas y Comics</a></kbd>
					<kbd><a href="#" class="nolink">Música y Películas</a></kbd>
					<kbd><a href="#" class="nolink">Ropa, Relojes y Lentes</a></kbd>
					<kbd><a href="#" class="nolink">Otras categorías</a></kbd>
					
			<br /><br />
			</div>
			
		</div>
		

		<script type="text/javascript" src="<?php echo TEMPLATE_DIRECTORY; ?>js/jquery-min.js"></script>
		<script type="text/javascript" src="<?php echo TEMPLATE_DIRECTORY; ?>js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo TEMPLATE_DIRECTORY; ?>js/npm.js"></script>
