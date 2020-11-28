<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="#">
    <meta name="author" content="#">
    <link rel="icon">
    <title>Forró</title>

    <!-- Normalize CSS para resstar os defaults do browser  -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- O meu vem por último pq estamos reescrevendo as regras dos anteriores -->
    <link href="/css/meu.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/forro.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
</head>

<body>
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
            <div class="col-md-4 offset-md-1 col-lg-4 offset-lg-0">
              <h1>Principais artistas</h1>
              <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
              
            </div>
  
            <div class="col">
              <img src="images/forro-secondary-topo.jpg" class="img-fluid imgs-prima rounded musica-brasileira" alt="">
            </div>
          </div>
          
  
          <section class="row section-artistas">
              <div class="col-md-6 col-lg-6 col-sm-12">
                <h2>Luiz Gonzaga</h2>
                <img src="images/Luiz-Gonzaga.jpg" class="img-fluid img-secondary rounded mx-auto d-block" alt="" height="150px">
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
              </div>
              <div class="col-md-6 col-lg-6 col-sm-12">
                  <h2>Carmelia Alves</h2>
                <img src="images/Carmelia-Alves.jpg" class="img-fluid img-secondary rounded mx-auto d-block" alt="" height="150px">
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
              </div>
             
          </section>
  
          <section class="row section-artistas">
              <div class="col-md-6 col-lg-6 col-sm-12">
                <h2>Trio-Nordestino</h2>
                <img src="images/Trio-Nordestino.jpg" class="img-fluid img-secondary rounded mx-auto d-block" alt="" height="150px">
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
              </div>
              <div class="col-md-6 col-lg-6 col-sm-12">
                  <h2>Elba Ramalho</h2>
                <img src="images/Elba-Ramalho.jpg" class="img-fluid img-secondary rounded mx-auto d-block" alt="" height="150px">
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae modi ullam quaerat rerum voluptatem. Rem repellat quaerat nostrum debitis, excepturi, earum temporibus suscipit nemo minus dicta officiis commodi, libero itaque!</P>
              </div>
             
          </section>

            <!-- Playlist -->
            <div class="container">
                <section class="row botoes">
                    <div class="col-sm-6 col-md-6 col-lg-6 offset-md-3 playlist">
                        <h1>Ouças as Playlists</h1>
                        <div class="row">
                            <div class="col-6 button-spotify">
                                <button type="button" class="spotify btn btn-success">Spotify</button>
                            </div>
                            <div class="col-6 button-youtube">
                                <button type="button" class="youtube btn btn-success">Youtube</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
      
        <div class="row botao-voltar">
            <section class="col-12 col-md-12 col-sm-12 positionbutton">
                <button type="button" class="btn btn-success"><a href="forro-primary.php">Voltar</a></button>
            </section>
        </div>

        <?php
            include 'includes/footer.php';
         ?>
    
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body></html>
