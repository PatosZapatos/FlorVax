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
    <h2 class="titulo">Semillas de Alamo Piramidal</h2>
    <h5 class="info">-20 semillas de Alamo Piramidal<br>-Traidas del Brasil<br>-Si no sabe como germinar. Adjunto tutorial: <a href="https://www.youtube.com/watch?v=1kk5Bf0Zcwc&pp=ygUoY29tbyBnZXJtaW5hciBzZW1pbGxhIGRlIGFsYW1vIHBpcmFtaWRhbA%3D%3D" style="text-decoration:none; color:#81d7cd" target="_blank">Clic Aqui</a></h5>
    <h1 class="precio">$1.200</h1>
    <h3 class="cuotas">Mismo precio en 3 cuotas de $400</h3>
    <a href="../forms/tarjeta.php"><button class="boton">Comprar</button></a>
    <div class="img">
    <img src="http://localhost/php/FlorVax/tobi/img/arbsem/almpir.JPG" alt="" width="600px" height="500px">
    </div>
    
</main>
<?php include "../forms/script.php" ?>
</body>
</html>