var chat = {
    idGrupoActivo: 0,

    idUltimoMensaje: 0,

    chatSemaforo: 0,

    segundosRefresco: 10,

    reemplazar: function(texto, buscar, nuevaCadena) {
        texto = texto.split(buscar).join(nuevaCadena);
        return texto;
    },

    menuCargarGrupo: function(idGrupo, texto) {
        var plantilla = $('#planMenuOpcionVertical').html();

        plantilla = chat.reemplazar(plantilla, '##IDGRUPO##', idGrupo);
        plantilla = chat.reemplazar(plantilla, '##TEXTO##', texto);
        $("#barraIzquierda").append(plantilla);
    },

    menuAddGrupo: function(idGrupo, texto) {
        $('#menuOpcion' + idGrupo).addClass("disabled");
        $.ajax({
            url: '/grupos/insertarUsuario/' + idGrupo,
            success: function(data) {
                console.log("Grupo agregado al usuario.");
                chat.menuCargarGrupo(idGrupo, texto);
            }
        });
    },

    menuDeleteGrupo: function() {
        $.ajax({
            url: "/grupos/borrarGrupo/",
            success: function(data) {
                location.reload();
            }
        })
    },

    menuPulsarGrupo: function(e, idGrupo) {

        //$(e).next().removeClass("emergente");
        $(".emergente:not('#menuSubgrupo" + idGrupo + "')").hide(300);
        //$(e).next().addClass("emergente");
        $('#menuSubgrupo' + idGrupo).show(300);
        chat.idGrupoActivo = idGrupo;
        chat.menuClickConversacion(idGrupo);
    },

    menuPulsaInformacion: function() {
        $("#contenedorPantallas").fadeOut(200, function() {
            $.ajax({
                url: '/grupos/ajaxObtenerInformacion/',
                success: function(data) {
                    $("#contenedorPantallas").html(data).fadeIn(200);
                }
            });
        });
    },
    menuPulsaOpciones: function() {
        $("#contenedorPantallas").fadeOut(200, function() {
            $.ajax({
                url: '/grupos/ajaxOpciones/',
                success: function(data) {
                    $("#contenedorPantallas").html(data).fadeIn(200);
                    $("#segundos").html(chat.segundosRefresco);
                    $("#refrescoSlider").val(chat.segundosRefresco)
                        .on("input change", function(e) {
                            chat.segundosRefresco = $(this).val();
                            $("#segundos").html(chat.segundosRefresco);
                        });
                }
            });
        });
    },

    menuClickConversacion: function(idGrupo) {
        $("#contenedorPantallas").fadeOut(200, function() {
            $.ajax({
                url: '/grupos/ajaxObtenerConversacion/' + idGrupo,
                success: function(data) {
                    $("#contenedorPantallas").html(data).fadeIn(500);
                    $('#ns-idGrupo').val(idGrupo);
                    chat.chatCargarMensajes();
                },
                beforeSend: function() {
                    $("#barraIzquierda .nombreGrupo").attr("style", "pointer-events:none");
                },
                complete: function() {
                    $("#barraIzquierda .nombreGrupo").attr("style", "pointer-events:auto");
                }
            });
        });
    },

    chatCargarMensajes: function() {
        if (chat.chatSemaforo == 0) {
            chat.chatSemaforo = 1;
            $.ajax({
                type: "POST",
                async: false,
                url: '/grupos/ajaxRefrescarPantallaConversacion/' + chat.idUltimoMensaje,
                success: function(data) {
                    $.each(data['texto'], function(key, value) {
                        var d = new Date(value['fecha']);
                        var fecha = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds() + " (" + d.getDate() + "-" + (d.getMonth() + 1) + "-" + d.getFullYear() + ")";
                        var plantilla = $('#planMensaje').html();
                        plantilla = chat.reemplazar(plantilla, '##IDUS##', value['idUs']);
                        plantilla = chat.reemplazar(plantilla, '##NOMBRE##', value['nombre']);
                        plantilla = chat.reemplazar(plantilla, '##FECHA##', fecha);
                        value['mensaje'] = chat.reemplazar(value['mensaje'], "\n", "<br/>");
                        plantilla = chat.reemplazar(plantilla, '##MENSAJE##', value['mensaje']);
                        $("#mensajesGrupo" + data['idGrupoRecibido']).prepend(plantilla);
                        chat.idUltimoMensaje = value['id'];
                    })
                },
                complete: function() {
                    chat.chatSemaforo = 0;
                }
            });
        }
    },

    chatEnviarMensaje: function() {
        var mensaje = $.trim($("#mensajeEnviar").val());
        if (mensaje != "") {
            $("#mensajeEnviar").val("");
            $.ajax({
                url: '/principal/escribirMensaje/' + encodeURI(mensaje),
                success: function(data) {
                    console.log("Mensaje guardado en la base de datos");
                }
            });
        }
    },

    perfilBuscar: function() {
        var palabraBuscar = $.trim($("#idBusqueda").val());
        if (palabraBuscar != "") {
            $("#contenedorPantallas").fadeOut(200, function() {
                $.ajax({
                    url: '/user/ajaxBuscarUsuario/' + $("#idBusqueda").val(),
                    async: false,
                    success: function(data) {
                        refrescando = false;
                        $("#contenedorPantallas").html(data).fadeIn(200);
                    },
                });
            });
        }
    },

    perfilModal: function(idUsuarioBusqueda) {
        $("#divModal").html("Cargando");
        $.ajax({
            url: "/user/leerPerfilUsuario/" + idUsuarioBusqueda,
            success: function(data) {
                $("#divModal").html(data);
            }
        });
    },

    temporizador: function() {
        if ($("#mensajesGrupo" + chat.idGrupoActivo).length > 0) {
            chat.chatCargarMensajes();
        }
        setTimeout("chat.temporizador()", chat.segundosRefresco * 1000);
    }
}

$(document).ready(function() {
    $("#botonBuscar").on("click", function(event) {
        chat.perfilBuscar();
    });
    $("#modificarPerfil").on("click", function() {
        chat.perfilModificar();
    });
    $("#botonEsconderBarraIzq").on("click", function() {
        $("#barraIzquierda").slideToggle();
    });
    //Siempre al final
    chat.temporizador();
});