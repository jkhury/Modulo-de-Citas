<?php
$servidor="localhost";
$usuario="id18120228_rootpsico";
$pwdUsuario="%r^>2ZE52YvmEjwF";
$nombreBD="id18120228_psicovida";


$conexion =  mysqli_connect($servidor, $usuario, $pwdUsuario,$nombreBD);
if (!$conexion) {
    die('No pudo conectarse: ' . mysqli_error($conexion));

}


$consulta="DELETE FROM  usuarios  WHERE Id = '$_REQUEST[id]'";


mysqli_query($conexion,$consulta)
  or die("Se actualizo ".mysqli_error($conexion));


mysqli_close($conexion);

echo "usuario dado de baja.";