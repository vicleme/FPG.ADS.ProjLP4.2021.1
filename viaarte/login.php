<?php
session_start(); 
//require 'db.php';
include_once("db.php");

$email = $_POST['femail'];
$senha = $_POST['fsenha'];
$senha = md5($senha);
                                  
$sql = "SELECT email, nome, senha FROM usuario WHERE email = '${email}' AND senha = '${senha}';";

// $nome = $sql['nome'];

echo $sql;

$query = $db->query($sql);
                        
foreach($db->query($sql)as $row)

if ($row>0){
        $_SESSION['email'] = $row['email'];
        $nome = $_SESSION['nome'] = $row['nome'];
        //desconectar
        // $db=null;
        mysqli_close($db);       
        header("Location: pedidos.php?nome=$nome");
        exit;
        
} /* else {
        mysqli_close($db);
        header("Location: logindin.php?msg=1&femail=$email");
        exit;
} */
                                    
//desconectar
//$db=null;
mysqli_close($db);
header("Location: logindin.php?msg=1&femail=$email");
                                   
exit;
?>