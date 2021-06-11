<!doctype html>
<html lang="pt-BR">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  <!-- viewport - para seite ser responsivo -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome/css/all.css" rel="stylesheet">

    <style type="text/css">

      .nav-item {
        padding-left: 140px; 
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

    <title>Denúncia Anônima </title>
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
          <li class="nav-item">
            <a class="nav-link" href="index.php#sobre">Sobre Nós</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#tipos">Tipos de denúncia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#formulario">Faça sua Denúncia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php"><i class="fas fa-user fa-2x"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <div class="container">   
   
      <div class="row text-center">

        <?php

          include "conexao.php";

          $endereco = $_POST['endereco'];
          $cidade = $_POST['cidade'];
          $data = $_POST['data'];
          $cep = $_POST['cep'];
          $nomeLocal = $_POST['nomeLocal'];
          $agressor = $_POST['agressor'];
          $detalhes = $_POST['detalhes'];
          $tipo_crime_d = $_POST['tipo_crime_d'];
          $tipo_denuncia_d = $_POST['tipo_denuncia_d'];
          $tipo_violencia_d = $_POST['tipo_violencia_d'];
          $midia = $_FILES['midia'];
          $nome_midia =  renomear_foto($midia);
          if ($nome_midia == 0) {
            $nome_midia = null;
          }



          $sql = "INSERT INTO `denuncia` ( `endereco`, `cidade`, `data`, `cep`, `nomeLocal`, `agressor`, `detalhes`, `tipo_crime_d`, `tipo_denuncia_d`, `tipo_violencia_d`, `midia`) VALUES ('$endereco','$cidade','$data','$cep', '$nomeLocal', '$agressor', '$detalhes', '$tipo_crime_d', '$tipo_denuncia_d', '$tipo_violencia_d', '$nome_midia')";


          if(mysqli_query($conn, $sql)){
            
            mensagem("Denúncia feita com sucesso!", 'success');

          } else
          
            mensagem("Erro no cadastro da denúncia!", 'danger');

        ?>

      </div>
      <div class="row">
        <div class="col-6"></div>
        <div class="col-6 text-end mt-2">

          <a href="index.php" class="btn btn-dark">Retornar</a>
        </div>
      </div>

  </div>


  
  <footer id="rodape" class="footer navbar-fixed-bottom bg-dark text-light container-fluid">
    <p>&copy; 2021 - Todos os Direitos Reservados :: Desenvolvido por Laura Rios</p>
  </footer>

  <script src="js/bootstrap.bundle.min.js"></script>


  </body>
</html>