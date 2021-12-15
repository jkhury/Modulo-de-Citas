<?php
include('functions.php'); 
$user=$_GET['user'];
$contra=$_GET['contra'];
if ($resultset = getSQLResultSet("SELECT tipous FROM `usuarios` WHERE usuario='$user' and contra='$contra' ")) {
	
    	while ($row = $resultset->fetch_array(MYSQLI_NUM)) {
    	echo json_encode($row);
		
    	
    	}
    	
   }
   
?>