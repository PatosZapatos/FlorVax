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
    <h2 class="titulo">Arbol de Arce de Tartaria</h2>
    <h5 class="info">-Es una especie botánica de arce.<br>-crece hasta 4-12 m de alto.<br>-Sirve como una planta ornamental en los jardines</h5>
    <h1 class="precio">$39.600</h1>
    <h3 class="cuotas">Mismo precio en 3 cuotas de $13.200</h3>
    <a href="../forms/tarjeta.php"><button class="boton">Comprar</button></a>
    <div class="img">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5chO0a-7BEvGtaLMHA26OaE56e8O_17YX44lkiwjkyGPIKwemAWrgXvPYY8GRZslTmpc&usqp=CAU" alt="" width="600px" height="500px">
    </div>
    
</main>
<?php include "../forms/script.php" ?>
</body>
</html>