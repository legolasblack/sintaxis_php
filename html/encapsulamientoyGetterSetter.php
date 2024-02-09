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
	private $nombre; //la palabra private nos indica que la variable solo se puede modificar a travez de los metodos de la misma clase.
	protected $telefono;//la palabra protected nos indica que la variable solo puede ser accedida por la propia clase o clases heredadas
	public $direccion;//la palabra public nos indica que la variable puede ser accededida desde cualquier parte del programa

	//declaramos una funcion constructor con pase de parametros que posee el mismo nombre que la clase
	function Persona($nom,$tel,$dir){
		$this->nombre=$nom;
		$this->telefono=$tel;
		$this->direccion=$dir;
	}

	//para acceder a la variable nombre tendremos que utilizar una funcion propia de la clase asi como para leerla
	//utilizaremmos los metodos seter y geter para acceder a la variable
	function setNombre($nom){
		$this->nombre=$nom;
	}
	function getNombre(){
		return $this->nombre;
	}
}
$nuevo=new Persona("diego","3318065532","juanpalomar");
echo  $nuevo->getNombre()."<br>";
echo $nuevo->direccion."<br><br><br><br>";//esta linea si nos permite acceder por ser public
echo $nuevo->nombre;//esta linea nos crea un error de ejecucuion por intentar leer la variable desde afuera de la clase a la que pertenece
/*
impresion del programa:
diego
juanpalomar




Fatal error: Uncaught Error: Cannot access private property Persona::$nombre in C:\xampp\htdocs\index.php:34 Stack trace: #0 {main} thrown in C:\xampp\htdocs\index.php on line 34
*/
?>
</body>
</html>