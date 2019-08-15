$(function () {
    $(".barraIzquierda").children("a").on("click", function (evt) {
        $(".barraIzquierda").children("a").next().slideUp();
        $(this).next().slideDown();

        $(".contenedorPantallas").fadeOut(500,function(){
            $(this).load("../plantillas/pantallaChat.php").slideDown(3000,'linear');
        })
    })
    // recarga mediante AJAX del index.html al hacer clic en los grupos
    // 1 función para cada enlace ????
    $(".infoGrupo").click(function (event) {
        $(".contenedorPantallas").fadeOut(500,function(){
            $(this).load('../plantillas/pantallaInfoGrupo.php').fadeIn(500);   // grupo java
        });
    });

    $(".botonBuscar").click(function (event) {
        $(".contenedorPantallas").fadeOut(500,function(){
            $(this).load('../plantillas/pantallaBuscar.php').fadeIn(500);   // grupo java
        });
    });
})

