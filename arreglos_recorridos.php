<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		sintaxis de clases en php
	</title>
</head>
<body>
<?php
//arreglos indexados
$semana[]="lunes";
$semana[]="martes";
$semana[]="miercoles";

$meses[0]="enero";
$meses[1]="febrero";
$meses[2]="marzo";


//esta es la declaracion de arreglos 

$años=array("1991","1992","1993");
/*estas tres maneras de crear arreglos indexados funciona 
para php*/
//arreglos asociativos
$datos=array("nombre"=>"diego","apellido"=>"gutierrez","telefono"=>"5555555");
echo $datos["nombre"]."<br>";
echo $datos["apellido"]."<br>";
echo $datos["telefono"]."<br>";

// apartir de aqui comienzan los recorridos
//tenemos declarados tres tipos de arrays, 3 indexados y 1 asociativo
//utilizamos un ciclo for de manera tradicional para rrecorrer un arreglo
for($i=0;$i>3;$i++){
	echo $semana[$i]."<br>";
}
//en arreglos que no sabemos la cantidad de elementos utilizamos la funcion count()
for($j=0;$j<count($meses);$j++){
	echo $meses[$j]."<br>";
}

//utilizamos un foreach para dar recorrido  los arreglos asociativos
foreach ($datos as $clave => $valor) {
	echo "A $clave le corresponde $valor<br>";
}

?>
</body>
</html>