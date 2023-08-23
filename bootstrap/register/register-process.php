<?php 
include 'register.php';
?>

<?php 
$mail = $_POST['email'];
$usn = $_POST['username'];
$psw = $_POST['passw'];


$base = "florvax";

$Conexion =  mysqli_connect("localhost","root","",$base);
$emailcheck = "SELECT * FROM usuario WHERE email='$mail'";
$usercheck = "SELECT * FROM usuario WHERE username='$usn'";

$check_email_for_duplicates = mysqli_query($Conexion,$emailcheck);
$check_user_for_duplicates = mysqli_query($Conexion,$usercheck);

if(mysqli_num_rows($check_email_for_duplicates) > 0 || mysqli_num_rows($check_user_for_duplicates) > 0) {
    echo "<script> 
    document.getElementById('wrong_pass_alert').style.color = 'red';
    document.getElementById('wrong_pass_alert').innerHTML ='☒ El nombre de usuario o mail ya fue registrado, ingrese otro.'; 
    </script>";
}
else {
    
    $cadena= "INSERT INTO usuario(email, username, passw) VALUES ('$mail','$usn','$psw')";
    
    $resultado = mysqli_query($Conexion,$cadena);
    
    echo "<script>location.href='../../paginaprincipal/pag1.html'</script>";
}

?>