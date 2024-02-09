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
/*la clase estatica tiene como finalidad poder acceder a los
metodos de la clase sin tener que crear una intancia de la misma 
clase se puede acceder a sus metodos con el simple hecho de convocar el 
nombre de la clase, vease el siguiente ejemplo y modificar datos de 
variables estaticas*/ 
class Persona{
	var $nombre;
	var $telefono;
	var $direccion;
	private static $empresa="zhif store";

	function Persona($nom,$tel,$dir){
		$this->nombre=$nom;
		$this->telefono=$tel;
		$this->direccion=$dir;
	}

	function imprimir_datos(){
		echo "Nombre: ".$this->nombre."<br>";
		echo "Telefono: ".$this->telefono."<br>";
		echo "direccion: ".$this->direccion."<br>";
		echo "direccion: ".self::$empresa."<br>";
		echo "----------------------------------------------";
	}
	static function set_empresa($emp){
		self::$empresa=$emp;
	}
	static function get_empresa(){
		return self::$empresa;
	}
	}
	Persona::set_empresa("homi2");
	$empleado1=new Persona("diego","555555","agustin #25");
	$empleado2=new Persona("sam","222222","lerdo de tejada #45");
	$empleado3=new Persona("ragnar","333333","cloud #101");
	$empleado1->imprimir_datos();
	$empleado2->imprimir_datos();
	$empleado3->imprimir_datos();
	Persona::get_empresa();
	//esta linea es la que accede a la variable estatica
	//y nos permite moificarla sin utilizar una instancia
	$empleado1->imprimir_datos();
	$empleado2->imprimir_datos();
	$empleado3->imprimir_datos();
	/*

	esto es lo que el program imprime
	Nombre: diego
Telefono: 555555
direccion: agustin #25
direccion: zhif store
----------------------------------------------Nombre: sam
Telefono: 222222
direccion: lerdo de tejada #45
direccion: zhif store
----------------------------------------------Nombre: ragnar
Telefono: 333333
direccion: cloud #101
direccion: zhif store
----------------------------------------------Nombre: diego
Telefono: 555555
direccion: agustin #25
direccion: homi2
----------------------------------------------Nombre: sam
Telefono: 222222
direccion: lerdo de tejada #45
direccion: homi2
----------------------------------------------Nombre: ragnar
Telefono: 333333
direccion: cloud #101
direccion: homi2
----------------------------------------------*/

?>
</body>
</html>