<?php
include ("BLL/PromotionBLL.php");
$promoBLL = new PromotionBLL();
if(isset($_GET['id'])){
   $Data = $promoBLL->EditD($_GET['id']);
}
if(!empty($_POST)){
$id=$_POST['id'];
$name=$_POST['name'];
$promoBLL->updateData($id,$name);

header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="assets/css/add-edit.css">
   <title>Modifer le Nom :</title>
</head>


<body>
   <div class="container-fluid">
      <!-- <br>
      <h1 class="display-5 center">Modifier le Nom du Promotion : </h1>
      <hr> -->
   </div>

   <div class="container-fluid primary-card">
      <div class="input-group mb-3 container-fluid input-group mb-3 container col d-flex align-middle card shadow-lg p-3 mb-5 bg-body rounded" style="width: 25rem;">
         <form class="form-inline justify-content-center form" method="POST">
            <br>
            <div>
               <label for="input" class="lead">Renomé la Promotion : </label>
               <br>
               <input class="input-group-text" type="hidden" value=<?php echo $Data->getId()?> name="id">
               <input class="input-group-text" type="text" value=<?php echo $Data->getName()?> name="name">
               <br>
               <button class="btn btn-success">Envoyer</button>
            </div>
         </form>
      </div>

</body>

</html>