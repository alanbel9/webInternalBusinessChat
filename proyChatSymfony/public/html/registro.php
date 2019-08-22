<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/simplex/bootstrap.min.css" rel="stylesheet" integrity="sha384-1OYccka9EByiS23wvPFiYHBPRAgU91xYVFb8g8sen6vRiBI5Uko6+B87q8zPGUnA" crossorigin="anonymous">   <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <style type="text/css">
            body, #search-bg {
                background-image: url(../resources/img.jpg);
                background-repeat: no-repeat;
                background-size: 100%;
            }

            body {
                background-position: center top;
                padding: 70px 350px 120px 350px;
            }

            #search-container {
                position: relative;
            }

            #search-bg {
                /* Absolutely position it, but stretch it to all four corners, then put it just behind #search's z-index */
                position: absolute;
                top: 0px;
                right: 0px;
                bottom: 0px;
                left: 0px;
                z-index: 99;

                /* Pull the background 70px higher to the same place as #bg's */
                background-position: center -70px;

                -webkit-filter: blur(10px);
                filter: url('/media/blur.svg#blur');
                filter: blur(10px);
            }

            #search {
                /* Put this on top of the blurred layer */
                position: relative;
                z-index: 100;
                padding: 20px;
                background: rgb(34,34,34); /* for IE */
                background: rgba(34,34,34,0.75);
            }

            #log{
                position: relative;
                z-index: 101;
                padding: 20px;
                text-align: center;
            }
          
            @media (max-width: 600px ) {
                #bg { padding: 10px; }
                #search-bg { background-position: center -10px; }
            }

            #search h2, #search h5, #search h5 a { text-align: center; color: #fefefe; font-weight: normal; }
            #search h2 { margin-bottom: 50px }
            #search h5 { margin-top: 70px }
        </style>
    </head>
    <body>
        <div id="bg">
            <div id="search-container">
                <div id="search-bg"></div>
                <div id="search">
                    <div id=log>
                        <h2><i class="m-3 fa fa-users fa-5x" aria-hidden="true"> Chat;)</i></h2>
                        <form action="controlResgistro.php" method="post">
                            <div class="input-group">
                                <i class="input-group-text fa fa-user fa-lg"></i>
                                <input name="correo" type ="email" class='form-control' placeholder='Introduce el correo' required/>
                            </div>

                            <div class="input-group">
                                <i class="input-group-text fa fa-lock fa-lg" aria-hidden="true"></i> 
                                <input name="password" type ="password" class='form-control' placeholder='Introduce el password' required/>
                            </div>
                            <br>
                            <div class='row'>
                                <div class='col-md-12'>
                                    <button type="button submit" class="btn btn-outline-primary btn-block">REGISTRARME</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


</body>

</html>