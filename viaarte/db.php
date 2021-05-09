<?php
/*
$usuario = 'root';
$senha = '';
$servidor = 'localhost';
$banco = 'viaarte';
try{
	$db = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
	
}
catch(PDOException $e) {
  echo $e->getMessage();
} */
?> 

<?php

$db = @mysqli_connect('localhost', 'root', '', 'viaarte');
if (!$db) {
 echo "Error: " . mysqli_connect_error();
 exit();
}
  mysqli_set_charset($db,"utf8");

?>


