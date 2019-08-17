<!-- Hector -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand mr-5" href="../html/index.php">
        <h1>
            <i class="fa fa-users" aria-hidden="true"></i> Chat;)
        </h1>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ml-md-3 my-2" id="navbarSupportedContent">
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Grupos de Chat;)
            </button>
            <div class="dropdown-menu menuGrupos" aria-labelledby="dropdownMenuButton">
                <!-- ----------------BBDD y PHP------------------------- -->
                <a class="dropdown-item" href="#">Grupo 1</a>
                <a class="dropdown-item" href="#">Grupo 2</a>
                <a class="dropdown-item" href="#">Grupo 3</a>
                <a class="dropdown-item" href="#">Grupo 4</a>
                <a class="dropdown-item" href="#">Grupo 5</a>
                <a class="dropdown-item" href="#">Grupo 6</a>
                <a class="dropdown-item" href="#">Grupo 7</a>
                <a class="dropdown-item" href="#">Grupo 8</a>
                <a class="dropdown-item" href="#">Grupo 9</a>
                <a class="dropdown-item" href="#">Grupo 10</a>
                <a class="dropdown-item" href="#">Grupo 11</a>
                <!-- --------------------------------------------------- -->
            </div>
        </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="form-inline my-2 my-sm-0 mr-auto">
            <input class="form-control mr-md-2" type="" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-dark my-2 my-md-0 botonBuscar" type="">
                <h6 class="mt-2"> <i class="fa fa-search" aria-hidden="true"></i> Buscar </h6>
            </button>
        </div>

        <a class="button btn btn-outline-success my-2 my-md-0 mr-md-2 modificarPerfil" href="#">
            <h6 class="mt-2"> <i class="fa fa-cog" aria-hidden="true"></i> Perfil </h6>
        </a>

        <a class="btn btn-outline-danger my-2 my-md-0" href="../html/login.php">
            <h6 class="mt-2"> <i class="fa fa-sign-out " aria-hidden="true"></i> Logout </h6>
        </a>
    </div>
</nav>

<script>
    $(function () {
        $(".menuGrupos").children().click(function (event) {
            $(this).addClass("disabled");
            $(".barraIzquierda").append('<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><h4><i class="fa fa-hashtag" aria-hidden="true"></i> ' + $(this).text() + '</h4></a><div class="nav flex-column nav-pills emergente" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="display: none;"><a id="v-pills-profile-tab" class="ml-5 mr-5 infoGrupo text-secondary" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Información</a><a id="v-pills-profile-tab" class="ml-5 mr-5 text-secondary" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Opciones</a></div>');
            eventosBarraLateral();
        });

        $(".modificarPerfil").off().on("click", function () {
            $(".contenedorPantallas").fadeOut(300, function () {
                $(this).load("../plantillas/pantallas/pantallaModificarPerfil.php").fadeIn(300);
            })
        });
    });
</script>