<?php 
	$connection = new mysqli('localhost', 'root','','dbtupacsystem');
	
	if (!$connection){
		die (mysqli_error($mysqli));
	}
		
?>