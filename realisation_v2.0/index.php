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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/bootstrap-icons.svg" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	</script>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Gestion des Promotions : </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
	  <form class="container-fluid justify-content-start">
    <a class="btn btn-outline-success me-2" type="button" href="/add.php">Ajouter</a>
    <a class="btn btn-sm btn-outline-secondary" type="button" href="/search.html">Chercher</a>
  </form>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
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
<form method="Post">
<br>
<input class="input-group-text" type="text" name="Name">
<br>
 <button class="btn btn-success">Ajouter</button>
</form>


