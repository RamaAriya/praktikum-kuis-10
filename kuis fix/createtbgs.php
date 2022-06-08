<?php
$servername	="localhost";
$username	="root";
$password	="";
$database	="kuis";

include "koneksi.php";

$querysql= "CREATE TABLE gs(
id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
posted DATE,
nama VARCHAR(50),
email VARCHAR(50),
address VARCHAR(50),
city VARCHAR(25),
pesan VARCHAR (25)
)";

if(mysqli_query($conn, $querysql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($conn);
}

mysqli_close($conn); 
?>