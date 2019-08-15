$(function () {
    $(".barraIzquierda").children("a").on("click", function (evt) {
        $(".barraIzquierda").children("a").next().slideUp();
        $(this).next().slideDown();

        $(".contenedorPantallas").load("../plantillas/pantallaChat.php");
    })
    // recarga mediante AJAX del index.html al hacer clic en los grupos
    // 1 función para cada enlace ????
    $(".infoGrupo").click(function (event) {
        $(".contenedorPantallas").load('../plantillas/pantallaInfoGrupo.php');   // grupo java
    });


})

