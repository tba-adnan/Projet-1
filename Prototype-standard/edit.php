<?php
include ("BLL/PromotionBLL.php");

$delPromoBLL = new PromotionBLL();
if(isset($_GET["id"])){
   $id = $_GET["id"];
   $delPromoBLL->updateData($id);
    header("Location:index.php");
}

?>