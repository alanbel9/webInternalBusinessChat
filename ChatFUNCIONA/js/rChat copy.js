
    $(document).ready(function() {

    var chatInterval = 250; //refresh interval in ms
    var $userName = $("#userName");    // input text Usuario
    var $chatOutput = $("#chatOutput");  // div de todo el historial de mensajes.
    var $chatInput = $("#chatInput");   // input text mensaje a enviar
    var $chatSend = $("#chatSend");     // botón enviar mensaje


    function sendMessage() {
        // seleccionamos nombre de usuario y mensaje enviado.
        var userNameString = $userName.val();
        var chatInputString = $chatInput.val();

        $.get("./write.php", {
            username: userNameString,
            text: chatInputString
        });

        // vaciar iput text del mensaje después de enviarlo.
        $chatInput.val("");
        //$userName.val("");
        retrieveMessages();
    }



    // carga todos los mensajes almacenados en BBDD
    function retrieveMessages() {
        $.get("./read.php", function(data) {
            $chatOutput.html(data); 
        });
    }


    // vinculamos la función sendMessage() al botón enviar mensaje.
    $chatSend.click(function() {
        sendMessage();
    });


    // intervalo de refresco de página.
    setInterval(function() {
        retrieveMessages();
    }, chatInterval);

});

