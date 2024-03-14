<?php 
	$connect = new mysqli("localhost", "root","","testing");
	
		if($connect->connect_errno){
		die("Could not connect: " . $connect->connect_errno);
		}
?>