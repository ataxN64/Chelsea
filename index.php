<!DOCTYPE html>
<html lang="en-US" class="backgroundColor">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Sitio en construccion por favor espera n.n</title>
        <style>
            /*style del reloj*/
            * {
              box-sizing: border-box;
              margin: 0;
              padding: 0;
            }

            body {
              background-color: #ffd54f;
            }

            .container {
              color: #333;
              text-align: center;
            }

            h1 {
              font-weight: normal;
            }

            li {
              display: inline-block;
              font-size: 1.5em;
              list-style-type: none;
              padding: 1em;
              text-transform: uppercase;
            }

            li span {
              display: block;
              font-size: 4.5rem;
            }
            /*final del reloj*/
        </style>
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Lemon' rel='stylesheet' type='text/css'>
        
        <link rel="shortcut icon" href="images/favicon.jpg">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <link rel="stylesheet" type="text/css" href="css/YTPlayer.css" />
        <link rel="stylesheet" type="text/css" href="css/supersized.css" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" />

        
    </head>
    <body>

        <!-- CONTAINER -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="section clearfix">
                        <h1 class="logo animated fadeInDown">Sitio en construcción</h1>
                        
                        <div id="text_slider">
                            <div class="slide clearfix"><h2>Esto solamente durara unos dias!</h2></div>

                            <div class="slide clearfix"><h2>espera n.n!!!</h2></div>
                        </div>
                        
                    </div>

                    <!-- COUNTDOWN -->
                    <!--editar sale con imagen--->
                    <!---Tiempo a finalizar-->
                        <div class="col-md-12">
                                <div class="container">
                                  <h1 id="head">Esta página terminara en:</h1>
                                  <ul>
                                    <li><span id="days"></span>Dias</li>
                                    <li><span id="hours"></span>Horas</li>
                                    <li><span id="minutes"></span>Minutos</li>
                                    <li><span id="seconds"></span>Segundos</li>
                                  </ul>
                                </div>
                        </div>
                    <!-- END COUNTDOWN -->



                    <div class="section clearfix animated fadeIn">
                        <p>¿Quieres ser notificado cuando el sitio web esté listo?</p>
                        <form id="form_newsletter">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="input-group input-group-lg">
                                        <input type="email" name="email" class="form-control" placeholder="Introduce tu correo electrónico" >
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit"><i class="fa fa-check"></i> ¡Notificarme!</button>
                                        </span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div id="form_newsletter_result"></div>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="section clearfix animated fadeIn" id="contact">
                        <a href="#"><i class="fa fa-envelope-o"></i> ataxN64@gmail.com</a>
                        <a href="#"><i class="fa fa-phone"></i> (+502) 44168508 </a>
                    </div>


                    <div class="section clearfix">
                        <a href="https://www.facebook.com/ataxN64" class="btn btn-transparent btn-facebook"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="https://twitter.com/ataxN64?lang=es" class="btn btn-transparent btn-twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="https://www.pinterest.es/ataxn64/" class="btn btn-transparent btn-pinterest"><i class="fa fa-pinterest fa-fw"></i></a>
                        <a href="https://www.instagram.com/ataxN64/" class="btn btn-transparent btn-instagram"><i class="fa fa-instagram fa-fw"></i></a>
                    </div>

                    <div class="section clearfix">
                        <a href="#" class="open_aboutus btn btn-transparent animated fadeInUp">sobre mi</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- END CONTAINER -->

        <!-- FOOTER -->
        <div id="footer">
                <p>Página Realizada por Daniel Hernández</p>
        </div>
        <!-- END FOOTER -->


        <!-- ABOUT US -->
        <div id="about_us">

                <h1>Sobre Daniel Hernandez </h1>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <p>
                                - un chico comun
                            </p>
                            <p>
                                - soy un chico extraño
                                
                            </p>
                            <p>
                                - tiene 18 años
                            </p>
                            <p>
                                creo que no hay mas.....
                            </p>
                            <p>
                                <img src="images/log.gif">
                            </p>
                            
                        </div>
                    </div>
                </div>

                <a href="#" class="close_aboutus btn btn-default"><i class="fa fa-times-circle"></i> cerrar</a>

        </div>
        <!-- END ABOUT US -->
        
        <!-- JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.plugin.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/supersized.min.js"></script>
        <script src="js/jquery.cycle.min.js"></script>
        <script src="js/jquery.mb.YTPlayer.js"></script>
        <script src="js/scripts.js"></script>
        <script>
            /*Function reloj*/
            const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let countDown = new Date('apr 29, 2019 00:00:00').getTime(),
    x = setInterval(function() {

      let now = new Date().getTime(),
          distance = countDown - now;

      document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
      
      //do something later when date is reached
      //if (distance < 0) {
      //  clearInterval(x);
      //  'IT'S MY BIRTHDAY!;
      //}

    }, second)

    /*Fin function reloj*/
        </script>
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        
    </body>
</html>