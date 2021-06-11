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
        padding-left: 90px; 
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
    <div class="row ">
      
        <hr>
        <nav class="navbar mb-4 navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item a">
            <a class="nav-link" href="adm.php#denuncia">Denúncias</a>
          </li>
          <li class="nav-item a">
            <a class="nav-link" href="adm.php#tipoViolencia">Tipo Violências</a>
          </li>
          <li class="nav-item a">
            <a class="nav-link" href="adm.php#tipoCrime">Tipo Crimes</a>
          </li>
          <li class="nav-item a">
            <a class="nav-link" href="adm.php#tipoDenuncia">Tipo Denúncias</a>
          </li>
          <li class="nav-item a">
            <a class="nav-link" href="adm.php#administradores">Administradores</a>
          </li>
        </ul>
        </div>
        </nav>
        <hr>
      
    </div>
  </div>


  <div class="container text-center">
    <div class="row">
     
      <div class="col-6"><a href="crud_denuncia.php" class="btn btn-success mx-5 mt-5">Ver Denúncias Cadastradas</a></div>
      <div class="col-6 text-end"><a href="gerenciarPerfil.php" class="btn btn-primary mx-5 mt-5">Gerenciar Perfil</a></div>
    </div>
  </div>

  <div class="container p-5" id="tipoViolencia">
    <div class="row"> 
      <div class="col-6">  
        <h3 class="py-5 px-5 text-muted">Cadastrar Novo Tipo de Violência</h3>
      </div>
      <div class="col-6 text-end">
        <a href="crud_violencia.php" class="btn btn-secondary mt-5">Ver tipo de Violência cadastradas</a>
      </div>
    </div>
      <form class="p-3 mt-4" action="cadastro_violencia_scripts.php" method="POST">
      <div class="form-row text-muted">
        <div class="form-group col-md-6 p-3">
          <label class="form-label" for="desTipoViolencia">Descrição/Nome: </label>
          <input type="text" class="form-control" name="desTipoViolencia" required>
        </div>
      </div>
        <div class="row">
          <div class="col-6 text-center mt-3">
            <button type="submit" class="btn btn-dark mx-3 mt-3">Cadastrar Tipo de Violência</button>
          </div>
        </div>
    </form>
  </div>

    <div class="container p-5" id="tipoCrime">
      <hr>
      <div class="row"> 
        <div class="col-8">  
          <h3 class="py-5 px-5 text-muted">Cadastrar Novo Tipo de Crime</h3>
        </div>
        <div class="col-4 text-end">
          <a href="crud_crime.php" class="btn btn-secondary mx-5 mt-5">Ver Crimes Cadastrados</a>
        </div>
      </div>
    <form class="p-3 container mt-4" action="cadastro_crime_scripts.php" method="POST">
      <div class="form-row text-muted">
        <div class="form-group col-md-6 p-3">
          <label class="form-label" for="desTipoCrime">Descrição/Nome:</label>
          <input type="text" class="form-control text-muted" name="desTipoCrime" required>
        </div>
      </div>
        <div class="row">
          <div class="col-6 text-center mt-3">
            <button type="submit" class="btn btn-dark mx-3 mt-3">Cadastrar Tipo de Crime</button>
          </div>
        </div>
      </form>
    </div>

  <div class="container p-5" id="tipoDenuncia">
    <hr>
      <div class="row"> 
        <div class="col-7">  
          <h3 class="py-5 px-5 text-muted">Cadastrar Novo Tipo de Denúncia</h3>
        </div>
        <div class="col-5 text-end">
          <a href="crud_tipodenuncia.php" class="btn btn-secondary mx-5 mt-5">Ver tipos de denúncia cadastradas</a>
        </div>
      </div>
    <form class="p-3 container mt-4" action="cadastro_tipodenuncia_scripts.php" method="POST">
      <div class="form-row text-muted">
        <div class="form-group col-md-6 p-3">
          <label class="form-label" for="desTipoDenuncia">Descrição/Nome:</label>
          <input type="text" class="form-control text-muted" name="desTipoDenuncia" required>
        </div>
      </div>
        <div class="row">
          <div class="col-6 text-center mt-3">
            <button type="submit" class="btn btn-dark mx-3 mt-3">Cadastrar Tipo de Denúncia</button>
          </div>
        </div>
      </form>
  </div>

  <div class="container p-5" id="administradores">
    <hr>
      <div class="row"> 
        <div class="col-6">  
          <h3 class="py-5 px-5 text-muted">Cadastrar Novo Administrador</h3>
        </div>
        <div class="col-6 text-end">
          <a href="crud_administrador.php" class="btn btn-secondary mx-5 mt-5">Ver administradores cadastrados</a>
        </div>
      </div>

    <form class="p-3 container mt-4" action="cadastro_administrador_scripts.php" method="POST">
      <div class="form-row text-muted col-6">
        <div class="form-group">
          <label class="form-label my-2" for="nomeAdm">Nome Completo</label>
          <input type="text" class="form-control text-muted" name="nomeAdm" required>
        </div>
        <div class="form-group">
          <label class="form-label my-2" for="funcao">Função</label>
          <input type="text" class="form-control text-muted" name="funcao" required>
        </div>
        <div class="form-group">
          <label class="form-label my-2" for="emailAdm">Endereço de email</label>
          <input type="email" class="form-control text-muted" name="emailAdm" required>
        </div> 
        <div class="form-group">
          <label class="form-label my-2" for="senha">Senha</label>
          <input type="password" minlength="6" class="form-control text-muted" name="senha" required aria-describedby="passwordHelpBlock">
          <small id="passwordHelpBlock" class="form-text text-muted">
            Deve ter, pelo menos, 6 caracteres.
          </small>
        </div> 
      </div>
        <div class="row">
          <div class="col-6 text-center mt-3">
            <button type="submit" class="btn btn-dark mx-3 mt-3">Cadastrar Administradores</button>
          </div>
        </div>
      </form>
  </div>
    
  <footer id="rodape" class="bg-dark text-light container-fluid">
    <p>&copy; 2021 - Todos os Direitos Reservados :: Desenvolvido por Laura Rios</p>
  </footer>

  <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>