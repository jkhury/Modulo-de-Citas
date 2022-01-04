<?php

    class Cita{
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

        public function insertarDatos($paciente = null, $nuevacita = null, $tablac ="citas", $tablap ="paciente"){
            if ($this->bd->conn != null){
                if (($paciente != null) && ($nuevacita != null)){
                    $columnap = implode(',', array_keys($paciente));
                    $valuesp = implode(',' , array_values($paciente));

                    $columnac = implode(',', array_keys($nuevacita));
                    $valuesc = implode(',' , array_values($nuevacita));

                    // create sql query
                    $query_string_one = sprintf("INSERT INTO %s(%s) VALUES(%s)", $tablap, $columnap, $valuesp);
                    $ejecutar_one = $this->bd->conn->query($query_string_one);
                    
                    $query_string_two = sprintf("INSERT INTO %s(PacienteID, %s) VALUES(LAST_INSERT_ID(), %s)", $tablac, $columnac,$valuesc);
                    $ejecutar_two = $this->bd->conn->query($query_string_two);

                    return array($ejecutar_one, $ejecutar_two);
                }
            }
        }

        public function postDatos($nombre, $apellido, $dependencia, $doctor, $date, $time, $notes){
            if (isset($nombre)&&isset($apellido)&&isset($dependencia)&&isset($doctor)&&isset($date)&&isset($time)&&isset($notes)){
                $nuevacita = array(
                "MedicoID" => $doctor,
                "Fecha" => "\"$date\"",
                "Hora" => "\"$time\"",
                "Notas" =>"\"$notes\""
                );

                $paciente = array(
                "Nombre" => "\"$nombre\"",
                "Apellido" => "\"$apellido\"",
                "Dependencia" => "\"$dependencia\""
                );

                $ejecutar =$this->insertarDatos($paciente, $nuevacita);

                return $ejecutar;
            }
        }
    }
?>