<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Title -->
  <title>Arbigaus - Webdeveloper</title>
  <!-- CSS Import -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/style.css">

</head>
<body>
  <header>
    <div class="bg1" style="background: url(<?php echo BASE; ?>/assets/img/bg.jpg) no-repeat 50% 50%;">
      <div class="container logo">
        <a href="http://arbigaus.com"><img src="<?php echo BASE; ?>/assets/img/logo.png" alt="Logo"></a>
      </div>
      <div class="row container text-home">
        <div class="white-text col s6 offset-s6 title-home">
          <h4>O desing focado na beleza e usabilidade</h4>
          <div class="row">
            <div class="citacao">
              <p class="col s8 offset-s4">"Se o teu cliente precisa perguntar como funciona o sistema, o sistema não é funcional como deveria"</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="container infos z-depth-4">
    <div class="row">
      <div class="col s12">
        <div class="row">
          <div class="col s12">
            <ul class="tabs text-left">
              <li class="tab col s6"><a href="#front" class="active"><h5>Front-End</h5></a></li>
              <li class="tab col s6"><a href="#back" class="active"><h5>Back-End</h5></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col s12">
        <div class="row" id="front">
          <div class="card horizontal medium">
            <div class="card-stacked">
              <div class="card-content">
                <h6>"A porta da sua empresa diz muito sobre seu serviço"</h6>
                <p>Possuir um bom marketing para sua empresa é essencial para seu negócio. Com a rápida evolução da tecnologia e a maneira em que o mercado muda diariamente, ter um vitrine do seu negócio na internet é obrigatório em qualquer negócio. Indiferente de qual mercado que vocÊ atua, as pessoas sempre irão procurar na Internet a sua necessidade e ter seu produto ou serviço à mostra para o mundo utilizando-se da Internet, hoje em dia, é obrigatório para qualquer empresa. </p>
              </div>
            </div>
            <div class="card-image hide-on-small-only">
              <img src="<?php echo BASE; ?>/assets/img/front.jpg" alt="Front">
            </div>
          </div>
        </div>
        <div class="row" id="back">
          <div class="card horizontal medium">
            <div class="card-stacked">
              <div class="card-content">
                <h6>"Além de bonito, precisa ser funcional"</h6>
                <p>Fazer um site bonito e elegante para mostrar seu produto ou serviço apenas não basta, fazemos seu sistema totalmente funcional.</p>
                <p>Utilizando PHP, MySQL, JavaScript entre outras ferramentas atuais no mercado, faremos seus sitema totalmente funcional conforme sua necessidade e com garantia de segurança e qualidade.</p>
              </div>
            </div>
            <div class="card-image hide-on-small-only">
              <img src="<?php echo BASE; ?>/assets/img/back.jpg" alt="Front">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- Rodapé -->
  <footer class="contato white-text page-footer blue-grey darken-3">
    <div class="container">
      <div class="row">
        <h3>Contato</h3>
        <div class="col s12 m4">
          <ul>
            <li>Gerson Arbigaus</li>
            <li>Tel.: (41) 99244 0662</li>
            <li>E-mail: <a href="mailto:gerson87@gmail.com">gerson87@gmail.com</a></li>
            <li><a href="https://github.com/Arbigaus/arbigaus"><img src="<?php echo BASE; ?>/assets/icons/github.png" alt=""></a></li>
            <!-- <li><img src="/assets/img/profile.jpg" alt=""></li> -->
          </ul>
        </div>

        <form class="" id="home/send_email" method="post">
          <div class="col s8">
            <div class="row">
              <div class="result alert "></div>
              <div class="input-field col s12 m6">
                <input class="clear" type="text" name="name" placeholder="Nome">
              </div>
              <div class="input-field col s12 m6">
                <input class="clear" type="text" name="email" placeholder="E-mail">
              </div>
              <div class="input-field col s12">
                <input class="clear" type="text" name="subject" placeholder="Assunto">
              </div>
              <div class="input-field col s12">
                <textarea name="message" class="clear materialize-textarea" placeholder="Mensagem"></textarea>
              </div>
            </div>
            <div class="barra-progresso ">
              <div class="tipo-progresso "></div>
            </div>
            <button type="submit" name="button" class="btn waves-effect waves-light right"><i class="material-icons right">send</i>Enviar</button>

          </div>
        </form>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">Gerson Arbigaus - 2017</div>
    </div>
  </footer>

</body>
 <script src="<?php echo BASE; ?>/assets/js/jquery-3.2.1.min.js"></script>
 <script src="<?php echo BASE; ?>/core/ajax.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</html>
