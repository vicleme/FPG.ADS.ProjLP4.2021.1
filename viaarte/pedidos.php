<?php              
    if($_GET['nome']==null){
        header("Location: logindin.php?msg=3&femail=$email");
        exit;
    };
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
        <title>ViaArte</title>
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
              <div>Olá, <b>

                <?php              
                echo $_GET['nome'];
                ?>

              </b></div>
          </nav>
        </header><br>
        <h1 style="text-align: center;">Meus Pedidos</h1><br>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Cód.</th>
              <th scope="col">Nome</th>
              <th scope="col">Autor</th>
              <th scope="col">Categoria</th>
              <th scope="col">Preço</th>
              <th scope="col">Ação</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">12341</th>
              <td>Monalisa</td>
              <td>Leonardo da 20</td>
              <td>Pintura</td>
              <td>R$ 20,00</td>
              <td><a href="">Acompanhar</a></td>
            </tr>
            <tr>
              <th scope="row">12341</th>
              <td>O Grito</td>
              <td>Edvard Munch</td>
              <td>Pintura</td>
              <td>R$ 40,00</td>
              <td><a href="">Acompanhar</a></td>
            </tr>
            <tr>
              <th scope="row">12341</th>
              <td>A Fonte</td>
              <td>Marcel Duchamp</td>
              <td>Escultura</td>
              <td>R$ 0,15</td>
              <td><a href="">Acompanhar</a></td>
            </tr>
            <tr>
              <th scope="row">12341</th>
              <td>Abaporu</td>
              <td>Leonardo da 20</td>
              <td>Pintura</td>
              <td>Não tem preço</td>
              <td><a href="">Acompanhar</a></td>
            </tr>
            <tr>
          </tbody>
        </table>
      </main>
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