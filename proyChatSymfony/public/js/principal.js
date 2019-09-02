var chat = {
    //idGrupo: 0,
    idGrupoActivo : 0,  

    reemplazar: function(texto, buscar, nuevaCadena) {
        texto=texto.split(buscar).join(nuevaCadena);
        return texto;
    },

    menuCargarGrupo: function(idGrupo, texto){     // carga grupos suscritos al nav.
        var plantilla=$('#planMenuOpcionVertical').html();

        plantilla=chat.reemplazar(plantilla,'##IDGRUPO##', idGrupo);
        plantilla=chat.reemplazar(plantilla,'##TEXTO##', texto);
        $("#barraIzquierda").append(plantilla);

    },

    menuAddGrupo: function(idGrupo, texto){
        $('#menuOpcion' + idGrupo).addClass("disabled");
        chat.menuCargarGrupo(idGrupo, texto);

        /*eventosBarraLateral();*/
        $.ajax({
            url: '/grupos/insertarUsuario/' + idGrupo, 
            success: function (data) {
                console.log("Grupo agregado al usuario.");
            }
        });

    },

    menuDeleteGrupo: function(idGrupo) {
        $.ajax({
          url: "/grupos/borrarGrupo/" + idGrupo ,
          success: function (data) {
            location.reload();
          }
        }) 
    },

    menuPulsarGrupo: function(idGrupo){
        $('.emergente').hide(200);
        $('#menuSubgrupo' + idGrupo).show(200);
        chat.idGrupoActivo=idGrupo;
        chat.menuClickConversacion(idGrupo); //En cuarentena.
    },

    menuPulsaInformacion: function(idGrupo){
        $("#contenedorPantallas").fadeOut(200, function () {
          $.ajax({
            url: '/grupos/ajaxObtenerInformacion/' + idGrupo,
            success: function (data) {
              refrescando=false;
              $("#contenedorPantallas").html(data).fadeIn(200);
            }
          });
        });
    },
    menuPulsaOpciones: function(idGrupo){
        $("#contenedorPantallas").fadeOut(200, function () {
          $.ajax({
            url: '/grupos/ajaxOpciones/' + idGrupo,
            success: function (data) {
              refrescando=false;
              $("#contenedorPantallas").html(data).fadeIn(200);
            }
          });
        });
    },
    
    menuClickConversacion: function(idGrupo) {
        chat.refrescando=true;
        $("#contenedorPantallas").fadeOut(200, function () {
            $.ajax({
              url: '/grupos/ajaxObtenerConversacion/' + idGrupo,
              success: function (data) {
                chat.refrescando=false;
                $("#contenedorPantallas").html(data).fadeIn(500);
                $('#ns-idGrupo').val(idGrupo);
              }
            });
        });

    },


    chatEnviarMensaje: function(){

    },

    perfilBuscar: function(){
        var palabraBuscar = $.trim($("#idBusqueda").val());
        if (palabraBuscar != "") {
            $("#contenedorPantallas").fadeOut(200, function () {
                $.ajax({
                    url: '/user/ajaxBuscarUsuario/' + $("#idBusqueda").val(),
                    success: function (data) {
                        refrescando=false;
                        $("#contenedorPantallas").html(data).fadeIn(200);
                    }
                });
            });
        }        
    },

    perfilModificar: function(){
        $("#contenedorPantallas").fadeOut(200, function () {
            $.ajax({
                url: '/usuarios/edit',
                success: function (data) {
                    refrescando=false;
                    $("#contenedorPantallas").html(data).fadeIn(200);
                }
            });
        })
    },

    perfilModal: function(idUsuarioBusqueda){
        $("#divModal").html("Cargando");
        $.ajax({
            url:"/user/leerPerfilUsuario/" + idUsuarioBusqueda,
            success:function(data){
                $("#divModal").html(data);
            }
        });
    }

} 

$(document).ready(function(){
    $("#botonBuscar").on("click", function (event) {
        chat.perfilBuscar();
    });
    $("#modificarPerfil").on("click", function () {
        chat.perfilModificar();
    });
    $("#botonEsconderBarraIzq").on("click",function(){
        $("#barraIzquierda").slideToggle();
    });


});