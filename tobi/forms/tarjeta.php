<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlorVax</title>
    <link rel="icon" href="../tobi/img/semillas/logo_florvax.png">
    <link rel="stylesheet" href="../css/tarjeta.css">
</head>
<body style="font-family: Verdana, Geneva, Tahoma, sans-serif;">
    <table width="1900" height="900">
        <tr height="20%">
            <td colspan="2" width="30%" >
                <div class="morado">
                <menu>
                    <div class="pe">
                <a href="#" style="position: absolute;
                                top: 34px;
                                left: 16px;
                                font-size: 18px; font-size: 30px;">FlorVax</a></div>
                                 <div class="container">
                                    <p style="position: absolute;
                                    top: 8px;
                                    left: 1000px;
                                    font-size: 18px; font-size: 30px;">Compra</p>
                                 </div>
                                 
</menu>
</div>
            </td>
        </tr>

        
            
            <tr height="80%">
                <td colspan="2" width="50%">
                    <div class="info">
                    </div>
                    <div class="pipi">
                    <form action="altas.php" method="POST">
                        Nombre <br> <input type="text" name="nombre"><br>
                        Apellido <br> <input type="text" name="apellido"><br>
                        Edad <br> <input type="number" name="edad"><br>
                        Correo Electronico <br> <input type="email" name="correo"><br>
                        <label for="tarjeta">Tipo De Tarjeta</label><br>
                        <select id="tarjeta" name="tarjeta">
                        <option value="visa">Visa</option>
                        <option value="master">MasterCard</option>
                        <option value="paypal">PayPal</option>
                        <option value="discover">Discover</option>
                        </select><br>
                        Numero De Tarjeta <br> <input type="number" name="tarjeta"><br>
                        Codigo CVV <br> <input type="number" name="cvv"><br>
                        Fecha De Vencimiento <br> <input type="datetime" name="fecha"><br>
                        Ciudad <br> <input type="text" name="ciudad"><br>
                        Direccion <br> <input type="number" name="dire"><br>
                        Codigo Postal <br> <input type="number" name="cp"><br><br>
                        
                         
                        <input type="submit" value="Comprar"><br>
                    </form>
                </div>
            </td>
         </tr>
    </table>
</body>
</html>