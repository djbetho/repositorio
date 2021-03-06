 <!DOCTYPE html>
 <html>
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="lista/css/style.css"/>
 <head>
 	<title></title>
 	<script src="http://code.jquery.com/jquery-latest.js"></script>
 </head>
 <style type="text/css">
 	* {
	padding:0;
	margin:0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

body {background:#FEFEFE;}

.menu_bar {
	display:none;
}

header {
	width: 100%;
}

header nav {
	background:#023859;
	z-index:1000;
	max-width: 1000px;
	width:95%;
	margin:20px auto;
}

header nav ul {
	list-style:none;
}

header nav ul li {
	display:inline-block;
	position: relative;
}

header nav ul li:hover {
	background:#E6344A;
}

header nav ul li a {
	color:#fff;
	display:block;
	text-decoration:none;
	padding: 20px;
}

header nav ul li a span {
	margin-right:10px;
}

header nav ul li:hover .children {
	display:block;
}

header nav ul li .children {
	display: none;
	background:#011826;
	position: absolute;
	width: 150%;
	z-index:1000;
}

header nav ul li .children li {
	display:block;
	overflow: hidden;
	border-bottom: 1px solid rgba(255,255,255,.5);
}

header nav ul li .children li a {
	display: block;
}

header nav ul li .children li a span {
	float: right;
	position: relative;
	top:3px;
	margin-right:0;
	margin-left:10px;
}

header nav ul li .caret {
	position: relative;
	top:3px;
	margin-left:10px;
	margin-right:0px;
}

@media screen and (max-width: 800px) {
	body {
		padding-top:80px;
	}

	.menu_bar {
		display:block;
		width:100%;
		position: fixed;
		top:0;
		background:#E6344A;
	}

	.menu_bar .bt-menu {
		display: block;
		padding: 20px;
		color: #fff;
		overflow: hidden;
		font-size: 25px;
		font-weight: bold;
		text-decoration: none;
	}

	.menu_bar span {
		float: right;
		font-size: 40px;
	}

	header nav {
		width: 80%;
		height: calc(100% - 80px);
		position: fixed;
		right:100%;
		margin: 0;
		overflow: scroll;
	}

	header nav ul li {
		display: block;
		border-bottom:1px solid rgba(255,255,255,.5);
	}

	header nav ul li a {
		display: block;
	}

	header nav ul li:hover .children {
		display: none;
	}

	header nav ul li .children {
		width: 100%;
		position: relative;
	}

	header nav ul li .children li a {
		margin-left:20px;
	}

	header nav ul li .caret {
		float: right;
	}
}
 </style>
 <script type="text/javascript">
 	$(document).ready(main);

var contador = 1;

function main () {
	$('.menu_bar').click(function(){
		if (contador == 1) {
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
	});

	// Mostramos y ocultamos submenus
	$('.submenu').click(function(){
		$(this).children('.children').slideToggle();
	});
}</script>
 <body>
 <header>
		<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-list2"></span>Menú</a>
		</div>
 
		<nav>
			<ul>
				<li class="submenu">
				<a href="#"><span class="icon-house"></span>Permisos</a>
					<ul class="children">
						<li><a id="boton2" href="#">Solicitud de Permisos <span class="icon-dot"></span></a></li>
						<li><a href="#">Historial <span class="icon-dot"></span></a></li>
						
					</ul>	
				</li>

				<li><a href="#"><span class="icon-suitcase"></span>*Asistencia</a></li>
				<li class="submenu">
					<a href="#"><span class="icon-rocket"></span>****<span class="caret icon-arrow-down6"></span></a>
					<ul class="children">
						<li><a href="#">SubElemento #1 <span class="icon-dot"></span></a></li>
						<li><a href="#">SubElemento #2 <span class="icon-dot"></span></a></li>
						<li><a href="#">SubElemento #3 <span class="icon-dot"></span></a></li>
					</ul>
				</li>
				<li><a href="#"><span class="icon-earth"></span>*****</a></li>
				<li><a href="#"><span class="icon-mail"></span>*****</a></li>
				<li><a href="cerrarsesion.php">Cerrar Sesion</a></li>
			</ul>
		</nav>
	</header>
 </body>
 </html>