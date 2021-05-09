<?php
include_once("db.php");

if(!empty($_POST))
{
    // recebe os dados do form

    $nome = $_POST['fnome'];
    $sobrenome = $_POST['fsobrenome'];
    $genero = $_POST['fgenero'];
    $datanasc = $_POST['fdatanasc'];
    $email = $_POST['femail'];
    $telcel = $_POST['ftelcel'];
    $senha = $_POST['fsenha'];

    $senha = md5($senha);

// query para inserir um registro
    
$sql = "INSERT INTO usuario (nome, sobrenome, genero, datanasc, email, telcel, senha) 
VALUES ('${nome}', '${sobrenome}', '${genero}', '${datanasc}', '${email}', '${telcel}', '${senha}')";

echo $sql;

$query = $db->query($sql);

if ($query){
    // $db=null;
    mysqli_close($db);
    header("Location: login.html");exit;
//    echo "<br>Cadastrado com sucesso!";
}
else {
    // $db=null;
    mysqli_close($db);
    header("Location: logindin.php?msg=2&femail=$email");
//    echo "<br>Houve um erro no cadastro.";
}

}
?>