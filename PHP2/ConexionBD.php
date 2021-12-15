<?php

class ConexionBD{
    //Variables de Conexion
    protected $server = 'localhost';
    protected $usuario = 'root';
    protected $contraseña = '';
    protected $bd = 'hospital';

    //Propiedades de Conexion
    public $conn = null;

    //Llamar Constructor
    public function __construct(){
        $this->conn=mysqli_connect($this->server,$this->usuario,$this->contraseña,$this->bd) or die("Error: No se pudo realizar la connexion");
    }

    //Cerrar la conexion
    public function __destruct(){
        $this->cerrarConexion();
    }

    protected function cerrarConexion(){
        if($this->conn != null){
            $this->conn->close();
            $this->conn = null;
        }
    }
}