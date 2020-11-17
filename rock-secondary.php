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
            <div class="row">
                <article class="col-lg-12 col-md-12 col-sm-12">
                    <h1 class="display-5">Bandas Nacionais</h1>
                    <p>a Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum facilisis ornare risus eget
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

                    <h4>Legião Urbana</h4>
                    <div class="row">

                        <section class="col-lg-6 col-md-6 col-sm-12 ">
                            <img src="images/legiaourbana.jpg" height="300" width="540" class="img-fluid" />
                        </section>
                        <section class="col-lg-6 col-md-6 col-sm-12 d-none d-lg-block">
                            <img src="images/legiao2.jpg" height="300" width="540" class="img-fluid" />
                        </section>
                        <p class="col-lg-12 col-md-6 col-sm-12 ">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Vestibulum facilisis ornare risus eget accumsan. Vestibulum porta, erat id lacinia
                            fermentum,
                            nulla nunc consequat ante, a feugiat sem vitae tellus. In non malesuada velit. Ut hendrerit,
                            facilisis elit, at pretium massa egestas in Vivamus mattis ante sed rhoncus bibendum.
                            Curabitur dictum sem neque,
                            ac dignissim turpis vulputate eu
                        </p>
                    </div>
                    <h4>Cpm 22</h4>

                    <div class="row">
                        <section class="col-lg-6 col-md-6 col-sm-12 ">
                            <img src="images/cpm22.jpg" height="300" width="540" class="img-fluid" />
                        </section>
                        <section class="col-lg-6 col-md-6 col-sm-12 d-none d-lg-block ">
                            <img src="images/cpm22-1.jpg" class="img-fluid" />
                        </section>
                        <p class="col-lg-12 col-md-6 col-sm-12">
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
                    <h4>Pense</h4>
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
                            sem
                            ex
                            vitae tellus. In non malesuada velit. Ut hendrerit facilisis elit, at pretium massa egestas
                            in.
                            Vivamus mattis ante sed rhoncus bibendum. Curabitur dictum sem neque, ac dignissim turpis
                            vulputate eu.
                        </p>
                    </div>
                </section>

                <aside class="col-lg-4 col-md-12 col-sm-12">
                    <h5>Lista de Bandas</h5>
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
                    <div class="col-sm-6 col-md-6 col-lg-6 offset-md-3 playlist">
                        <h1>Ouças as Playlists</h1>
                        <div class="row">
                            <div class="col-6 button-spotify">
                                <button class="spotify">Spotify</button>
                            </div>
                            <div class="col-6 button-youtube">
                                <button class="youtube">Youtube</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>



            <div class="row">
                <section class="col-lg-12 col-md-12 col-sm-12 btcenter">
                    <button type="button" class="btn btn-secondary"><a href="rock-primary.php">Voltar</a></button>
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