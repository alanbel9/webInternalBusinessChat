<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Titulo de la página</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        
            <form class="form-inline ml-auto pr-5">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>


            <div class="nav-item  ">
                    <a class="nav-link text-success" href="#">
                            <i class="fa fa-cog" aria-hidden="true"></i> Configuración Perfil
                    </a>
            </div>

            <div class="nav-item ">
                    <a class="nav-link text-danger" href="#">
                        <i class="fa fa-sign-out " aria-hidden="true"></i>Logout
                    </a>
            </div>

        </div>

</nav>

<ul class="nav flex-column bg-white mb-0 col-md-2">

        <li class="nav-item">
            <div class=" text-dark bg-light text-center font-weight-bold" >GRUPOS</div>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> General
            </a>
            <a href="#" class="nav-link text-dark font-italic bg-light">
                    <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> Futbolín
            </a>
            <a href="#" class="nav-link text-dark font-italic bg-light">
                    <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> Ping pong
            </a>
            <a href="#" class="nav-link text-dark font-italic bg-light">
                    <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> Fumadores
            </a>
            <a href="#" class="nav-link text-dark font-italic bg-light">
                    <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> Futbolín
            </a>
        </li>


        <br>
        <li class="nav-item">
                <div class=" text-dark bg-light text-center font-weight-bold" >CHATS PRIVADOS</div>
        </li>
    
            <li class="nav-item">
                <a href="#" class="nav-link text-dark font-italic bg-light">
                    <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> Victor Fernández
                </a>
                <a href="#" class="nav-link text-dark font-italic bg-light">
                        <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> Lionel Messi
                </a>
                <a href="#" class="nav-link text-dark font-italic bg-light">
                        <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> Alberto Zapater
                </a>
                <a href="#" class="nav-link text-dark font-italic bg-light">
                        <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> Cristiano Ronaldo
                </a>
           
            </li>

      </ul>



</body>
</html>