<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="chatapp";

//connect to db
$db = new mysqli($db_host,$db_user, $db_password, $db_name);
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}

//get user-input from url
$username=substr($_GET["username"], 0, 32);
$text=substr($_GET["text"], 0, 128);
//escaping is extremely important to avoid injections!
$nameEscaped = htmlentities(mysqli_real_escape_string($db,$username)); //escape username and limit it to 32 chars
$textEscaped = htmlentities(mysqli_real_escape_string($db, $text)); //escape text and limit it to 128 chars



$query="INSERT INTO chat (username, text) VALUES ('$nameEscaped', '$textEscaped')";
if ($db->real_query($query)) {
    echo "Mensaje escrito a BBDD.";
}else{
    echo "Error al escribir en BBDD.";
    echo $db->errno;
}

$db->close();
?>