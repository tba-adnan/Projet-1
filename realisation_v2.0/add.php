<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/add-edit.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <title>Gestion Promo : </title>
</head>

<body>
<?php
include ('BLL/PromotionBLL.php');
$PromoManager = new PromotionBLL();
if(!empty($_POST)){
    $Promo = new Promotion();
	$Promo->setName($_POST['Name']);
    $GetData =  $PromoManager->AddData($Promo);
	header("Location: index.php");
}
?>
<br>
<div class="primary-card" style="width:800px; margin:0 auto;">
    <div class="input-group mb-3 container col d-flex align-middle card shadow-lg p-3 mb-5 bg-body rounded " style="width: 25rem;">
    <p class="lead">Ajouter une Promotion : </p>
        <form method="Post">
            <br>
            <input class="input-group-text lead" type="text" placeholder="Nom du Promotion" name="Name">
            <br>
            <button class="btn btn-success lead">Ajouter</button>
            <a class="btn btn-sm btn-outline-secondary" type="button" href="/">Annuler</a>
        </form>
    </div>
</div>



</body>

</html>