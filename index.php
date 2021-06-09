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
    <form class="p-3 container mt-4">

       <h3 class="p-5">Fazer Denúncia</h3>

        <div class="form-row">
        <div class="form-group col-md-6 p-3">
          <label class="form-label" for="inputAddress">Endereço</label>
          <input type="text" class="form-control text-muted" id="inputAddress" placeholder="Rua X, nº 0">
        </div>
        </div>

        <div class="form-row">
        <div class="form-group col-md-6 p-3">
          <label class="form-label" for="inputCidade">Cidade do DF</label>
          <select id="inputCidade" class="form-control text-muted">
            <option selected>Escolher...</option>
            <option>...</option>
          </select>
        </div>
        <div class="form-group col-md-6 p-3">
          <label class="form-label" for="inputCEP">CEP</label>
           <input type="text" class="form-control text-muted" id="inputCEP" placeholder="00000-000">
        </div>
        <div class="form-group col-md-6 p-3">
          <label class="form-label" for="inputNomeLocal">Nome do local ou Estabelecimento</label>
          <input type="text" class="form-control text-muted" id="inputNomeLocal" placeholder="Restaurante, loja ...">
        </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6 p-3">
            <label class="form-label" for="inputAgressor">Relação com o Agressor</label>
            <select id="inputAgressor" class="form-control text-muted">
              <option selected>Escolher...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-6 p-3">
            <label class="form-label" for="inputTipoDenuncia">Tipo de Denúncia</label>
            <select id="inputTipoDenuncia" class="form-control text-muted">
              <option selected>Escolher...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-6 p-3">
            <label class="form-label" for="inputTipoViolencia">Tipo de Violência</label>
            <select id="inputTipoViolencia" class="form-control text-muted">
              <option selected>Escolher...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-6 p-3">
            <label class="form-label" for="inputTipoCrime">Tipo de Crime</label>
            <select id="inputTipoCrime" class="form-control text-muted">
              <option selected>Escolher...</option>
              <option>...</option>
            </select>
          </div>

        <div class="form-group col-md-6 p-3">
          <label class="form-label" for="inputDetalhes">Detalhes</label>
          <textarea class="form-control text-muted" id="inputDetalhes" rows="4"></textarea>
        </div>
        <div class="form-group col-md-6 p-3">
          <label for="inputFotoVideo" class="form-label">Inserir prova em foto ou vídeo (selecione todos os arquivos que deseja enviar)</label>
          <input class="form-control text-muted" type="file" id="inputFotoVideo" multiple>
        </div>
        
        </div>
        <div class="row">
          <div class="col-6 text-center mt-3">
            <button type="submit" class="btn btn-dark mx-3 mt-3">Fazer Denúncia!</button>
          </div>
        </div>
      </form>
    </div>


      <footer id="rodape" class="container-fluid bg-dark text-light">
       
          <p>&copy; 2021 - Todos os Direitos Reservados :: Desenvolvido por Laura Rios</p>
        
      </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>

</html>