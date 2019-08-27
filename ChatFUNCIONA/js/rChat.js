
    $(document).ready(function() {

    var chatInterval = 250; //refresh interval in ms
    var $userName = $("#userName");    // input text Usuario
    var $chatOutput = $("#chatOutput");  // div de todo el historial de mensajes.
    var $chatInput = $("#chatInput");   // input text mensaje a enviar
    var $chatSend = $("#chatSend");     // botón enviar mensaje




    // carga todos los mensajes almacenados en BBDD
    function retrieveMessages() {
        $.get("./read.php", function(data) {
            $chatOutput.html(data); 
        });
    }


    // vinculamos la función sendMessage() al botón enviar mensaje.


    // intervalo de refresco de página.
    setInterval(function() {
        retrieveMessages();
    }, chatInterval);

});

