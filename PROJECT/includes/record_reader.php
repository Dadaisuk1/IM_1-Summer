<?php
	include 'includes/connect.php';
	
	if (!$connection) {
	    die('Could not connect: ' . mysqli_connect_error());
    }
	
	$query = 'SELECT * from  tblclient';
        $resultset = mysqli_query($connection, $query);		
?>