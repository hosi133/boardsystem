<?php

   $serverName = "localhost";
   $userName = "root";  
   $password = "1234";
   $dbName = "board";

   $connect = mysqli_connect($serverName,$userName,$password,$dbName);

    if(mysqli_connect_error()){
        echo "Failed to connect! ";
		exit();
	}
    
    
	
?> 