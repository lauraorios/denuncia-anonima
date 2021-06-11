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
      <div class="row">
        <div class="col">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="imgs/5.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imgs/3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imgs/4.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        </div>
      </div>
      </div>

  <div class="container" id="sobre">
    <h3 class="p-5 text-center text-muted align-center"><strong>Quem somos nós?</strong></h3>
    <div class="row">
      <div class="col-lg-6">
        <p class="text-muted text-body">
        &nbsp; A integração da sociedade com os serviços públicos é caracterizada, em muitos casos, pela burocracia e pela ineficiência. Com os serviços de segurança pública, vê-se que a situação se repete: ao ligar para os serviços de segurança pública, o cidadão é atendido, em diversos casos, com desrespeito e morosidade e sua denúncia nem sempre é ouvida e investigada. Além disso, a dificuldade de comunicação por ligações tornam a investigação mais complicada e incerta, tendo em vista a incompreensão e as falhas na transmissão das informações. </p>
      </div>
      <div class="col-lg-6">
        <p class="text-muted text-body">
        &nbsp; Uma forma de melhorar essa comunicação é de um site que permita ao cidadão realizar denúncias de crimes e ilegalidades pelo seu celular, tablet ou computador pessoal. O site DENÚNCIA ANÔNIMA torna possível a transmissão mais acurada de informações, já que se baseia na realização de denúncias anônimas por meio da transferência de imagens e de vídeos e pela especificação detalhada do crime por vias digitais. 
        Este site permite a realização de denúncias à DECRIN, por meio da análise primária das denúncias pelos Administradores do site e do posterior repasse à delegacia especializada.
        </p>
      </div>
    </div>
  </div>

  <div id="tipos" class="container">
    <h3 class="p-5 text-center text-muted"><strong>Quais crimes podem ser denunciados por aqui?</strong></h3>
    <div class="row">
      <div class="col-lg-3">
        <a href="#formulario" class="text-decoration-none">
          <div class="card my-4">
          <img src="imgs/9.jpg" class="card-img-top" alt="...">
          <div class="card-body text-muted">
            <h5 class="card-title">Discriminação Racial</h5>
            <p class="card-text">Qualquer comportamento ou fala de distinção, exclusão, restrição ou preferência por determinada raça, nacionalidade, ascendência, cor ou ética é considerado discriminação racial. (De www.vittude.com).</p>
          </div>
        </div>
        </a>
      </div>

        <div class="col-lg-3">
          <a href="#formulario" class="text-decoration-none">
          <div class="card my-4">
          <img src="imgs/7.jpg" class="card-img-top" alt="...">
          <div class="card-body text-muted">
            <h5 class="card-title">LGBTfobia</h5>
            <p class="card-text">LGBTfobia é um conceito que abrange diversas formas de agredir pessoas que não são heterossexuais ou cisgêneras, seja verbalmente, fisicamente ou psicologicamente. (De www.catho.com.br)</p>
          </div>
        </div>
        </a>
      </div>
      <div class="col-lg-3">
        <a href="#formulario" class="text-decoration-none">
        <div class="card my-4">
          <img src="imgs/10.jpg" class="card-img-top" alt="...">
          <div class="card-body text-muted">
            <h5 class="card-title">Discriminação Religiosa</h5>
            <p class="card-text">A intolerância religiosa é o ato de discriminar, ofender e rechaçar religiões, liturgias e cultos, ou ofender, discriminar, agredir pessoas por conta de suas práticas religiosas e crenças. (De brasilescola.uol.com.br)</p>
          </div>
        </div>
        </a>
      </div>

      <div class="col-lg-3">
        <a href="#formulario" class="text-decoration-none">
        <div class="card my-4">
          <img src="imgs/8.jpg" class="card-img-top" alt="...">
          <div class="card-body text-muted">
            <h5 class="card-title">Crime contra a pessoa idosa ou com deficiência</h5>
            <p class="card-text">O crime contra a pessoa idosa é qualquer forma de agredir pessoas com mais de 60 anos, seja verbalmente, fisicamente ou psicologicamente. A discriminação em razão da deficiência é toda forma de distinção ou exclusão que tenha propósito de prejudicar a pessoa com deficiência (De TJDFT.com)</p>
          </div>
        </div>
        </a>
      </div>
    </div>
  </div>
  
    <div id="formulario" class="text-muted">
    <form class="p-3 container mt-4" action="cadastro_denuncia_scripts.php" method="POST" enctype="multipart/form-data">

       <h3 class="p-5">Fazer Denúncia</h3>

        <div class="form-row">
        <div class="form-group col-md-6 p-3">
          <label class="form-label" for="endereco">Endereço</label>
          <input type="text" class="form-control text-muted" name="endereco" placeholder="Rua X, nº 0" required>
        </div>
        </div>

        <div class="form-row">
        <div class="form-group col-md-6 p-3">
          <label class="form-label" for="cidade">Cidade do DF</label>
          <select name="cidade" class="form-control text-muted" required>
            <option value="" disabled selected >Escolher</option>
                            <option value="Águas Claras (RA XX)">Águas Claras (RA XX)</option>
                            <option value="Arniqueira (RA XXXIII)">Arniqueira (RA XXXIII)</option>
                            <option value="Brazlândia (RA IV)">Brazlândia (RA IV)</option>
                            <option value="Candangolândia (RA XIX)">Candangolândia (RA XIX)</option>
                            <option value="Ceilândia (RA IX)">Ceilândia (RA IX)</option>
                            <option value="Cruzeiro (RA XI)">Cruzeiro (RA XI)</option>
                            <option value="Fercal (RA XXXI)">Fercal (RA XXXI)</option>
                            <option value="Gama (RA II)">Gama (RA II)</option>
                            <option value="Guará (RA X)">Guará (RA X)</option>
                            <option value="Itapoã (RA XXVIII)">Itapoã (RA XXVIII)</option>
                            <option value="Jardim Botânico (RA XXVII)">Jardim Botânico (RA XXVII)</option>
                            <option value="Lago Norte (RA XVIII)">Lago Norte (RA XVIII)</option>
                            <option value="Lago Sul (RA XVI)">Lago Sul (RA XVI)</option>
                            <option value="Núcleo Bandeirante (RA VIII)">Núcleo Bandeirante (RA VIII)</option>
                            <option value="Paranoá (RA VII)">Paranoá (RA VII)</option>
                            <option value="Park Way (RA XXIV)">Park Way (RA XXIV)</option>
                            <option value="Planaltina (RA VI)">Planaltina (RA VI)</option>
                            <option value="Plano Piloto (RA I)">Plano Piloto (RA I)</option>
                            <option value="Recanto das Emas (XV)">Recanto das Emas (XV)</option>
                            <option value="Riacho Fundo (RA XVII)">Riacho Fundo (RA XVII)</option>
                            <option value="Riacho Fundo II (RA XXI">Riacho Fundo II (RA XXI)</option>
                            <option value="Samambaia (RA XII)">Samambaia (RA XII)</option>
                            <option value="Santa Maria (RA XIII)">Santa Maria (RA XIII)</option>
                            <option value="São Sebastião (RA XIV)">São Sebastião (RA XIV)</option>
                            <option value="SCIA/Estrutural (RA XXV)">SCIA/Estrutural (RA XXV)</option>
                            <option value="SIA (RA XXIX)">SIA (RA XXIX)</option>
                            <option value="Sobradinho (RA V)">Sobradinho (RA V)</option>
                            <option value="Sobradinho II (RA XXVI)">Sobradinho II (RA XXVI)</option>
                            <option value="Sol Nascente e Pôr do Sol ( RA XXXII)">Sol Nascente e Pôr do Sol ( RA XXXII)</option>
                            <option value="Sudoeste/Octogonal (RA XXII)">Sudoeste/Octogonal (RA XXII)</option>
                            <option value="Taguatinga (RA III)">Taguatinga (RA III)</option>
                            <option value="Varjão (RA XXIII)">Varjão (RA XXIII)</option>
                            <option value="Vicente Pires (RA XXX)">Vicente Pires (RA XXX)</option>
          </select>
        </div>
        <div class="form-group col-md-6 p-3">
          <label class="form-label" for="cep">CEP</label>
           <input type="text" class="form-control text-muted" name="cep" placeholder="00000-000" required>
        </div>
        <div class="form-group col-md-6 p-3">
          <label class="form-label" for="nomeLocal">Nome do local ou Estabelecimento</label>
          <input type="text" class="form-control text-muted" name="nomeLocal" placeholder="Restaurante, loja ...">
        </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6 p-3">
            <label class="form-label" for="agressor">Relação com o Agressor</label>
            <select name="agressor" class="form-control text-muted" required>
              <option value="" disabled selected >Escolher</option>
              <option>Companheiro(a)</option>
              <option>Pai/Mãe</option>
              <option>Parente (relação familiar)</option>
              <option>Colega de trabalho</option>
              <option>Amigo(a)/Conhecido(a)</option>
              <option>Desconhecido(a)</option>
            </select>
          </div>
          <div class="form-group col-md-6 p-3">
            <label class="form-label" for="tipo_denuncia_d">Tipo de Denúncia</label>
            <small class="text-muted">Inserrir opção que melhor representa a sua denúncia</small>
            <select name="tipo_denuncia_d" class="form-control text-muted" required>
            <option value="" disabled selected >Escolher</option>
            <?php 
                include "conexao.php";

                date_default_timezone_set('America/Sao_Paulo');
                $hoje = date('Y-m-d');


                $sql = "SELECT * FROM tipo_denuncia";
                $dados = mysqli_query($conn, $sql);


              while ($linha = mysqli_fetch_assoc($dados)) { 
                $desTipoDenuncia = $linha['desTipoDenuncia'];
               ?> <option value="<?php echo $linha['idTipoDenuncia']; ?>"> <?php echo "$desTipoDenuncia"; ?> </option> <?php
              }
                
            ?>

            </select>
          </div>
          <div class="form-group col-md-6 p-3">
            <label class="form-label" for="tipo_violencia_d">Tipo de Violência</label>
            <small class="text-muted">Inserrir opção que melhor representa a sua denúncia</small>
            <select name="tipo_violencia_d" class="form-control text-muted" required>
            <option value="" disabled selected >Escolher</option>
            <?php 
               
                $sql = "SELECT * FROM tipo_violencia";
                $dados = mysqli_query($conn, $sql);


              while ($linha = mysqli_fetch_assoc($dados)) { 
                $desTipoViolencia = $linha['desTipoViolencia'];
               ?> <option value="<?php echo $linha['idViolencia']; ?>"> <?php echo "$desTipoViolencia"; ?> </option> <?php
              }
                
            ?>
            </select>
          </div>
          <div class="form-group col-md-6 p-3">
            <label class="form-label" for="tipo_crime_d">Tipo de Crime</label>
            <small class="text-muted">Inserrir opção que melhor representa a sua denúncia</small>
            <select name="tipo_crime_d" class="form-control text-muted" required>
            <option value="" disabled selected >Escolher</option>
            <?php 
               
                $sql = "SELECT * FROM tipo_crime";
                $dados = mysqli_query($conn, $sql);


              while ($linha = mysqli_fetch_assoc($dados)) { 
                $desTipoCrime = $linha['desTipoCrime'];
               ?> <option value="<?php echo $linha['idCrime']; ?>"> <?php echo "$desTipoCrime"; ?> </option> <?php
              }
                
            ?>
            </select>
          </div>

        <div class="form-group col-md-6 p-3">
          <label class="form-label" for="detalhes">Detalhes</label>
          <textarea class="form-control text-muted char-count" maxlength="800" name="detalhes" rows="4" required></textarea>
          <p class="text-muted"><small><span name="detalhes">800</span></small> caracteres restantes.</p>
        </div>
        <div class="form-group col-md-6 p-3">
          <label for="midia" class="form-label">Inserir prova em foto ou vídeo (selecione todos os arquivos que deseja enviar)</label>
          <small>Se for inserir mais de um arquivo, enviar pasta ZIP com todos os arquivos desejados.</small>
          <input class="form-control text-muted" type="file" name="midia">
        </div>
        
        </div>
        <div class="row">
          <div class="col-6 text-center mt-3">
            <input type="hidden" name="data" value="<?php echo $hoje; ?>">
            <button type="submit" class="btn btn-dark mx-3 mt-3">Fazer Denúncia!</button>
          </div>
        </div>
      </form>
    </div>

    <script src="http://code.jquery.com/jquery-1.5.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      $('.char-count').keyup(function() {
          var maxLength = parseInt($(this).attr('maxlength')); 
          var length = $(this).val().length;
          var newLength = maxLength-length;
          var name = $(this).attr('name');
          $('span[name="'+name+'"]').text(newLength);
            });
        });
        
    </script>


      <footer id="rodape" class="container-fluid bg-dark text-light">
       
          <p>&copy; 2021 - Todos os Direitos Reservados :: Desenvolvido por Laura Rios</p>
        
      </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>

</html>