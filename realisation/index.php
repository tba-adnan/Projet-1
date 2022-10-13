<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
		integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
	</script>

<body>
	<!--  -->
	<nav class="navbar navbar-light bg-light">
		<span class="navbar-brand d-grid gap-3 mx-auto display-2 container-fluid"> Gestion du Promotion :
		</span>

	</nav>
	<br>
	<!--  -->
	<?php 
include "BLL/PromotionBLL.php";
?>
	<div class="">
		<table class="table table-striped table-dark">
			<thead class="thead-dark">
				<tr>
					<th scope="col" class="lead">ID : </th>
					<th scope="col" class="lead">Nom du promo : </th>
					<th scope="col" class="lead">Action : </th>
			</thead>
			<tbody>
				<tr>
					<?php 
        $PromoManager = new PromotionBLL();
        $GetData =  $PromoManager->GetAllData();
        foreach($GetData as $value){
        ?>
					<td> <?php echo $value->GetId() ?></td>
					<td> <?php echo $value->getName() ?></td>
					<td>
						<a class="btn btn-warning" href="edit.php?id=<?php echo $value->GetId() ?>">Modifier</a>
						<a class="btn btn-danger" href="delete.php?id=<?php echo $value->GetId() ?>">Supprimer</a>
						</button>
					</td>
				</tr>
				<?php }?>
			</tbody>
		</table>
		<br>
		<div class="container-fluid">
			<a href="add.php" class="btn btn-success">Ajouter</a>
			<a href="search.html" class="btn btn-secondary">Chercher</a>
		</div>
	</div>

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