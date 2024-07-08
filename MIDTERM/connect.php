<?php 
	$connection = new mysqli('localhost', 'root','','dbstudentinfosys');
	
	if (!$connection){
		die (mysqli_error($mysqli));
	}
		
?>