<?php

    class Nota{
        public $bd = null;

        public function __construct(ConexionBD $bd){
            if(!isset($bd->conn)) return null;
            $this->bd = $bd;
        }

        public function getDatos($tabla = 'nota'){
            $select = $this->bd->conn->query(query:"SELECT * FROM {$tabla}");

            $selectArreglo = array();

            while($doc = mysqli_fetch_array($select, MYSQLI_ASSOC)){
                $selectArreglo[] = $doc;
            }

            return $selectArreglo;
        }

        public function insertarDatos($nota = null, $tabla ="nota"){
            if ($this->bd->conn != null){
                if (($nota != null)){
                    $columna = implode(',', array_keys($nota));
                    $values = implode(',' , array_values($nota));

                    $query_string = sprintf("INSERT INTO %s(CitasID, %s) VALUES(LAST_INSERT_ID(), %s)", $tabla, $columna,$values);
                    $ejecutar = $this->bd->conn->query($query_string);

                    return array(,$ejecutar);
                }
            }
        }

        public function postDatos($notes){
            if (isset($notes)){
                $nota = array(
                    "Notas" =>"\"$notes\""
                );

                $ejecutar =$this->insertarDatos($nota);

                return $nota;
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

        public function newDatos($doctor, $fecha, $hora, $fechan, $horan, $peso, $talla, $cc, $inmc, $temp, $ta, $fc, $fr, $notes, $id){
            if (isset($doctor)&&isset($fecha)&&isset($hora)&&isset($fechan)&&isset($horan)&&isset($peso)&&isset($talla)&&isset($cc)&&isset($inmc)&&isset($temp)&&isset($ta)&&isset($fc)&&isset($fr)&&isset($notes)&&isset($id)){
                $nota = array(
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
                    "Notas" => "Notas='$notes'"
                );

                $actualizar =$this->updateDatos($id, $parametros);

                return $actualizar;
            }
        }
    }
?>