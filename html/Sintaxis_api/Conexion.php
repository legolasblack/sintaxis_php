<?php


class Conexion{
    private $user="root";
    private $pass="";
    private $host="localhost";
    private $db="peliculas";

    function conectar(){
        try {
            $conexion = new mysqli($this->host, $this->user, $this->pass, $this->db);
            if ($conexion->connect_errno) {
                echo "Fallo la conexion".$conexion->connect_errno;

            }else{
                echo "tenemos conexion";
                return $conexion;
            }
        } catch (Exception $e) {
            echo 'tenemos errores: '. $e->getMessage(), "\n";
        }
    }
}

?>