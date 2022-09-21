<?php

	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $dbname = "labreport";
	// $link = mysqli_connect("localhost", "root", "", "labreport");
	
	$servername = "sql212.epizy.com";
	$username = "epiz_32641152";
	$password = "I9kV29pQ3BiG";
	$dbname = "epiz_32641152_labreport";
	
	$link = mysqli_connect($servername, $username, $password, $dbname);
	
	if($link)
    {
    	// echo "Connection Successfully Created";
    }

	else
    {
    	die("connection not created because".mysqli_connect_error());
    }
	
?>