<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h3 class="altaTitulo"></h3>
        <div class="container" style="">
            
        </div>
        <form class="altaInput" action="../code/altas.php" method="POST" enctype="multipart/form-data">

            <div class="grupoInputs">
                <label for="nombre"></label>
                <input type="text" name="nombre"><br>
            </div>

            <div class="grupoInputs">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido"><br>
            </div>

            <div class="grupoInputs">
                <label for="edad">Edad:</label>
                <input type="number" name="edad"><br>
            </div>

            <div class="grupoInputs">
                <label for="foto">Archivo</label>
                <input type="file" name="foto"><br>
            </div>

            <div class="btn-submit">
                <input type="submit" value="Grabar"><br>
            </div>
        </form>
    </div>

</html>
<?php

?>