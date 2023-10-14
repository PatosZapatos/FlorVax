<?php 

include 'menu.php';


$usu = $_POST['usuario'];
$msg = $_POST['mensaje']; 
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];

// salida de informacion

if($foto != "none"){
	$fp = fopen($foto,"rb");
	$contenido = fread($fp,$fotoTamanio);
	$contenido = addslashes($contenido);
	fclose($fp);
	var_dump($fp);

	$base = "chat";
	$Conexion =  mysqli_connect("localhost","root","",$base);

	$cadena= "INSERT INTO mensaje(usuario, mensaje, foto) VALUES ('$usu','$msg','$contenido')";

	$resultado = mysqli_query($Conexion,$cadena);

	if($resultado){
	print "se ha insertado un registro"."<br>";

	}else{
	print "NO se ha generado un registro"."<br>";
	}

}
else{
print "No se puede subir el archivo";}

echo "<h3>".$usu."</h3>". "<h3>".$msg."</h3>". "<h3>".$contenido."</h3>";