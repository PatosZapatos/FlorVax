<?php
include 'pfp-choose.php';
?>

<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$fotito = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];


$base = "florvax";

$Conexion = mysqli_connect("localhost", "root", "", $base);

if (!$Conexion) {
    echo '
    <div class="row g-1 justify-content-center">
        <div class="alert alert-danger alert-dismissible fade show col-md-4" role="alert">
            Hubo un error con la conexión.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>
    </div>
    ';
}


if ($fotoTamanio > 5242880) {
    echo "<script> 
    document.getElementById('wrong_pass_alert').style.color = 'red';
    document.getElementById('wrong_pass_alert').innerHTML ='☒ El archivo es muy pesado, ingrese otro.'; 
    </script>";

} else {
    if ($fotito) {
        
        $fp = fopen($fotito, "rb");
        $contenido = fread($fp, $fotoTamanio);
        $contenido = addslashes($contenido);
        fclose($fp);

        $usuarioID = $_SESSION["userID"];

        $cadena = "UPDATE usuario SET profilePic = '$contenido' WHERE userID = '$usuarioID'";

        $resultado = mysqli_query($Conexion, $cadena);

        $_SESSION["userPFP"] = $contenido;

        echo "<script>location.href='../../paginaprincipal/index.php'</script>";

    } else {
        echo "<script> 
            document.getElementById('wrong_pass_alert').style.color = 'red';
            document.getElementById('wrong_pass_alert').innerHTML ='☒ No se pudo subir, ingrese otro.'; 
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/bootstrap.js"></script>
</head>

<body>

</body>

</html>