<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "result";

$conn = mysqli_connect($servername , $username , $password ,$dbname);

if ($conn) {
	// echo "conetion ok";
	
}else{echo "conection failed" .mysqli_connect_error();

}

?> 