<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto Chat</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <!-- <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/simplex/bootstrap.min.css" rel="stylesheet" integrity="sha384-1OYccka9EByiS23wvPFiYHBPRAgU91xYVFb8g8sen6vRiBI5Uko6+B87q8zPGUnA" crossorigin="anonymous">    -->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/sandstone/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-G3Fme2BM4boCE9tHx9zHvcxaQoAkksPQa/8oyn1Dzqv7gdcXChereUsXGx6LtbqA" crossorigin="anonymous">


    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
</head>

<body>
    <div class="p-3 mb-2 bg-light text-grey text-center">
        <i class="fa fa-space-shuttle fa-lg" aria-hidden="true"></i>
        <p class="text-monospace">.WEB INTERNAL BUSINESS CHAT.</p>
    </div>

    <div class="container mx-auto w-50 border mt-5">
        <div class='jumbotron text-center pt-5'>
            <div id="bg">
                <div id="search-container">
                    <div id="search-bg"></div>
                    <div id="search">
                        <div id=log>
                            <div class="p-3 mb-2 bg-secondary text-center">
                                <h1><i class="fa fa-users" aria-hidden="true"></i> Chat;)</h1>
                            </div>
                            <br>
                            <div class="input-group">
                                <i class="input-group-text fa fa-user fa-lg"></i>
                                <input type="correo" class='form-control' placeholder='Introduce el correo' />
                            </div>

                            <div class="input-group">
                                <i class="input-group-text fa fa-lock fa-lg" aria-hidden="true"></i>
                                <input type="password" class='form-control' placeholder='Introduce el password' />
                            </div>
                            <br>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <button type="button" class="btn btn-outline-primary btn-block">ENTRAR</button>
                                </div>
                                <div class='col-md-6'>
                                    <button type="button" class="btn btn-outline-danger btn-block">RECUPERAR
                                        CONTRSAEÑA</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>