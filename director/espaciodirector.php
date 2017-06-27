<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<link type="text/css" href="css/style.css" rel="stylesheet" />
		<script  type="text/javascript"  src="js/jquery.min.js"></script>

    <script  type="text/javascript"  src="js/alertify.js"></script>
    <script  type="text/javascript"  src="js/bootstrap.min.js"></script>

    
 <link rel="stylesheet" type="text/css" href="lista/css/style.css"/>
		<!-- Acción sobre el botón con id=boton y actualizamos el div con id=capa -->
		<script type="text/javascript">
			$(document).ready(function() {
				$("#boton2").click(function(event) {
					$("#capa").load('lista/index.php');
				});
			});
		</script>
</head>
<body>
	

<?php 
session_start();
include 'menu.php';
 ?>
	<body>
		<div id="capa"></div>
		
	</body>

</body>
</html>
