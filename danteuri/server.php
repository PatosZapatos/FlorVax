<?php
include '#';
?>
<html lang="es">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Altas</title>
	<link rel="stylesheet" href="#">
	<link rel="stylesheet" href="#">
	</head>
	<body>
	<h3 class="tablatitulo">Listado de Mensajes</h3>

	<table class="tabla">
		<caption class="ttitulo">Lista de usuarios</caption>
		<thead class="ttitulo">
			<tr>
			<th>ID</th>
			<th>Usuario</th>
			<th>Mensaje</th>
			<th>Foto</th>
			</tr>
		</thead>
	<?php 

$base = "chat";
$Conexion =  mysqli_connect("localhost","root","",$base);

$cadena= "SELECT * FROM chat ";

$consulta = mysqli_query($Conexion,$cadena);

while($registro = mysqli_fetch_row($consulta)){
	echo "<tr class='trmain'>";
	echo "<th>".$registro[0]."</th><th>".$registro[1]."</th ><th>".$registro[2]."</th><th><img src='data:image/jpeg;base64,".base64_encode($registro[3])."' width='64px'/></th>";
	echo "</tr>";
}
 ?>
    </table>
	</body>
</html>


