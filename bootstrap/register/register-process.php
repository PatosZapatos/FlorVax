<?php 

$mail = $_POST['email'];
$usn = $_POST['username'];
$psw = $_POST['passw'];

$base = "florvax";
$Conexion =  mysqli_connect("localhost","root","",$base);

$cadena= "INSERT INTO usuario(email, username, passw) VALUES ('$mail','$usn','$psw')";

$resultado = mysqli_query($Conexion,$cadena);

echo "<script>location.href='../../paginaprincipal/pag1.html'</script>"
 ?>