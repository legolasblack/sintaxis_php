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
//Este archivo describe la conexion a la base de manera procedimental o no con objetos
/*
los datos principales para la conexion son cuatro
direccion de host
nombre de la base de datos
usuario 
contraseña
para este ejercicio se utilizo una base de datos llamada prueba 
en conexion local con una tabla llamada datos usuario*/

$db_host="localhost";
$db_nombre="prueba";
$db_usuario="root";
$db_pass="";
//esta funcion crea la conexion con los cuatro parametros declarados
$conn=mysqli_connect($db_host,$db_usuario,$db_pass,$db_nombre);
if(mysqli_connect_errno()){
	//este if nos sirve para deterctar errores
	echo "fallo al tratar de conectar con la bd<br>";
	 exit();//con esta funcion salimos del codigo php
}
 //esta funcion nos ayuda a configurar el formato  con el que se trabajara la base de datos
mysqli_set_charset($conn,"utf-8");
$query="select * from DATOSUSUARIO";
//esta funcion requiere de una conexion y una consulta
$result=mysqli_query($conn,$query);
//la variable result contiene una tabla virtual con las columnas y filas que regreso la consulta
$fila=mysqli_fetch_row($result);
//la variable fila contiene una fila del resultado en manera de arreglo para cada columna que retorno
echo $fila[0]."<br>";
echo $fila[1];
echo "<br>";
//----------------------------------------------------------------------
//hacia bajo se vera una manera mas optima de recorrer la tabla
while(($fila=mysqli_fetch_row($result))){
	for($i=0;$i<count($fila);$i++){
		echo $fila[$i]."<br>";
	}
}


mysqli_close($conn);//esta funcion cierra nuestra conexion por motivos de recursos
/*
codigo sql:
create database prueba;
create table datosusuario(nombre varchar(30), clave varchar(10));
insert into datosusuario("diego iran","10");
insert into datosusuario("dahlia alejandra","11");
insert into datosusuario("anallely","12");
*/

/*impresion del programa:
diego iran
10
dahlia alejandra
11
nayelli miranda
12
*/
?>
</body>
</html>