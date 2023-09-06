<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Florvax</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
		<h1>Florvax</h1>
		<nav>
			<ul>
                <li><a href="#">---------</a></li>
				<li><a href="#">tienda</a></li>
				<li><a href="#">donaciones</a></li>
				<li><a href="../tobi/nosotros.html">acerca de nosotros</a></li>
				<li><a href="../bootstrap/register/register.php">Sign Up</a></li>
				<li><a href="../bootstrap/sign-in/sign-in.php">Log In</a></li>
			</ul>
		</nav>
    </header>
	<section class="zona1"></section>
   
	<script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector("header");
			header.classList.toggle("abajo",window.scrollY>0);
		})
	</script>
        <div class="uno">

			<div class="text1">
				<h2> powerful tagline for your product </h2>
				<p>supporting statement for your produc is tagline. this text should communicate your unique selling propositin to the reader</p>
			</div>
            <img class="img1" src="imagenes/logo_florvax.png" alt="" >
		</div>
</body>
</html>
