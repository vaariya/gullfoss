<?php

	
	$host="localhost";
	$user="root";
	$password="";
	$db="gullfoss";

	$con=mysqli_connect($host,$user,$password,$db);
	
	if ($con) {
		// echo '<script type ="text/JavaScript">';  
		// echo 'alert("Conected")';  
		// echo '</script>';	
	}
	else
	{
		echo '<script type ="text/JavaScript">';  
		echo 'alert("JavaScript Alert Box by PHP")';  
		echo '</script>'; 
	}	
?>