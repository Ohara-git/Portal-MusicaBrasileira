<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Musica Brasileira</title>

    <!-- Normalize CSS para resstar os defaults do browser  -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- O meu vem por último pq estamos reescrevendo as regras dos anteriores -->
    <link href="/css/meu.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/base.css"/>
    <link rel="stylesheet" href="css/index.css"/>
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
      
              <div class="row topo-home">
                <div class="col-12">
                  <h1>Música Brasileira</h1>
                <div class="col-10 offset-1">
                  <img src="images/home-top.jpg" class="img-fluid musica-brasileira" alt="" width="100%" height=>
                  </div>  
                  <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
                </div>
              </div>
              

              <!-- secão com as 5 chamadas paras as páginas -->
              <section class="row">
                  <div class="col-lg-4  col-md-6">
                    <h2>Axé</h2>
                    <img src="images/home-axe.jpg" class="img-fluid" alt="">
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <h2>Rock</h2>
                    <img src="images/home-rock.jpg" class="img-fluid" alt="">
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
                  </div>
                  <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
                    <h2>Forró</h2>
                    <img src="images/home-forro.jpg" class="img-fluid" alt="">
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
                  </div>
              </section>
      
              <section class="row justify-content-between">
                <div class="col-lg-4 col-md-6">
                  <h2>Samba</h2>
                  <img src="images/home-samba.jpg" class="img-fluid" alt="">
                  <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
                </div>
                <div class="col-lg-4 col-md-6">
                  <h2>Mpb</h2>
                  <img src="images/home-mpb.jpg" class="img-fluid" alt="">
                  <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
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
