<?php
$servidor="localhost";
$usuario="id18120228_rootpsico";
$pwdUsuario="%r^>2ZE52YvmEjwF";
$nombreBD="id18120228_psicovida";


$conexion =  mysqli_connect($servidor, $usuario, $pwdUsuario,$nombreBD);
if (!$conexion) {
    die('No pudo conectarse: ' . mysqli_error($conexion));
}


$consulta="INSERT INTO usuarios(usuario,contra,nombre,tipous,estado) values ('$_REQUEST[usuario]','$_REQUEST[contra]','$_REQUEST[nombre]',1,1)";
mysqli_query($conexion,$consulta)
  or die("No se pudo registrar ".mysqli_error($conexion));
  
$consulta="INSERT INTO Terapeutas(nombre,cedula,especialidad,telefono) values ('$_REQUEST[nombre]','$_REQUEST[cedula]','$_REQUEST[especialidad]','$_REQUEST[telefono]')";

mysqli_query($conexion,$consulta)
  or die("No se pudo registrar ".mysqli_error($conexion));

mysqli_close($conexion);

echo "Terapeuta Dado de Alta.";
?>