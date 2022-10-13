<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Gestion Promo : </title>
</head>

<body>
    <?php
include ('BLL/PromoBLL.php');
$PromoManager = new PromoBLL();
if(!empty($_POST)){
    $Promo = new Promotion();
	$Promo->setName($_POST['Name']);
    $GetData =  $PromoManager->AddData($Promo);
	header("Location: index.php");
}

?>

    <h1 class="display-3 container-fluid">Ajouter une Promotion : </h1>
    <hr>
    <div class="input-group mb-3 container-fluid">
        <form method="Post">
            <br>
            <input class="input-group-text" type="text" name="Name">
            <br>
            <button class="btn btn-success">Ajouter</button>
        </form>




    </div>


</body>

</html>