<?php
$servidor="localhost";
$usuario="id18120228_rootpsico";
$pwdUsuario="%r^>2ZE52YvmEjwF";
$nombreBD="id18120228_psicovida";


$conexion =  mysqli_connect($servidor, $usuario, $pwdUsuario,$nombreBD);
if (!$conexion) {
    die('No pudo conectarse: '.mysqli_error($conexion));
}


$consulta="INSERT INTO citas(Id,nombre,edad,fecha,hora,telefono,terapeuta,estado) values (NULL,'$_REQUEST[nombre]','$_REQUEST[edad]','$_REQUEST[fecha]','$_REQUEST[hora]','$_REQUEST[telefono]','$_REQUEST[terapeuta]',1)";

mysqli_query($conexion,$consulta)
  or die("No se pudo registrar ".mysqli_error($conexion));

mysqli_close($conexion);

echo "Usuario Dado de Alta.";
?>