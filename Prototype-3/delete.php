<?php
include ("BLL/PromoBLL.php");

$delPromoBLL = new PromoBLL();
if(isset($_GET["id"])){
   $id = $_GET["id"];
   $delPromoBLL->DelData($id);
    header("Location:index.php");
}



?>