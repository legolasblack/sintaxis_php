<?php
class Conexion2 {
    static public function conectar () {
       // debe ser "static" para que se pueda invocar como Conexion::conectar()
		// evitando el error: Deprecated: Non-static method should not be called statically
		// si no se declara como static lo correcto es instanciarlo primero $var = new Conexion;

		try {
            $conexion = new PDO(
                "mysql:host=localhost;dbname=peliculas;charset=utf8mb4",
                "root",
                "",
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) 
            );
            return $conexion;
        } catch (Exception $e ) {
            echo ' lo digo como un lamento : '+ $e->getMessage();
        }

    }


}

?>