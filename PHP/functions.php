<?php 
header( 'Content-Type: text/html;charset=utf-8' );



function ejecutarSQLCommand($commando){
 
  $mysqli = new mysqli("localhost", "id18120228_rootpsico", "%r^>2ZE52YvmEjwF", "id18120228_psicovida");


if ($mysqli->connect_error) {

    printf("Connect failed: %s\n", $mysqli->connect_error);

echo li;

    exit();
}

if ( $mysqli->multi_query($commando)) {
     if ($resultset = $mysqli->store_result()) {
    	while ($row = $resultset->fetch_array(MYSQLI_BOTH)) {

echo listo;
    		
    	}
    	$resultset->free();
     }
    
   
}



$mysqli->close();
}

function getSQLResultSet($commando){
 
 
  $mysqli = new mysqli("localhost", "id18120228_rootpsico", "%r^>2ZE52YvmEjwF", "id18120228_psicovida");

/* check connection */
if ($mysqli->connect_errno) {

    printf("Connect failed: %s\n", $mysqli->connect_error);

    exit();

}

if ( $mysqli->multi_query($commando)) {

	return $mysqli->store_result();
	
     
    
   
}



$mysqli->close();

}


?>
