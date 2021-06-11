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

    <title>Login - Denúncia Anônima </title>
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

    <div class="row">
      
      <div class="col-3"></div>
      <div class="col-6 text-muted">

        <h3 class="p-5 text-center text-muted"><strong>Login para Administradores do Site</strong></h3>
        
        <form action="login.php" method="POST">
          <div class="form-group">
            <label class="form-label" for="emailLogin">E-mail</label>
            <input type="email" class="form-control text-muted my-3" name="emailLogin" required>
          </div>
          <div class="form-group">
            <label for="senhaLogin">Senha</label>
            <input type="password" required name="senhaLogin" class="form-control text-muted my-3" aria-describedby="passwordHelpBlock">
            <small id="passwordHelpBlock" class="form-text text-muted">
               
            </small>
          </div>

            <div class="botaoC">
              <button type="submit" class="btn btn-dark my-5 mx-auto d-block"> Entrar</button>
            </div>
        </form>
          <?php 
            if (isset($_POST['emailLogin'])) {
              $emailLogin = $_POST['emailLogin'];
              $senhaLogin = md5($_POST['senhaLogin']);

              include "conexao.php";
              $sql = "SELECT * from `administrador` WHERE emailAdm = '$emailLogin' AND senha = '$senhaLogin'";

              if ($result = mysqli_query($conn, $sql)) {
                $num_registros = mysqli_num_rows($result);
                if ($num_registros == 1) {
                  $linha = mysqli_fetch_assoc($result);
                  $idAdministrador = $linha['idAdm'];


                if (($emailLogin == $linha['emailAdm']) and ($senhaLogin == $linha['senha'])) {
                session_start();
                $_SESSION['emailLogin'] = $idAdministrador;
                header("location: adm.php");
                } else{
                echo "Login Inválido!";
                }
              } else{
                echo "Login ou senha inválidos.";
              }  
              } else {
                echo "Não cadastrado";
              }
            }
          ?>
      </div>
         <div class="col-3">
           <div class="card" >
              <div class="card-body text-center text-muted">
                <h5 class="card-title">Login para Administrador</h5>
                
                <p class="card-text mt-3">E-mail: admin@admin.com </p>
                <p class="card-text">Senha: adminn</p>
                
              </div>
            </div>
         </div>
    </div>
  </div>
  <div class="container text-end">
   <a href="index.php" class="btn btn-dark">Retornar</a>
  </div>
    <footer id="rodape" class=" bg-dark text-light container-fluid">
        <p>&copy; 2021 - Todos os Direitos Reservados :: Desenvolvido por Laura Rios</p>
    </footer>

  <script src="js/bootstrap.bundle.min.js"></script>


  </body>
</html>