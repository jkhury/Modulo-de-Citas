<?php

    class Citas{
        public $bd = null;

        public function __construct(ConexionBD $bd){
            if(!isset($bd->conn)) return null;
            $this->bd = $bd;
        }

        public function getDatos($tabla = 'citas'){
            $select = $this->bd->conn->query(query:"SELECT * FROM {$tabla}");
    
            $selectArreglo = array();
    
            while($doc = mysqli_fetch_array($select, MYSQLI_ASSOC)){
                $selectArreglo[] = $doc;
            }
    
            return $selectArreglo;
        }

        public function insertarDatos($parametros = null, $tabla ="citas"){
            if ($this->bd->conn != null){
                if ($parametros != null){

                    $columna = implode(',', array_keys($parametros));
                    $values = implode(',' , array_values($parametros));
                    // create sql query
                    $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $tabla, $columna, $values);
                    $ejecutar = $this->bd->conn->query($query_string);
                    return $ejecutar;
                }
            }
        }
        
        public function postDatos($nombre, $apellido, $esp, $numt){
            if (isset($nombre)&&isset($apellido)&&isset($esp)&&isset($numt)){
                $parametros = array(
                    "Nombre" => "\"$nombre\"",
                    "Apellido" => "\"$apellido\"",
                    "Esp" => "\"$esp\"",
                    "Tel_Num" => $numt
                );

                $ejecutar =$this->insertarDatos($parametros);

                return $ejecutar;
            }
        }
    }
?>