


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
    <?php
// Este Include llama al Header, sin importar donde el Archivo actual se encuentre
include $_SERVER['DOCUMENT_ROOT'] . '/php/florvax/bootstrap/testpepitos/pepes.php';
?>
    </head>
    <main>
    <form action="compra.php" method="POST">
    
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
    <?php include "../forms/script.php" ?>
    </body>
</html> 