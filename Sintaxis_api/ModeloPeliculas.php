<?php
require 'Conexion2.php';

class ModeloPeliculas
{

    public static function get_pelicula($id)
    {
        $conn = Conexion2::conectar()->prepare("
select *
from pelis
where id= :id

");

        $conn->bindParam(":id", $id, PDO::PARAM_INT);

        try {
            $conn->execute();
            $queryStatus = ['execute' => 'ok', 'respuesta' => $conn->fetch(PDO::FETCH_ASSOC)];
        } catch (PDOException $e) {
            $queryStatus = ['execute' => 'error', 'respuesta' => $e->getMessage()];
        }

        $conn = null;
        return $queryStatus;
    }

    static public function getAllPeliculas(){
        $query= "select * 
        from pelis";
        $conn = Conexion2::conectar()->prepare($query);

        try {
            $conn->execute();
            $responseQuery=['execute'=> 'ok_perros', 'respuesta'=> $conn->fetchAll(PDO::FETCH_ASSOC)];
        } catch (PDOException $e) {
            $responseQuery = ['execute' => 'error', 'respuesta' => $e->getMessage()];
        }

        $conn=null;
        return json_encode($responseQuery, JSON_PRETTY_PRINT);
    }

    static function existe(){
        return false;
    }
}
