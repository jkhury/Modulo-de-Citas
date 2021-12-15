<?php

    class Medico{
        public $bd = null;

        public function __construct(ConexionBD $bd){
            if(!isset($bd->conn)) return null;
            $this->bd = $bd;
        }

        public function getDatos($tabla = 'medico'){
            $select = $this->bd->conn->query(query:"SELECT * FROM {$tabla}");
    
            $selectArreglo = array();
    
            while($doc = mysqli_fetch_array($select, MYSQLI_ASSOC)){
                $selectArreglo[] = $doc;
            }
    
            return $selectArreglo;
        }
    }
?>