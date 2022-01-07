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

        public function postDatos($doctor, $fecha, $dependencia, $nombre, $date, $time, $notes){
            if (isset($doctor)&&isset($fecha)&&isset($dependencia)&&isset($nombre)&&isset($date)&&isset($time)&&isset($notes)){
                $nuevacita = array(
                "MedicoID" => $doctor,
                "Fecha" => "\"$date\"",
                "Hora" => "\"$time\"",
                "Notas" =>"\"$notes\""
                );

                $paciente = array(
                "Nombre" => "\"$nombre\"",
                "Apellido" => "\"$fecha\"",
                "Dependencia" => "\"$dependencia\""
                
                );

                $ejecutar =$this->insertarDatos($paciente, $nuevacita);

                return $ejecutar;
            }
        }

        public function updateDatos($id, $parametros = null, $tabla ="citas"){
            if ($this->bd->conn != null){
                if ($parametros != null){

                    $columna = implode(',', array_keys($parametros));
                    $values = implode(', ' , array_values($parametros));
                    // create sql query

                    $query_string = sprintf("UPDATE %s SET %s WHERE CitasID = %s", $tabla, $values, $id);
                    print_r($query_string);
                    $actualizar = $this->bd->conn->query($query_string) or die("Error: No se pudo actualizar la consulta");
                    return $actualizar;
                }
            }
        }

        public function newDatos($doctor, $fecha, $hora, $fechan, $horan, $peso, $talla, $cc, $inmc, $temp, $ta, $fc, $fr, $notes, $obs, $prono, $id){
            if (isset($doctor)&&isset($fecha)&&isset($hora)&&isset($fechan)&&isset($horan)&&isset($peso)&&isset($talla)&&isset($cc)&&isset($inmc)&&isset($temp)&&isset($ta)&&isset($fc)&&isset($fr)&&isset($notes)&&isset($obs)&&isset($prono)&&isset($id)){
                $parametros = array(
                    "MedicoID" => "MedicoID='$doctor'",
                    "Fecha" => "Fecha='$fecha'",
                    "Hora" => "Hora='$hora'",
                    "Fecha_Nota" => "Fecha_Nota='$fechan'",
                    "Hora_Nota" => "Hora_Nota='$horan'",
                    "Peso" => "Peso='$peso'",
                    "Talla" => "Talla='$talla'",
                    "CircuCin" => "CircuCin='$cc'",
                    "InMC" => "InMC='$inmc'",
                    "Temp" => "Temp='$temp'",
                    "TenArt" => "TenArt='$ta'",
                    "FreCar" => "FreCar='$fc'",
                    "FreResp" => "FreResp='$fr'",
                    "Notas" => "Notas='$notes'",
                    "Obs" => "Obs='$obs'",
                    "Prono" => "Prono='$prono'",
                );

                $actualizar =$this->updateDatos($id, $parametros);

                return $actualizar;
            }
        }
    }
?>