<?php 

$host = 'localhost:3307';
$dbname = 'users';
$user = 'root';
$pass = '';

$conn = mysqli_connect($host, $dbname, $user, $pass);
if(!$conn){
  echo 'Data Failed!';
}else{
  echo 'connected';
}

?>