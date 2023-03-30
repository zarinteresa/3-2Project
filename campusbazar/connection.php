<?php


$servername= "localhost:3307";
$username= "root";
$password= "teresa";
$dbname= "grocery";


$conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn){
	echo "";
}
else{
	die("Connection failed ".mysql_connect_error());
}

?>