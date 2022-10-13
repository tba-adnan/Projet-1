<?php


function GetConnection(){

    $connection = mysqli_connect("localhost",'root','','gestion_promotion');

return $connection;
}



?>