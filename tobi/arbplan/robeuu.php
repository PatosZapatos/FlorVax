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
    <h2 class="titulo">Arbol de Roble Europeo</h2>
    <h5 class="info">-Está clasificado en la Sección Quercus.<br>-Se distribuye desde 0 a 1000 m sobre el nivel del mar, en suelos profundos y frescos.<br>-Sus bellotas son comestibles.</h5>
    <h1 class="precio">$36.300</h1>
    <h3 class="cuotas">Mismo precio en 3 cuotas de $12.100</h3>
    <a href="../forms/tarjeta.php"><button class="boton">Comprar</button></a>
    <div class="img">
    <img src="https://http2.mlstatic.com/D_NQ_NP_964809-MLA31513669254_072019-W.webp" alt="" width="600px" height="500px">
    </div>
    
</main>
<?php include "../forms/script.php" ?>
</body>
</html>