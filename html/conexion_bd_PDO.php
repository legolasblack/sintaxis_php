<?php

try {
    $conexion=new PDO('mysql:host=localhost; practica_login','root','');//con esta linea asignamos los parametros de la conexion
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//ESTA LINEA ASIGNA PARAMETROS EXISTEN VARIOS MAS CHECAR EN LA DOCUMENTACION DE PHP
    $conexion->exec("SET CGRACTER SET utf8");//asignamos a la conexion el patron utf8 para caracteres latinos
    return $conexion;//esta linea retorna la conexion en caso de querer usarla fuera 

   /*  $sql="SELECT * FROM PRODUCTOS"; */
   $query="INSERT INTO USUARIOS (USUARIOS, PASS) VALUES('DIEGO','CARADEPERRO')";
    $sentencia_preparada=$conexion->prepare($query);//con esta sentencia preparada con la conexion y la consulta podemos proceder a ejecutar
    $sentencia_preparada->execute(array());//con esto definimos que se retorne un array
    $resultado_consulta=$sentencia_preparada->fetchAll(PDO::FETCH_ASSOC);//CON ESTO BAJAMOS EL RESULTADO A UNA VARIABLE CON FORMA DE ARREGLO ASICIATIVO 
    $sentencia_preparada->closeCursor();//con esta linea cerramos la conexion a la base de datos que se genero
    $conexion=null;


} catch (Exception $e) {
    echo "la linea  de error es " . $e->getline();
}

?>