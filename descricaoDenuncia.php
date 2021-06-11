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

          $iddDenuncia = $_GET['idDenuncia'] ?? '';

          $sql = "SELECT * FROM denuncia WHERE idDenuncia = $iddDenuncia";

          $dados = mysqli_query($conn, $sql);

          $linha = mysqli_fetch_assoc($dados);
          $endereco = $linha['endereco'];
          $cidade = $linha['cidade'];
          $cep = $linha['cep'];
          $nomeLocal = $linha['nomeLocal'];
          $dataUS = $linha['data'];
          $data = data_f_br($dataUS);
          $agressor = $linha['agressor'];
          $tipo_crime_d = $linha['tipo_crime_d'];
          $tipo_violencia_d = $linha['tipo_violencia_d'];
          $tipo_denuncia_d = $linha['tipo_denuncia_d'];
          $descricao = $linha['detalhes'];
          $midia = $linha['midia'];

          $sqlCrime = "SELECT * FROM tipo_crime WHERE idCrime = $tipo_crime_d";
          $dadosCrime = mysqli_query($conn, $sqlCrime);
          $linhaCrime = mysqli_fetch_assoc($dadosCrime);
          $crime = $linhaCrime['desTipoCrime'];

          $sqlViolencia = "SELECT * FROM tipo_violencia WHERE idViolencia = $tipo_violencia_d";
          $dadosViolencia = mysqli_query($conn, $sqlViolencia);
          $linhaViolencia = mysqli_fetch_assoc($dadosViolencia);
          $violencia = $linhaViolencia['desTipoViolencia'];

          $sqlTD = "SELECT * FROM tipo_denuncia WHERE idTipoDenuncia = $tipo_denuncia_d";
          $dadosTD = mysqli_query($conn, $sqlTD);
          $linhaTD = mysqli_fetch_assoc($dadosTD);
          $tipodenuncia = $linhaTD['desTipoDenuncia'];

        ?>

      </div>

  </div>


  <div class="container">
    <div class="row">   
      <div class="col-10">
        <h3 class="p-5 text-muted">Informações da Denúncia nº <?php echo "$iddDenuncia"; ?></h3>
      </div>
      <div class="col-2 p-5">
        <a href="crud_denuncia.php" class="btn btn-dark">Retornar</a>
      </div>
    </div>
    <div class="row">
      <div class="col-1"></div>
      <div class="col-10">
        <div id="titulo">
          <h5 class="text-muted">Endereço</h5>
          <h6 class="text-muted px-3"><b><?php echo $endereco; ?></b></h6>
          <h6 class="text-muted px-3"><?php echo "$cidade,  $cep"; ?></h6>
          <h6 class="text-muted px-3"><?php echo $nomeLocal; ?></h6>
        </div>
      </div>
      <div class="col-1 text-end text-muted"> <?php echo $data; ?></div>
        
    </div>
    <div class="row">
      <div class="col-1"></div>
      <div class="col-10">
        <div id="meio">
          <hr>
          <h6 class="text-muted px-3">Relação com o agressor: <?php echo $agressor; ?></h6>
          <h6 class="text-muted px-3">Tipo de Crime: <?php echo $crime; ?></h6>
          <h6 class="text-muted px-3">Tipo de Violência: <?php echo $violencia; ?></h6>
          <h6 class="text-muted px-3">Tipo de Denúncia: <?php echo $tipodenuncia; ?></h6>
        </div>
      </div>
      <div class="col-1 text-end text-muted"></div>
        
    </div>

    <div class="row">
      <div class="col-1"></div>
      <div class="col-10">
        <div id="fim">
          <hr>
        <div class="form-group col-md-6 p-3">
          <label class="form-label text-muted" for="detalhes"><b>Detalhes</b></label>
          <textarea class="form-control text-muted" rows="6" style="width: 900px" disabled required><?php echo $descricao; ?></textarea>
        </div>
        </div>
      </div>
      <div class="col-1 text-end text-muted"></div>
        
    </div>

    <div class="row">
      <div class="col-1"></div>
      <div class="col-10">
        <div id="fim">
          <hr>
        <div class="col-md-6 p-3">
          <h6 class="text-muted"><b>Provas:</b></h6>
          <small class="text-muted">Disponível para visualização em pasta "midias".</small>
          <p class="text-muted px-3 pt-2"><?php if($midia == null){echo " ";} else {echo $midia;} ?></p>
        </div>
        </div>
      </div>
      <div class="col-1 text-end text-muted"></div>
        
    </div>


  </div>
  

    <footer id="rodape" class=" bg-dark text-light container-fluid">
        <p>&copy; 2021 - Todos os Direitos Reservados :: Desenvolvido por Laura Rios</p>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>

  </body>


</html>