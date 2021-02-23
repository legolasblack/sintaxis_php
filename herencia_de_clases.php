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
class Padre{//clase padre que heredara los datos a la clase hijo
	var $nombre;
	var $apellido1;
	var $apellido2;
	var $codigo;

	//nota:php no permite la sobrecarga de operadores
	//por lo que es necesario implementar otras tecnicas

	function Padre($name,$ape1,$ape2,$cod){
		$this->nombre=$name;
		$this->apellido1=$ape1;
		$this->apellido2=$ape2;
		$this->codigo=$cod;
	}

	function getName($nme){
		$this->nombre=$nme;
	}
	function imprimeelnombre(){
		echo "este nombre designamos para ti: ".$this->nombre."<br>";
	}
}
//clase hijo que recibe por herencia los parametros
class Hijo  extends Padre{//extendes es la palabra reservada para indicar le herencia de la clase
	var $edad;

	function Hijo($name,$ape1,$ape2,$cod,$ed){
		$this->nombre=$name;
		$this->apellido1=$ape1;
		$this->apellido2=$ape2;
		$this->codigo=$cod;
		$this->edad=$ed;
	}

	function imprimedatos(){
		echo "------------------------<br>";
		echo "Soy el hijo mi nombre es: ".$this->nombre."<br>";
		echo "Soy el hijo mi apellido1 es: ".$this->apellido1."<br>";
		echo "Soy el hijo mi apellido2 es: ".$this->apellido2."<br>";
		echo "Soy el hijo mi codigo es: ".$this->codigo."<br>";
		echo "Soy el hijo mi edad es: ".$this->edad."<br>";
		echo "------------------------<br>";
	}
}

$daddy=new Padre("alberto","fernandez","ocampo","9");
$son=new Hijo("diego","fernandez","ocampo","10","25");
$daddy->imprimeelnombre();
$son->imprimedatos();
$son->imprimeelnombre();

/*
esta es la imprecion del programa:
este nombre designamos para ti: alberto
------------------------
Soy el hijo mi nombre es: diego
Soy el hijo mi apellido1 es: fernandez
Soy el hijo mi apellido2 es: ocampo
Soy el hijo mi codigo es: 10
Soy el hijo mi edad es: 25*/


?>
</body>
</html>s