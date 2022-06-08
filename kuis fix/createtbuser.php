<?php
$servername	="localhost";
$username	="root";
$password	="";
$database	="kuis";

include "koneksi.php";

$querysql= "CREATE TABLE user(
id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(50) NOT NULL,
address VARCHAR(50),
email VARCHAR(50),
homepage VARCHAR(50),
username VARCHAR(25),
password VARCHAR (25)
)";

if(mysqli_query($conn, $querysql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($conn);
}

mysqli_close($conn); 
?>