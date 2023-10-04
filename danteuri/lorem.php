<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Florvax</title>
    <link rel="stylesheet" href="../paginaprincipal/estilos.css">
    
</head>
<body>
<header>
		<h1>Florvax</h1>
		<nav class="botones">
				<a href="#">tienda</a>
				<a href="#">donaciones</a>
				<a href="../tobi/nosotros.html">acerca de nosotros</a>
				<a href="../bootstrap/register/register.php">Sign Up</a>
				<a href="../bootstrap/sign-in/sign-in.php">Log In</a>
		</nav>
    </header>
	<section class="zona1"></section>
   
	<script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector("header");
			header.classList.toggle("abajo",window.scrollY>0);
		})

    <div class="container" >
        <h3 class="altaTitulo">Mensajería</h3>
        <form class="altaInput" action="../code/altas.php" method="POST" enctype="multipart/form-data">
        <form class="altaInput">

            <div class="grupoInputs">
                <input type="text" name="apellido"><br>
            </div>

            <div class="btn-submit">
                <input type="submit" value="Enviar!"><br>
            </div>
        </form>
    </div>

</body>
</html>
<?php

?>