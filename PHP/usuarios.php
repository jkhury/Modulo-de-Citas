<?php
include('functions.php'); 

if ($resultset = getSQLResultSet("SELECT * FROM `usuarios` WHERE estado = 1")) {
	
    	while ($row = $resultset->fetch_array(MYSQLI_NUM)) {
    	echo json_encode($row);
		
    	
    	}
    	
   }
   
?>