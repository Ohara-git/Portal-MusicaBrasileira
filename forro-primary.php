<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="images/favico.ico"> -->
    <title>Forró</title>

    <!-- Normalize CSS para resstar os defaults do browser  -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- O meu vem por último pq estamos reescrevendo as regras dos anteriores -->
    <link href="/css/meu.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/forro.css">
</head>

<body>
    <div class="container">
        <div class="container">

            <?php
                include 'includes/nav.php';
            ?>

            
          <div class="row">
            <header class="col-12 col-md-12 col-sm-12">
                <img src="images/header.jpg" width="100%" height="300" />
            </header>
        </div>
      
          
        <div class="row section-inicial">
            <div class="col-lg-6 col-md-6 col-sm-12">
               <img src="images/forró- slogan.jpg" class="img-fluid musica-brasileira" alt="">
            </div>  
          <div class="col-lg-6 col-md-6 col-sm-12">
            <h1>Forró</h1>
            <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
          </div>
        </div>
        

        <section class="row section-variedades">
            <div class="col-lg-4 col-md-6">
              <h2>Variedade</h2>
              <img src="images/emConstrucao.jpg" class="img-fluid" alt="">
              <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
            </div>
            <div class="col-lg-4 col-md-6">
                <h2>Variedade</h2>
              <img src="images/emConstrucao.jpg" class="img-fluid" alt="">
              <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
            </div>
            <div class="col-lg-4 col-md-12">
                <h2 class="variedade-3">Variedade</h2>
                <div class="row">
                    <img src="images/emConstrucao.jpg" class="img-fluid col-lg-12 col-md-6" alt="">
                    <P class="col-lg-12 col-md-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
                </div>
            </div>


        </section>

        <section class="row">
          <div class="offset-lg-2 co-lg-8 offset-md-2 col-md-8 col-sm-12">

            <img src="images/forró- slogan.jpg" class="img-fluid musica-brasileira forro-primary align-self-center" alt="">

            <div class="row botao-vejamais">
                <section class="col-12 col-md-12 col-sm-12 positionbutton">
                    <button><a href="forro-secondary.html">Veja mais</a></button>
                </section>
            </div>
          </div>
         
      </section>
      
            <div class="row footer-cor">
              <footer class="col-6">
                  <h3>Menu</h3>
                  <nav class="navbar">
                      <ul class="navbar-nav">
                          <li class="nav-item">
                              <a href="index.html">Home</a>
                          </li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Estilos</a>
                              <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item" href="axe-primary.html">Axé</a>
                                <a class="dropdown-item" href="forro-primary.html">Forró</a>
                                <a class="dropdown-item" href="rock-primary.html">Rock</a>
                                <a class="dropdown-item" href="mpb-primary.html">Mpb</a>
                                <a class="dropdown-item" href="samba-primary.html">Samba</a>
                              </div>
                          </li>
                          <li class="nav-item">
                              <a href="quem-somos.html">Quem somos</a>
                          </li>
                          <li class="nav-item">
                              <a href="normas.html">Normas de uso</a>
                          </li>
                          <li class="nav-item">
                              <a href="contato.html">Contato</a>
                          </li>
                      </ul>
                  </nav>
              </footer>
              <div class="col align-self-end">
                  
                      <small>&copy todos os direitos reservados</small>
      
              </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body></html>
