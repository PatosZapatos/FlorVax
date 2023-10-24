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
        <div class="header">
        <h2 class="flor">FlorVax</h2>
        <div class="input">
        <input id="buscar" placeholder="Buscar" class="buscar" style="width: 500px; height: 30px;">
        <button id="btn" class="btn" style="width: 100px; height: 40px;">Buscar🔎</button>
        </div>
        
        <div class="container">   
                        <ul>
                            <li class="dropdown">
                                <a>Categoria</a>
                                <div class="dropdown-content">
                                    <a href="../forms/semillasmejor.php">Semillas</a>
                                    <a href="../forms/herramientasmejor.php">Herramientas</a>
                                    <a href="../forms/nosotrosmejor.php">Acerca de nosotros</a>
                                </div>
                                </li>
                            <li><a href="">Carrito</a></li>
                            <li><a href="">Usuario</a></li>
        </div>
        </div>
    </head>
    <main>
    <center><h4>Compra</h4></center>
    <h2 class="titulo">Semillas de Brocoli</h2>
    <h5 class="info">-60 semillas de brocoli<br>-Traidas de Brasil<br>-Si no sabe como germinar. Adjunto tutorial: <a href="https://www.youtube.com/watch?v=PToFUFrTivM" style="text-decoration:none; color:#bf0092" target="_blank">Clic Aqui</a></h5>
    <h1 class="precio">$770</h1>
    <h3 class="cuotas">Mismo precio en 3 cuotas de $256,66</h3>
    <a href="../forms/tarjeta.php"><button class="boton">Comprar</button></a>
    <div class="img">
    <img src="../img/semillas/brocoli.png" alt="" width="600px" height="500px">
    </div>
    
</main>
<?php include "../forms/script.php" ?>
</body>
</html>