<?php
	$db_connection = pg_connect("");
    $result = pg_query($db_connection, "SELECT * FROM test.roermond order by jaren");
    $data = array();
    while ($row = pg_fetch_array($result))
    { 
      $data[] = $row;
    } 
    echo json_encode($data);
    pg_close($db_connection);
     
?>

