<?php
if ($_GET['msg']=='1'){
    $msg="Usu&aacute;rio n&atilde;o cadastrado.";
} else if ($_GET['msg']=='2'){
    $msg="Usu&aacute;rio j&aacute; cadastrado.";
} else if ($_GET['msg']=='3'){
  $msg="Por favor, autentifique-se.";
} 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>Login - ViaArte</title>
    </head>
    <body style="background-color:rgb(250, 244, 209)">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#e0af43">
              <a class="navbar-brand" href="index.html">
              ViaArte
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link" href="index.html">Início</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="">Produtos</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="pedidos.php">Meus Pedidos</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="">Contatos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="">Sobre</a>
                    </li>
                  </ul>
              </div>
              <form action="login.php" method="post">
                <input type="text" placeholder="Usuário" name="femail">
                <input type="password" placeholder="Senha" name="fsenha">
                <button type="submit">Login</button>
              </form>
              <div style="text-align:center;">  - <a href="cadastro.html" style="color: rgb(92, 92, 19);">Cadastre-se</a><br><a href="cadastro.html" style="color: rgb(92, 92, 19);"> - Ajuda</a></div>
          </nav>
        </header>
        <div class="container">
          <div class="card  mx-auto mt-5" style="width: 40%;"> 
           <div class="card-header">Login</div>
            <div class="card-body">
             <form action="login.php" method="post">
                 <?php
                 echo "<h2>".$msg."</h2>";
                 ?>
             <div class="form-group">
                 <p>Usuário: </p>
                 <label for="email" class="sr-only">E-mail</label>
                 <?php
                 if($_GET['femail']!=null){
                  echo "<input type='email'  id='email' value=".$_GET['femail']." placeholder='E-mail' name='femail' maxlength=50 style='width:100%' required>";
              } else {
                echo "<input type='email'  id='email' value='' placeholder='E-mail' name='femail' maxlength=50 style='width:100%' required>";  
              };                        
?>                   
             </div>
               <div class="form-group">
                   <p>Senha: </p>
                   <label for="senha" class="sr-only">Senha</label>
                   <input type="password"  id="senha" value="" placeholder="" name="fsenha" maxlength=24 style="width:100%" required>
               </div>
           <div class="form-group">
             <div class="form-check">
               <input class="form-check-input" type="checkbox" id="gridCheck" name="fmantercon">
               <label class="form-check-label" for="gridCheck">
                 Matenha-me conectado.                 
               </label>
             </div>
             <br><a href="">Esqueceu a senha?</a>
           </div>
             <button type="submit" class="btn btn-warning btn-block ">
               Login
              </button>
             </div>
             </form>
           </div>
        </div>
       </div>
        <footer style="background-color:#e0af43"><div>
          <hr/>
          <div align="center">Desenvolvido na disciplina de LP IV - Internet - <small>Prof.ª Denise Leme Fernandes</small></div>
          <div align="center" style="padding-bottom:15px"><small>Sávio Gabriel Santos Gois e Victor Gabriel Leme da Silva</small></div>
      </div>
    </footer>
      <script src="js/jquery-3.5.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
    </body>
</html>