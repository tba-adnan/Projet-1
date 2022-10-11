<?php
function Conn(){
    $connection = mysqli_connect("localhost",'superadmin','strongpassword','crud_db');
return $connection;
}
?>