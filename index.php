<!DOCTYPE html>
<?
$agent = strtolower($_SERVER['HTTP_USER_AGENT']);
$mobileAgents = ['ipod','ipad','iphone','android','ios'];
$isMobile = false;
foreach ($mobileAgents as $mobileAgent) {
    if (strstr($agent,$mobileAgent) != false) {
        $isMobile = true;
        break;
    }
}
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Psicóloga Camila Moraes Chagas | Psicoterapia Psicanalítica | Santa Maria - RS</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <!--<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">In&iacute;cio&nbsp;<i class="fa fa-home"></i></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <!--<li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#sobre">Sobre</a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#psicanalise">Psican&aacute;lise</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contato">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="http://lattes.cnpq.br/7813665053970141">Curr&iacute;culo</a>
                </li>
                <li class="nav-item">
                    <a target="_blank" class="nav-link" href="https://www.instagram.com/psicologacamilamchagas/"><i class="fab fa-instagram"></i><small class="d-lg-none">&nbsp;/&nbsp;psicologacamilamchagas</small></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="masthead ">
    <div class="container d-flex h-100 align-items-tablcenter">
        <div class="mx-auto pt-md-5 text-center">
            <h1 id="h1-nome" class="text-white-50 mx-auto pb-md-4 pb-1">Camila Moraes<br class="d-md-none"/> Chagas</h1>
            <!--<h2 class="text-white-50 mx-auto pb-2 mt-3">Psicóloga - Psicoterapeuta</h2>-->
            <h2 class="text-white-50 font-weight-light pt-0 pb-1 mx-auto mb-md-3 mt-0">Psicóloga Clínica</h2>
            <h2 class="text-white-50 font-weight-light mx-auto mt-1">CRP 07/28346</h2>
        </div>
    </div>
</header>

<!-- About Section -->
<section id="sobre" class="d-none about-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-white ">Psicoterapia psicanalítica</h2>
                <p class="text-white my-3 text-left">
                    A psicoterapia psicanalítica auxilia na compreensão de sua experiência de vida e no reconhecimento de seus potenciais e de suas dificuldades.
                    O autoconhecimento promove a chance de transformação e possibilita ao sujeito assumir uma posição diferente diante de suas demandas.
                </p>
                <p class="text-white-50 my-3 text-left">
                    O atendimento realizado é de referência psicanalítica, a escuta visa compreender o indivíduo em sua singularidade.
                    A Psicoterapia auxilia a pessoa a entender e lidar com suas dificuldades e sofrimentos, criando maior intimidade consigo.
                </p>
                <p class="text-white-50 my-3 text-left">
                    O trabalho inicia com uma entrevista pessoal, na qual acertam-se as regras que farão parte dos atendimentos, como: frequência e horários das sessões, honorários e o que mais for necessário.
                </p>
                <p class="text-white-50 my-3 text-left">
                    Todo o trabalho ocorre de maneira sigilosa, conforme o Artigo 9&ordm; do <a target=_blank href="http://www.crprs.org.br/upload/files_publications/038e9b360f0e5a3292be52004ad935cd.pdf">Código de Ética do Psicólogo</a>.
                </p>

            </div>
        </div>

    </div>
</section>

