<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/formAltas.css">
	<link rel="stylesheet" href="../css/menu.css">
  <link rel="stylesheet" href="../paginaprincipal/estilos.css">
	<title>Formulario de Altas</title>
</head>
<body>
<header>
		<h1>Florvax</h1>
		<nav class="botones">
			<a href="#">tienda</a>
			<a href="#">donaciones</a>
			<a href="/tobi/forms/nosotros.php">acerca de nosotros</a>
			<a href="../bootstrap/register/register.php">Sign Up</a>
			<a href="../bootstrap/sign-in/sign-in.php">Log In</a>
		</nav>
	</header>
  <?php include 'menu.php'; ?>

<div class="container">
    <h3 class="altaTitulo">Enviar Mensaje</h3>
	<form class="altaInput" action="page2.php" method="POST" enctype="multipart/form-data">

		<div class="grupoInputs">
		<label for="usuario">Nombre de Usuario</label><br>
		<input type="text" name="usuario">
		</div>

		<div class="grupoInputs">
		<label for="mensaje">Mensaje</label><br>
		<input type="text" name="mensaje"><br>
		</div>
		
		<div class="grupoInputs">
		<label for="foto">Foto</label><br>
		<input type="file" name="foto" value="Foto" class="grupo"><br>
	    </div>

		<div class="grupoInputs">
		<input type="submit" value="Grabar" class="grupo"><br>
	    </div>

		<div>
		<p>AVISO: Esto es una prueba para guardar Mensajes</p>
		</div>
	</form>
</div>
	
	
</body>
</html>