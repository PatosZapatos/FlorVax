<?php
include 'sign-in.php';
?>

<?php

$mail = $_POST['email'];
$psw = $_POST['passw'];


$base = "florvax";

$Conexion = mysqli_connect("localhost", "root", "", $base);

$userStr = "SELECT * FROM usuario WHERE email = '$mail' AND passw = '$psw'";

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

$resultado = mysqli_query($Conexion, $userStr);

if (mysqli_num_rows($resultado) > 0) {
    echo "<script>location.href='../../paginaprincipal/pag1.php'</script>";
} else {
    echo "<script> 
    document.getElementById('login-alerts').style.color = 'red';
    document.getElementById('login-alerts').innerHTML ='☒ El mail o la contraseña no coinciden.'; 
    </script>";
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