<?php 
include "validar.php";
 ?>
<!doctype html>
<html lang="pt-BR">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  <!-- viewport - para seite ser responsivo -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome/css/all.css" rel="stylesheet">

    <style type="text/css">

      .b {
        padding-left: 120px; 
      }
      .a {
        padding-left: 70px; 
      }
      #formulario{
        background-color: rgba(176,196,222, 0.3);
      }

      #sobre{
        text-align: justify;
      }

      .carousel-inner img {

        width: 100%;
        height: 530px; 
      }

      .fa-hand-paper, .fa-user{
        color: #FFFFFF;
      }

      #rodape{
        text-align: center;
        margin-top: 90px;
        padding: 10px;
        position: absolute;
        bottom:0;
      }

    </style>

    <title>Administrador - DENÚNCIA ANÔNIMA</title>
  </head>
  <body>
  <nav class="navbar mb-4 navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php"><i class="far px-4 fa-hand-paper fa-2x"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item b">
            <a class="nav-link" href="index.php#sobre">Sobre Nós</a>
          </li>
          <li class="nav-item b">
            <a class="nav-link" href="index.php#tipos">Tipos de denúncia</a>
          </li>
          <li class="nav-item b">
            <a class="nav-link" href="index.php#formulario">Faça sua Denúncia</a>
          </li>
          <li class="nav-item b">
            <a class="nav-link"  href="sair.php">Sair <i class="fas fa-user-times mx-2 fa-1x "></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <div class="container">   
   
      <div class="row text-center">

        <?php

          include "conexao.php";

          $iddViolencia = $_GET['idViolencia'] ?? '';

          $sql = "SELECT * FROM tipo_violencia WHERE idViolencia = $iddViolencia";

          $dados = mysqli_query($conn, $sql);

          $linha = mysqli_fetch_assoc($dados);
             
        ?>

      </div>

  </div>


  <div class="container">
    <div class="row">   
      <div class="col-10">
        <h3 class="p-5 text-muted">Alterar Tipo de Violencia</h3>
      </div>
      <div class="col-2 p-5">
        <a href="crud_violencia.php" class="btn btn-dark">Retornar</a>
      </div>
    </div>
      <form class="p-3 mt-4" action="editar_violencia_scripts.php" method="POST" >
      <div class="form-row">
        <div class="form-group col-md-6 p-3">
          <label class="form-label text-muted" for="desTipoViolencia">Descrição/Nome:</label>
          <input type="text" class="form-control text-muted" name="desTipoViolencia" required value="<?php echo $linha['desTipoViolencia']; ?>">
        </div>
      </div>
        <div class="row">
          <div class="col-6 text-center mt-3">
            <button type="submit" class="btn btn-dark mx-3 mt-3">Alterar Violência</button>
            <input type="hidden" name="iddViolencia" value="<?php echo $linha['idViolencia']; ?>">
          </div>
        </div>
    </form>
  </div>


  

    <footer id="rodape" class=" bg-dark text-light container-fluid">
        <p>&copy; 2021 - Todos os Direitos Reservados :: Desenvolvido por Laura Rios</p>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>

  </body>


</html>