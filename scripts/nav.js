var grupos=['Clase PHP', 'Café','Futbolín', 'Ping-pong', 'Fumar','PHP', 'Java'];

$(function () {
    grupos.forEach(function(item, index){
        $(".barraIzquierda").append('<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><h4><i class="fa fa-hashtag" aria-hidden="true"></i>' + item + '</h4></a><div class="nav flex-column nav-pills emergente" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="display: none;"><a id="v-pills-profile-tab" class="ml-5 mr-5 infoGrupo" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Información</a><a id="v-pills-profile-tab" class="ml-5 mr-5" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Opciones</a></div>');
    })
    eventosBarraLateral();

    $(".botonBuscar").click(function (event) {
        $(".contenedorPantallas").fadeOut(300, function () {
            $(this).load('../plantillas/pantallaBuscar.php').fadeIn(300);  
        });
    });
    $(".menuGrupos").children().click(function (event) {
        $(this).addClass("disabled");
        $(".barraIzquierda").append('<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><h4><i class="fa fa-hashtag" aria-hidden="true"></i>' + $(this).text() + '</h4></a><div class="nav flex-column nav-pills emergente" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="display: none;"><a id="v-pills-profile-tab" class="ml-5 mr-5 infoGrupo" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Información</a><a id="v-pills-profile-tab" class="ml-5 mr-5" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Opciones</a></div>');
        
        eventosBarraLateral();
    });
})

function eventosBarraLateral(){
    $(".barraIzquierda").children("a").off().on("click", function (evt) {
        $(".barraIzquierda").children("a").next().slideUp();
        $(this).next().slideDown();

        $(".contenedorPantallas").fadeOut(300, function () {
            $(this).load("../plantillas/pantallaChat.php").fadeIn(300); 
        })
    })

    $(".infoGrupo").off().on("click",function (event) {
        $(".contenedorPantallas").fadeOut(300, function () {
            $(this).load('../plantillas/pantallaInfoGrupo.php').fadeIn(300); 
        });
    });
}

