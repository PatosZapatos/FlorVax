<?php
// Este Include llama al Header, sin importar donde el Archivo actual se encuentre
include $_SERVER['DOCUMENT_ROOT'] . '/php/florvax/bootstrap/testpepitos/pepes.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Florvax</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
	<h1 class="tittle">
        Informacion de la Flora
    </h1>

    <div class="secciones">
        <a href="arboles.php">
            <img src="../img/ejarbol.jpg" alt="">
        </a>
        <a href="plantas.php">
            <img src="../img/ejplanta.jpg" alt="">
        </a>
        <a href="frutas.php">
            <img src="../img/ejfruta.jpg" alt="">
        </a>
        <a href="hiervas.php">
            <img src="../img/ejhierva.jpg" alt="">
        </a>
    </div>

</body>

</html>
<?php
    include 'coso.php'
?>