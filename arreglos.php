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

echo $semana[1]."<br>";

$meses[0]="enero";
$meses[1]="febrero";
$meses[2]="marzo";

echo $meses[2 ]."<br>";
//esta es la declaracion de arreglos 
//si se utilizan los indices o no esta bien declarado

$años=array("1991","1992","1993");

echo $años[1]."<br>";
/*estas tres maneras de crear arreglos indexados funciona 
para php, esta es la imprecion en pantalla:
martes
marzo
1992
*/
//arreglos asociativos
$datos=array("nombre"=>"diego","apellido"=>"gutierrez","telefono"=>"5555555");
echo $datos["nombre"]."<br>";
echo $datos["apellido"]."<br>";
echo $datos["telefono"]."<br>";

$datos["Pais"]="Mexico";//con esta linea agregamos un elemento mas al array asociativo

echo $datos["nombre"]."<br>";
echo $datos["apellido"]."<br>";
echo $datos["telefono"]."<br>";
echo $datos["Pais"]."<br>";
?>
</body>
</html>