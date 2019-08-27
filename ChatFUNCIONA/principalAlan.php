<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chat Interno</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/simplex/bootstrap.min.css" rel="stylesheet" integrity="sha384-1OYccka9EByiS23wvPFiYHBPRAgU91xYVFb8g8sen6vRiBI5Uko6+B87q8zPGUnA" crossorigin="anonymous">   <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

</head>
<body>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/rChat.js"></script>

        <br><br><br>

    <form action="enviarAlan.php" method="post">

   
            <div class='row'>
                <div class='offset-md-4 col-md-1 '>
                        <label for="userName">Usuario:</label>
                </div>    

                <div class='col-md-3'>
                        <input id="userName" name="usuario" type ="text" class='form-control' required/>
                </div>
                                
            </div>


            <br>


            <div class='row chat'>
                <div class='col-md-6 offset-md-2'>
                        <div id="chatOutput">

                        </div>
                </div>
            </div>

            <br>

            <div class='row'>
                <div class='col-md-4 offset-md-2'>
                    <textarea id="chatInput" name="textAreaMensaje" class="form-control" placeholder="Input Text here" required > </textarea>
                </div>
                <div class='col-md-2'>
                    <button id="chatSend" type="button submit" class="btn btn-outline-primary btn-block p-3">ENVIAR</button>
                </div>
            </div>
    </form>



   
</body>
</html>