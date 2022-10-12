<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
		integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="assets/ajax.js"></script>
	<title>Document</title>
</head>

<body>
	<!--  -->
<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1"> Gestion du Promotion : </span>
</nav>
	<br>
	<!--  -->
	<?php 
include "BLL/PromoBLL.php";
?>
	<div lass="position-absolute top-50 start-50 translate-middle">
		<table class="table table-sm">
			<thead>
				<tr>
					<th scope="col">Id : </th>
					<th scope="col">Nom du promo : </th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php 
        $PromoManager = new PromoBLL();
        $GetData =  $PromoManager->GetAllData();
        foreach($GetData as $value){
        ?>
					<td> <?php echo $value->GetId() ?></td>
					<td> <?php echo $value->getName() ?></td>
					<td>
						<a class="btn btn-warning" href="edit.php?id=<?php echo $value->GetId() ?>">Modifier</a>
						<a class="btn btn-danger" href="delete.php?id=<?php echo $value->GetId() ?>">Supprimer</a>
					</td>

				</tr>
				<?php }?>
			</tbody>
		</table>
		<br>
		<a href="add.php" class="btn btn-success">Ajouter</a>
		<a href="search.html" class="btn btn-info">Chercher</a>
	</div>