<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlorVax</title>
    <link rel="stylesheet" href="../css/compra.css">
</head>
<body style="font-family: Verdana, Geneva, Tahoma, sans-serif;">
    <head>
    <?php
// Este Include llama al Header, sin importar donde el Archivo actual se encuentre
include $_SERVER['DOCUMENT_ROOT'] . '/php/florvax/bootstrap/testpepitos/pepes.php';
?>
    <main>
    <center><h4>Compra</h4></center>
    <h2 class="titulo">Pala de Mano</h2>
    <h5 class="info">-Pala de mano antioxidable de 45 cm de largo<br>-Para excavar tierra<br>-Nueva <br>-Consultar stock</h5>
    <h1 class="precio">$5100</h1>
    <h3 class="cuotas">Mismo precio en 3 cuotas de $1700</h3>
    <a href="../forms/tarjeta.php"><button class="boton">Comprar</button></a>
    <div class="img">
    <img src="../img/herramientas/palita angosta.webp" alt="" width="600px" height="500px">
    </div>
    
</main>
<?php include "../forms/script.php" ?>
</body>
</html>