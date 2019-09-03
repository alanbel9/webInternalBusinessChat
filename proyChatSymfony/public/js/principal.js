var chat = {
    //idGrupo: 0,
    idGrupoActivo : 0, 
    
    idUltimoMensaje: 0,

    peticion: 0,

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
              $("#contenedorPantallas").html(data).fadeIn(200);
            }
          });
        });
    },
    
    menuClickConversacion: function(idGrupo) {
        $("#contenedorPantallas").fadeOut(200, function () {
            $.ajax({
              url: '/grupos/ajaxObtenerConversacion/' + idGrupo,
              success: function (data) {
                $("#contenedorPantallas").html(data).fadeIn(500);
                $('#ns-idGrupo').val(idGrupo);
                //chat.chatCargarMensajes();
              },
              beforeSend: function(){
                $("#barraIzquierda .nombreGrupo").attr("style", "pointer-events:none");
              },
              complete: function(){
                $("#barraIzquierda .nombreGrupo").attr("style","pointer-events:auto");  
              }
            });
        });
    },

    chatSemaforo: 0,
    chatCargarMensajes: function(){
        if (chat.chatSemaforo==0){
            chat.chatSemaforo=1;
            $.ajax({
                type: "POST",
                //async:false,
                url: '/grupos/ajaxRefrescarPantallaConversacion/' + $("#pantallaMensajes").attr('idGrupo') + '/' + chat.idUltimoMensaje,
                success: function (data) {
                        $.each(data['texto'], function(key, value){
                            var d = new Date(value['fecha']);
                            var fecha = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds() + " (" + d.getDate() + "-" + (d.getMonth() + 1) + "-" + d.getFullYear() + ")";
                            var plantilla =$('#planMensaje').html();
                            console.log(value);
                            plantilla =chat.reemplazar(plantilla ,'##IDUS##', value['idUs']);
                            plantilla =chat.reemplazar(plantilla ,'##NOMBRE##', value['nombre']);
                            plantilla =chat.reemplazar(plantilla ,'##FECHA##', fecha);
                            plantilla =chat.reemplazar(plantilla ,'##MENSAJE##', value['mensaje']);
                            $("#mensajesGrupo" + data['idGrupoRecibido']).prepend(plantilla);
                            chat.idUltimoMensaje=value['id'];
                        })
                },
                complete: function(){
                    chat.chatSemaforo=0;
                }
            });
        }
    },

    chatEnviarMensaje: function(){
        var mensaje=$.trim($("#mensajeEnviar").val());
        if(mensaje!=""){
            $("#mensajeEnviar").val("");
            $.ajax({
                url: '/principal/escribirMensaje/'+ $("#pantallaMensajes").attr('idGrupo') + "/" + mensaje,
                success: function (data) {
                    console.log("Mensaje guardado en la base de datos");
                }
            });
        }
        
    },

    perfilBuscar: function(){
        var palabraBuscar = $.trim($("#idBusqueda").val());
        if (palabraBuscar != "") {
            $("#contenedorPantallas").fadeOut(200, function () {
                $.ajax({
                    url: '/user/ajaxBuscarUsuario/' + $("#idBusqueda").val(),
                    async: false,
                    success: function (data) {
                        refrescando=false;
                        $("#contenedorPantallas").html(data).fadeIn(200);
                    },
                });
            });
        }        
    },

    perfilModificar: function(){
        $("#contenedorPantallas").fadeOut(200, function () {
            $.ajax({
                url: '/usuarios/edit',
                success: function (data) {
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
    },

    temporizador: function() { 
        if($("#pantallaMensajes").attr('idGrupo')){  
            chat.chatCargarMensajes();
        }  
        setTimeout("chat.temporizador()", 5000);
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
//Siempre al final
    chat.temporizador();
});