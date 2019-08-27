
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {

var chatInterval = 250; //refresh interval in ms


var $userName = '<?php echo $_POST['usuario'] ?> '; 

var $chatInput =' <?php echo $_POST['textAreaMensaje'] ?> '; 


function sendMessage() {
    // seleccionamos nombre de usuario y mensaje enviado.
    var userNameString = $userName;
    var chatInputString = $chatInput;

    $.get("write.php", {
        username: userNameString,
        text: chatInputString
    });

}

sendMessage();


window.location.href="principalAlan.php";
});



</script>