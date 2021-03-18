<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		base de datos programacion orientada a objetos
	</title>
</head>
<body>


<?php

$conexion = new mysqli("localhost","root","","poo");
if($conexion->connect_errno){
    echo "fallo la conexion". $conexion->connect_errno;
}


$conexion->set_charset("utf8");
$sql="Select * from empleado";

$resultado=$conexion->query($sql);
if($conexion ->errno){
    die($conexion->error);
}
while ($fila=$resultado->fetch_assoc()){

    echo "<tabla><tr><td>";

    echo $fila ['clave']."</td><td><br>";
    echo $fila ['nombre']."</td><td><br>";
    echo $fila ['apellido']."</td><td></tr></table>";

}
?>
</body>
</html>