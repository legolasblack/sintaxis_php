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

class Miclase{

	var $var1;
	var $var2;
	var $var3;
//costructor
	function Miclase(){
		 $this->var1=4;
		 $this->var2=10;
		 $this->var3="hola mundo";

	}
	function imprimirvariables(){
		echo "hola mundo la variable1: ".$this->var1."<br>";
		echo "hola mundo la variable2: ".$this->var2."<br>";
		echo "hola mundo la variable3: ".$this->var3."<br>";
	}
	function modificarvariables($valor){//esta funcion puede recibir un parametro;
		$this->var1=$valor;
		echo $this->var1."<br>";
		return $var1;//Esta linea retorna el valor uno en la llamda de la funcion;
	}

}

$nuevo = new Miclase();//intanciando la clase con el metodo constructor
$nuevo->imprimirvariables();
$nuevo->modificarvariables(500);//aqui le mandamos el parametro para la funcion
$nuevo->imprimirvariables();

/*Esto es lo que imprime el programa
hola mundo la variable1: 4
hola mundo la variable2: 10
hola mundo la variable3: hola mundo
500
hola mundo la variable1: 500
hola mundo la variable2: 10
hola mundo la variable3: hola mundo*/

?>
</body>
</html>