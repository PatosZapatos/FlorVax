


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlorVax</title>
    <link rel="stylesheet" href="../css/tarjeta.css">
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
    <form action="altas.php" method="POST">
    
        <div class="bloque">
        
                        Nombre <br> <input type="text" name="nombre" class="inputt"><br>
                        Apellido <br> <input type="text" name="apellido" class="inputt"><br>
                        Edad <br> <input type="number" name="edad" class="inputt"><br>
                        Correo Electronico <br> <input type="email" name="correo" class="inputt"><br>
                        <label for="tarjeta">Tipo De Tarjeta</label><br>
                        <select id="tarjeta" name="tarjeta" class="botonn">
                        <option value="visa" class="opciones">Visa</option>
                        <option value="master" class="opciones">MasterCard</option>
                        <option value="paypal" class="opciones">PayPal</option>
                        <option value="discover" class="opciones">Discover</option>
                        </div>
                        </select><br>
                        Numero De Tarjeta <br> <input type="number" name="tarjeta" class="inputt"><br>
                        Codigo CVV <br> <input type="number" name="cvv" class="inputt"><br>
                        Fecha De Vencimiento <br> <input type="datetime" name="fecha" class="inputt"><br>
                        Ciudad <br> <input type="text" name="ciudad" class="inputt"><br>
                        Direccion <br> <input type="number" name="dire" class="inputt"><br>
                        Codigo Postal <br> <input type="number" name="cp" class="inputt"><br><br>
                        
                         
                        <input type="submit" value="Comprar" class="botonn"><br>
                        </div>
                        
                    </form>
    </main>
    </body>
</html> 