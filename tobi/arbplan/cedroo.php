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
    </head>
    <main>
    <center><h4>Compra</h4></center>
    <h2 class="titulo">Arbol de Cedro Del Himalaya</h2>
    <h5 class="info">-Especie perteneciente a la familia Pinaceae<br>Se utiliza para hacer incienso<br>-Gran conífera de porte cónico que alcanza los 40-50 metros de altura</h5>
    <h1 class="precio">$32.400</h1>
    <h3 class="cuotas">Mismo precio en 3 cuotas de $10.800</h3>
    <a href="../forms/tarjeta.php"><button class="boton">Comprar</button></a>
    <div class="img">
    <img src="https://http2.mlstatic.com/D_NQ_NP_689384-MLA43782238634_102020-V.webp" alt="" width="600px" height="500px">
    </div>
    
</main>
<?php include "../forms/script.php" ?>
</body>
</html>