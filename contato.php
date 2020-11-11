<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Contato</title>
    
        <!-- Normalize CSS para resstar os defaults do browser  -->
        <link rel="stylesheet" href="css/normalize.css" />
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
    
        <!-- O meu vem por último pq estamos reescrevendo as regras dos anteriores -->
        <link href="/css/meu.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/contato.css">
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

            <div class="row article-contato">
                <div class="col-lg-8 offset-lg-0 col-md-8 offset-md-2 col col-sm-12 offset-sm-0">
                    <h1>Entre em contato</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis amet aliquam, animi, recusandae commodi quae repellat dignissimos veritatis molestiae temporibus deleniti. Excepturi perspiciatis deleniti, eos nam quae laboriosam inventore.</p>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu nome">
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Endereço de email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Estilo favorito</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Selecione uma opção</option>
                              <option>Axé</option>
                              <option>Forró</option>
                              <option>Rock</option>
                              <option>Mpb</option>
                              <option>Samba</option>
                            </select>
                          </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deixa sua mensagem</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                            <button type="submit" class="btn btn-success mx-auto d-block">Enviar</button>
                      </form>
                </div>

                <div class="col-lg-4 d-none d-lg-block d-xl-block">
                    <img src="images/no_img.jpg" alt="" class="img-fluid" width="100%" height="100%">
                </div>
            </div>

          
          
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
    