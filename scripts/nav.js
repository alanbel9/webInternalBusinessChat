$(function () {
    $(".barraIzquierda").children("a").on("click", function (evt) {
        $(".barraIzquierda").children("a").next().slideUp();
        $(this).next().slideDown();
    })
    // recarga mediante AJAX del index.html al hacer clic en los grupos
    // 1 función para cada enlace ????
    $("#recarga").click(function (event) {
        $("#modificado").load('../html/pantallaChat.php')   // grupo java
    });
    $("#accederChat").click(function (event) {
        $("#modificado").load('../html/pantallaChat.php')   // grupo java
    });
})

