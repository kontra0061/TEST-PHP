<?php
	require("constants.php");
	try{
		$con = mysqli_connect(DB_SERVER,DB_USER, DB_PASS);
	  }
	   catch(Exception $e){
		exit();
	   };
	   try{
		mysqli_select_db($con, DB_NAME) or die("Cannot select DB");;
	  }
	   catch(Exception $e){
		exit();
	   };
	

	
	?>