<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="chatapp";

//connect to db
$db = new mysqli($db_host,$db_user, $db_password, $db_name);
if ($db->connect_errno) {
    //if the connection to the db failed
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}



$query="SELECT * FROM chat ORDER BY id DESC"; 
// ASC : carga los mensajes de forma lógica. DESC: primero los más recientes.
// campos de la tabla chat: id , username , time , text


//execute query
if ($db->real_query($query)) {
    //If the query was successful
    $res = $db->use_result();

    while ($row = $res->fetch_assoc()) {
        $username=$row["username"];
        $text=$row["text"];

        $time=date('D d - M | G:i', strtotime($row["time"])); // formato fecha a mostrar en mensaje.
       // $time=date('G:i', strtotime($row["time"])); 

       // echo "<p>$time | <b><i> $username: </i></b> $text</p>\n";

       echo '<div class="card text-white bg-warning mb-3" style="max-width: 40rem;">';

            echo '<div class="card-body">';
                    echo '<p class="card-text"><b><i>'. $time .' | '. $username .':</i></b><br> '. $text .'</p>';
            echo '</div>';
       echo '</div>';


    }
}else{
    //If the query was NOT successful
    echo "Ha ocurrido un error. Consulta incorrecta.";
    echo $db->errno;
}

$db->close();
?>