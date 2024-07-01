<?php 
	$connection = new mysqli('localhost', 'root','','dbstudentinfoys');
	
	if (!$connection){
		die (mysqli_error($mysqli));
	}
		
?>