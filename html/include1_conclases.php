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
include("include2_conclases.php");//incluimos el codigo dentro del archivo nombrado 

$nuevo = new Miclase();//intanciando la clase con el metodo constructor
$nuevo->imprimirvariables();
$nuevo->modificarvariables(200);//aqui le mandamos el parametro para la funcion
$nuevo->imprimirvariables();

/*Esto es lo que imprime el programa
hola mundo la variable1: 4
hola mundo la variable2: 10
hola mundo la variable3: hola mundo
500
hola mundo la variable1: 200
hola mundo la variable2: 10
hola mundo la variable3: hola mundo*/


?>
</body>
</html>