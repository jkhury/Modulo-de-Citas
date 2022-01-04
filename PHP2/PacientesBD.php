<?php
    class Paciente{
        public $bd = null;

        public function __construct(ConexionBD $bd){
            if(!isset($bd->conn)) return null;
            $this->bd = $bd;
        }

        public function getDatos($tabla = 'paciente'){
            $select = $this->bd->conn->query(query:"SELECT * FROM {$tabla}");

            $selectArreglo = array();

            while($pac = mysqli_fetch_array($select, MYSQLI_ASSOC)){
                $selectArreglo[] = $pac;
            }

            return $selectArreglo;
        }

        public function insertarDatos($parametros = null, $tabla ="paciente"){
            if ($this->bd->conn != null){
                if ($parametros != null){

                    $columna = implode(',', array_keys($parametros));
                    $values = implode(',' , array_values($parametros));
                    // create sql query
                    $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $tabla, $columna, $values);
                    print_r($query_string);
                    $ejecutar = $this->bd->conn->query($query_string);
                    return $ejecutar;
                }
            }
        }
        
        public function postDatos($nombre, $apellido, $Edad, $numt){
            if (isset($nombre)&&isset($apellido)&&isset($Edad)&&isset($numt)){
                $parametros = array(
                    "Nombre" => "\'$nombre\'",
                    "Apellido" => "\'$apellido\'",
                    "Edad" => "\'$edad\'",
                    "Dependencia" => $dependencia
                );

                $ejecutar =$this->insertarDatos($parametros);

                return $ejecutar;
            }
        }

        public function updateDatos($id, $parametros = null, $tabla ="paciente"){
            if ($this->bd->conn != null){
                if ($parametros != null){

                    $columna = implode(',', array_keys($parametros));
                    $values = implode(', ' , array_values($parametros));
                    // create sql query

                    $query_string = sprintf("UPDATE %s SET %s WHERE PacienteID = %s", $tabla, $values, $id);
                    print_r($query_string);
                    $actualizar = $this->bd->conn->query($query_string) or die("Error: No se pudo actualizar la consulta");
                    return $actualizar;
                }
            }
        }

        public function newDatos($nombre, $apellido, $numt, $dependencia, $expd, $id){
            if (isset($nombre)&&isset($apellido)&&isset($numt)&&isset($dependencia)&&isset($expd)&&isset($id)){
                $parametros = array(
                    "Nombre" => "Nombre='$nombre'",
                    "Apellido" => "Apellido='$apellido'",
                    //"Tel_Num" => "Tel_Num='$numt'",
                    "Dependencia" => "Dependencia='$dependencia'",
                    "Expediente" => "Expediente='$expd'"
                );

                $actualizar =$this->updateDatos($id, $parametros);

                return $actualizar;
            }
        }

    }
?>