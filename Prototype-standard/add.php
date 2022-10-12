<?php
include ('BLL/PromoBLL.php');
$PromoManager = new PromoBLL();
if(!empty($_POST)){
    $Promo = new Promo();
	$Promo->setName($_POST['Name']);
    $GetData =  $PromoManager->AddData($Promo);
	header("Location: index.php");
}

?>
<form method="Post">
<input type="text" name="Name">
<button>Ajouté</button>
</form>