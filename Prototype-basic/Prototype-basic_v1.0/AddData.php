


<?php

include "business/PromotionBLL.php";
$PromoManager = new PromoBLL();
if(!empty($_POST)){

    $Promo = new Promo();
	$Promo->setName($_POST['Name']);
    
    $GetData =  $PromoManager->AddData($Promo);
	
	// Redirection vers la page index.phpnpn
	header("Location: index.php");
}

?>



<form method="Post">
<input type="text" name="Name">
<button>ajouter</button>
</form>