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

      .nav-item {
        padding-left: 120px; 
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
            <a class="nav-link"  href="sair.php">Sair <i class="fas fa-user-times mx-2 fa-1x "></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

	  <?php  

	  if (isset($_POST['pesquisa'])) {
	  	$busca = $_POST['pesquisa'];
	  }	else {
	  	$busca = '';
	  }

	  include "conexao.php";

	  $sql = "SELECT * FROM administrador WHERE nomeAdm LIKE '%$busca%'";
	  $dados = mysqli_query($conn, $sql);

	  ?>

  	<div class="container">
  		<div class="row mb-4">
  			<div class="col-11">
  		<form class="form-inline" action="crud_administrador.php" method="POST">
			
			<input class="form-control" type="search" name="pesquisa" placeholder="Procurar por nome do Administrador" aria-label = "Search" autofocus>
			</div>
			<div class="col-1">
			<button class="btn btn-dark " type="submit">Pesquisar</button>
			</div>
		</form>
		</div>
	</div>	

	<div class="container" style="min-height: 353px;">
		  <table class="table table-hover text-muted">
		    <thead>
		      <tr>
		        <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Função</th>
            <th scope="col">E-mail</th>
            <th scope="col"></th>
            
		      </tr>
		    </thead>
		    <tbody>
		    	<?php
		    			  while ($linha = mysqli_fetch_assoc($dados)) {
  						  	  $idAdm = $linha['idAdm'];
  						  	  $nomeAdm = $linha['nomeAdm'];
                    $funcao = $linha['funcao'];
                    $emailAdm = $linha['emailAdm'];
					    
					          echo "  <tr>
								        <th scope='row'>$idAdm</th>
                        <td>$nomeAdm</td>
                        <td>$funcao</td>
                        <td>$emailAdm</td>
								        <td class='text-end'>
								        	<a href = 'alterar_administrador.php?idAdm=$idAdm' class = 'p-2 btn btn-dark btn-sm'>Alterar</a>
								        	<a href = '#' class = 'p-2 btn btn-dark btn-sm' data-bs-toggle='modal' data-bs-target='#confirmarexclusao'
                          onclick=" . '"' ."pegar_dados($idAdm, '$nomeAdm')" .'"'.">Excluir</a>
								        </td>
								      </tr>";
						  }
		    	?>

		    </tbody>
		  </table>
	</div>

  <div class="container text-end">
    <a class="btn btn-dark " href="adm.php">Retornar</a>
  </div>

  <!-- Modal -->
    <div class="modal fade" id="confirmarexclusao" tabindex="-1" aria-labelledby="confirmarexclusao" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="confirmarexclusao">Exluir</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="excluir_administrador_scripts.php" method="POST">
              <p>Confirmar exclusão de <b id="nome_adm"></b> ?</p>
              <b id="nome_adm"></b>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
              <input type="hidden" name="nomeAdm" id="nomeAdm1">
              <input type="hidden" name="iddAdm" id="identA">
              <input type="submit" class="btn btn-danger" value = "Sim">
              </form>
            </div>
          </div>
        </div>
      </div>

    <script type="text/javascript">
      function pegar_dados(iddAdm, nomeAdm) {
        document.getElementById('nome_adm').innerHTML = nomeAdm;
        document.getElementById('nomeAdm1').innerHTML = nomeAdm;
        document.getElementById('identA').value = iddAdm;
      }
    </script>


    <footer id="rodape" class=" bg-dark text-light container-fluid">
        <p>&copy; 2021 - Todos os Direitos Reservados :: Desenvolvido por Laura Rios</p>
    </footer>

 <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>