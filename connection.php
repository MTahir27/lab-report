<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "labreport";
	
	$link = mysqli_connect("localhost", "root", "", "labreport");
	
	if($link)
    {
    	// echo "Connection Successfully Created";
    }

	else
    {
    	die("connection not created because".mysqli_connect_error());
    }
	
?>