<!-- Projects Section -->
<section id="psicanalise" class="projects-section bg-light">
    <div class="container px-0 px-md-3">

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5 d-flex flex-md-row flex-column">
            <!--<div class="order-md-1 order-2">-->
            <div class="order-md-2 order-1 col-xl-8 col-lg-7">
                <img class="img-fluid mb-3 mb-lg-0" style="width: 100%;filter:grayscale(80%);" src="img/room.jpg" alt="">
                <small style="font-size: 0.65em;float: right">Imagem retirada de <a target="_blank" href="https://unsplash.com/photos/it-_C9yfRIM">Unsplash</a></small>
            </div>

            <div class="order-md-1 order-2 col-xl-4 col-lg-5">
                <div class="featured-text text-right">
                    <!--<h4>Shoreline</h4>-->
                    <p class="text-black-50 py-4 px-1 px-md-0 mb-0 text-center text-md-left text-border-right">"O sofrimento subjetivo é o sinal de um sujeito em conflito. Se não há fumaça sem fogo, o sofrimento é a fumaça e o fogo é o que arde no inconsciente. A psicanálise permite transformar o mal-estar dos sintomas em uma fala que expressa esses conflitos do sujeito, e assim, aquilo que era doloroso pode encontrar outros destinos."</p>
                </div>
                <footer class="blockquote-footer py-3 text-right">Antônio Quinet</footer>
            </div>

        </div>

        <div class="row align-items-center no-gutters mb-4 mb-lg-5 d-flex flex-md-row flex-column">
            <!--<div class="order-md-1 order-2">-->
            <div class="order-md-1 order-1 col-xl-8 col-lg-7">
                <img class="img-fluid mb-3 mb-lg-0" style="width: 100%;filter:grayscale(80%);" src="img/couch.jpg" alt="">
                <small style="font-size: 0.65em;float: right">Imagem retirada de <a target="_blank" href="https://www.pexels.com/">Pexels</a></small>
            </div>

            <div class="order-md-2 order-2 col-xl-4 col-lg-5">
                <div class="featured-text text-right">
                    <!--<h4>Shoreline</h4>-->
                    <p class="text-black-50 py-4 px-1 px-md-0 mb-0 text-center text-md-right text-border-left">"Não há solução química para sofrimento psíquico. Medicamentos podem ajudar, mas não podem resolver o que está mal-resolvido. Seja qual for o sofrimento psíquico, terá de passar pela palavra e ser dito, terá de ser libertado das 'correntes' que os prendem sob a forma de pensamento recalcado nos 'labirintos obscuros da mente', e libertado no dizer. Escolher não dizer e calar-se é prender-se a dor psíquica, é escolher o pior. 'Ou dire ou pire' dizia Lacan"</p>
                </div>
                <footer class="blockquote-footer py-3 text-md-left text-right">Jorge Sesarino</footer>
            </div>

        </div>



    </div>
</section>


<!-- Contact Section -->
<section id="contato" class="contact-section bg-black">
    <!-- CONTAINER FORMULARIO -->
    <?php $paddingClass = "px-1 px-md-5";?>
    <?php $paddingClass = "";?>
    <div class="container">
        <h2 class="d-flex justify-content-center text-white mb-4">Contato</h2>
        <div class="card mb-3">
            <div class="card-body">
                <div class="row <?=$paddingClass?>">
                    <div class="col">
                        <label for="contato-nome">Nome</label>
                        <input placeholder="Nome e Sobrenome" type="text" class="form-control" name="contato-nome" id="contato-nome">
                    </div>
                </div>
                <div class="row <?=$paddingClass?>">
                    <div class="col-12 col-md">
                        <label for="contato-mail">E-mail</label>
                        <input placeholder="Endereço de E-mail" type="text" class="form-control" name="contato-mail" id="contato-mail">
                    </div>
                    <div class="col-12 col-md">
                        <label for="contato-fone">Telefone</label>
                        <input placeholder="(55) 999-999-999" type="text" class="form-control input-fone" name="contato-fone" id="contato-fone">
                    </div>
                </div>
                <div class="row <?=$paddingClass?>">
                    <div class="col">
                        <label for="contato-msg">Mensagem</label>
                        <textarea class="form-control" name="contato-msg" id="contato-msg" cols="30" rows="5"></textarea>
                    </div>
                </div>
                <div class="row pb-0 mb-0 <?=$paddingClass?>">
                    <div class="col">
                        <button onclick="enviaContato()" class="pb-4 pt-2 mt-3 mb-0 form-control btn btn-block btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Endereço</h4>
                        <hr class="my-4">
                        <div class="small text-black-50"><a target="_blank" href="https://goo.gl/maps/kDjDLB5yvP52">Rua Venâncio Aires, 2035 (CACISM), Sala 405.</a></div>
                        <div class="small text-black-50"><a target="_blank" href="https://goo.gl/maps/kDjDLB5yvP52">Santa Maria - RS</a></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">E-mail</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">
                            <a href="#contato">psi_camila@hotmail.com</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fab fa-whatsapp text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Telefone</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">
                            <? if ($isMobile) { echo "<a href=\"http://api.whatsapp.com/send?1=pt_BR&phone=5555991070395\">"; } ?>
                            (55) 991-070-395
                            <? if ($isMobile) {echo '</a>';} ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="social d-flex justify-content-center">
            <a href="https://www.instagram.com/psicologacamilamchagas/" class="mx-2"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/psicologacamilamchagas/" class="mx-2"><i class="fab fa-facebook-f"></i></a>
        </div>

    </div>
</section>

<!-- Footer -->
<footer class="bg-black small text-center text-white-50">
    <div class="container">
        Copyleft &copy; Desenvolvido por Bruno Rezende Laranjeira - 2018
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/jquery-mask/jquery.mask.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/grayscale.min.js"></script>
<script src="js/index.js"></script>

</body>

</html>

