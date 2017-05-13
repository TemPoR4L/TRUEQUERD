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
		
	</head>
	
	<body>
	
		 <nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?php echo str_replace("/var/www/html", "", ROOT_DIR);?>">TruequeRD</a>
                		   
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		    		    
		   
		      <ul class="nav navbar-nav">
		        <li><a href="<?php echo str_replace("/var/www/html", "", ROOT_DIR);?>"><?php echo $lang["HOME"]; ?></a></li>
		      </ul>

				
				<div class="col-lg-8 col-md-7 col-sm-6 col-xs-12">
					<form class="navbar-form" action="<?php echo str_replace("/var/www/html", "", ROOT_DIR);?>find.php" method="post">
						<input type="text" class="form-control" placeholder="Busca lo que quieras, y presiona la tecla ENTER..." style="width: 100%;" />
					</form>
				</div>
				
		      
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="<?php echo str_replace("/var/www/html", "", ROOT_DIR);?>account.php"><span class="glyphicon glyphicon-user"></span><b> <?php echo $lang["SIGN_UP"]; ?></b></a></li>
		      </ul>		      
		      
		      
		    </div>
		  </div>
		</nav>			

		<script type="text/javascript" src="<?php echo TEMPLATE_DIRECTORY; ?>js/jquery-min.js"></script>
		<script type="text/javascript" src="<?php echo TEMPLATE_DIRECTORY; ?>js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo TEMPLATE_DIRECTORY; ?>js/npm.js"></script>