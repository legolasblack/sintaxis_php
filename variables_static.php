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
class Persona{

	private $nombre;
	protected $telefono;
	public $direccion;
	private static $nom_empresa="eco_online";//esta variable es estatica y pertenece a todas las instancias de la clase

	function Persona($nom,$tel,$dir){
		$this->nombre=$nom;
		$this->telefono=$tel;
		$this->direccion=$dir;
	}

	
	function setNombre($nom){
		$this->nombre=$nom;
	}
	function getNombre(){
		return $this->nombre;
	}
	function getEmpresa(){
		return self::$nom_empresa; //sintaxis para utilizar la variable static
	}
}
$nuevo=new Persona("diego","33333333","calle mirlo");
echo $nuevo->getEmpresa();

//las variables estaticas nos sirve para fijar una variable para cada una de las instancias y cuando se modifica esa variable se modifica en todas las demas.
?>
</body>
</html>