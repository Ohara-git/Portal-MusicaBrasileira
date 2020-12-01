<!DOCTYPE php>
<php lang="pt-BR">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="icon" href="images/favico.ico">
        <title>Artistas do Rock</title>

        <!-- Normalize CSS para resstar os defaults do browser  -->
        <link rel="stylesheet" href="css/normalize.css" />
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />

        <!-- O meu vem por último pq estamos reescrevendo as regras dos anteriores -->
        <link href="css/rock.css" rel="stylesheet" type="text/css" />
        <link href="css/base.css" rel="stylesheet" type="text/css" />

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <?php
            include 'includes/nav.php';
            ?>


            <div class="row">
                <header class="col-lg-12 col-md-12 col-sm-12">
                    <img src="images/header.jpg" width="100%" height="300" />
                </header>
            </div>
            <div>
                <article class="col-lg-12 col-md-12 col-sm-12">
                    <h1 class="titulo">Bandas Nacionais</h1>
                    <p class="text">a Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum facilisis
                        ornare risus eget
                        accumsan. Vestibulum porta, erat id lacinia fermentum, nulla nunc consequat ante, a feugiat sem
                        ex
                        vitae tellus. In non malesuada velit. Ut hendrerit facilisis elit, at pretium massa egestas in.
                        Vivamus mattis ante sed rhoncus bibendum. Curabitur dictum sem neque, ac dignissim turpis
                        vulputate
                        eu. </p>
                </article>
            </div>

            <div class="row">
                <section class="col-lg-8 col-md-12 col-sm-12">

                    <h2 class="titulo">Legião Urbana</h2>
                    <div class="row">

                        <section class="col-lg-6 col-md-6 col-sm-12 ">
                            <img src="images/legiaourbana.jpg" height="300" width="540" class="img-fluid" />
                        </section>
                        <section class="col-lg-6 col-md-6 col-sm-12 d-none d-lg-block">
                            <img src="images/legiao2.jpg" height="300" width="540" class="img-fluid" />
                        </section>
                        <p class=" text col-lg-12 col-md-6 col-sm-12 ">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Vestibulum facilisis ornare risus eget accumsan. Vestibulum porta, erat id lacinia
                            fermentum,
                            nulla nunc consequat ante, a feugiat sem vitae tellus. In non malesuada velit. Ut hendrerit,
                            facilisis elit, at pretium massa egestas in Vivamus mattis ante sed rhoncus bibendum.
                            Curabitur dictum sem neque, ac dignissim turpis vulputate eu
                        </p>
                    </div>
                    <h2 class="titulo">Cpm 22</h2>

                    <div class="row">
                        <section class="col-lg-6 col-md-6 col-sm-12 ">
                            <img src="images/cpm22.jpg" height="300" width="540" class="img-fluid" />
                        </section>
                        <section class="col-lg-6 col-md-6 col-sm-12 d-none d-lg-block ">
                            <img src="images/cpm22-1.jpg" class="img-fluid" />
                        </section>
                        <p class=" text col-lg-12 col-md-6 col-sm-12">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Vestibulum facilisis ornare risus eget
                            accumsan. Vestibulum porta, erat id lacinia fermentum, nulla nunc consequat ante, a feugiat
                            sem
                            ex
                            vitae tellus. In non malesuada velit. Ut hendrerit facilisis elit, at pretium massa egestas
                            in.
                            Vivamus mattis ante sed rhoncus bibendum. Curabitur dictum sem neque, ac dignissim turpis
                            vulputate eu.
                        </p>
                    </div>
                    <h2 class="titulo">Pense</h2>
                    <div class="row">
                        <section class="col-lg-6 col-md-6 col-sm-12 ">
                            <img src="images/pense.jpg" class="img-fluid" />
                        </section>
                        <section class="col-lg-6 col-md-6 col-sm-12 d-none d-lg-block">
                            <img src="images/pense2.jpg" class="img-fluid" />
                        </section>
                        <p class="col-lg-12 col-md-6 col-sm-12 justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Vestibulum facilisis ornare risus eget
                            accumsan. Vestibulum porta, erat id lacinia fermentum, nulla nunc consequat ante, a feugiat
                            sem vitae tellus. In non malesuada velit. Ut hendrerit facilisis elit, at pretium massa
                            egestas
                            in.
                            Vivamus mattis ante sed rhoncus bibendum. Curabitur dictum sem neque, ac dignissim turpis
                            vulputate eu.
                        </p>
                    </div>
                </section>

                <aside class="col-lg-4 col-md-12 col-sm-12">
                    <h2 class="titulo">Lista de Bandas</h2>
                    <p> In non malesuada velit. Ut hendrerit facilisis elit, at pretium massa egestas in.
                        Vivamus mattis ante sed rhoncus bibendum. Curabitur dictum sem neque, ac dignissim turpis
                        vulputate eu
                    </p>
                    <table class="table  table-striped table-hover table-bordered table-sm table-responsive-sm">
                        <tr>
                            <th scope="col">Bandas</th>
                            <th scope="col">Nacionality</th>
                            <th scope="col">Estilo</th>
                        </tr>
                        <tr>
                            <td>Capital</td>
                            <td>Brasilia</td>
                            <td>1980</td>

                        </tr>
                        <tr>
                            <td>Banda Pense</td>
                            <td>Espirito Santos</td>
                            <td>2010</td>

                        </tr>
                        <tr>
                            <td>Capital</td>
                            <td>Brasilia</td>
                            <td>1980</td>

                        </tr>
                        <tr>
                            <td>Banda Pense</td>
                            <td>Espirito Santos</td>
                            <td>2010</td>

                        </tr>
                        <tr>
                            <td>Capital</td>
                            <td>Brasilia</td>
                            <td>1980</td>

                        </tr>
                        <tr>
                            <td>Banda Pense</td>
                            <td>Espirito Santos</td>
                            <td>2010</td>

                        </tr>
                        <tr>
                            <td>Capital</td>
                            <td>Brasilia</td>
                            <td>1980</td>

                        </tr>
                        <tr>
                            <td>Banda Pense</td>
                            <td>Espirito Santos</td>
                            <td>2010</td>

                        </tr>
                        <tr>
                            <td>Capital</td>
                            <td>Brasilia</td>
                            <td>1980</td>

                        </tr>
                        <tr>
                            <td>Banda Pense</td>
                            <td>Espirito Santos</td>
                            <td>2010</td>

                        </tr>
                        <tr>
                            <td>Capital</td>
                            <td>Brasilia</td>
                            <td>1980</td>

                        </tr>
                        <tr>
                            <td>Banda Pense</td>
                            <td>Espirito Santos</td>
                            <td>2010</td>

                        </tr>
                        <tr>
                            <td>Capital</td>
                            <td>Brasilia</td>
                            <td>1980</td>

                        </tr>
                        <tr>
                            <td>Banda Pense</td>
                            <td>Espirito Santos</td>
                            <td>2010</td>

                        </tr>
                        <tr>
                            <td>Capital</td>
                            <td>Brasilia</td>
                            <td>1980</td>

                        </tr>
                        <tr>
                            <td>Banda Pense</td>
                            <td>Espirito Santos</td>
                            <td>2010</td>

                        </tr>
                    </table>
                </aside>
            </div>

            <div class="container">
                <section class="row botoes">
                    <div class="col-sm-12 col-md-6 col-lg-6 offset-md-3">
                        <h2 class="titulo">Ouças as Playlists</h2>
                        <div class="row">
                            <div class="col-6 button-spotify">
                                <a href="https://open.spotify.com/album/2TxyFqHTYsJJOEJx8kqZiq" target="_blank"><img src="images/logospotify.png" class="img-fluid"  ></a>
                            </div>
                            <div class="col-6 button-youtube">
                                <a href="https://www.youtube.com/watch?v=2hr7Uqu6G80&list=PLJ8E1oONCGCSu4WtLe_5bdd4QdVQ3eDWL" target="_blank" ><img src="images/logoyoutube.png" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>



            <div class="row botao-vejamais">
                <section class="col-12 col-md-12 col-sm-12 positionbutton">
                    <button type="button" class="btn btn-success"><a href="rock-primary.php">Voltar</a></button>
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

    </body>

</php>