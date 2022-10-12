<?php
include ("BLL/PromoBLL.php");

$delPromoBLL = new PromoBLL();
if(isset($_GET["id"])){
   $id = $_GET["id"];
   $delPromoBLL->updateData($id);
    header("Location:index.php");
}

?>