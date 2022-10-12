<?php
include ("BLL/PromoBLL.php");
$promoBLL = new PromoBLL();
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

<div class="container cadre">
	<div class=" text-center">
<form class="form-inline justify-content-center form" method="POST">
   <h1 class="title">Modifier promotion</h1>
   <div class="form-group mx-sm-3 mb-2 input">
      <label for="input" class="sr-only">Name poromotion</label>
      <input type="hidden" value=<?php echo $Data->getId()?> name="id">
      Nom de la poromotion <input type="text" value=<?php echo $Data->getName()?> name="name">
      <button class=" btn btn-info  ">Envoyer</button>
   </div>
</form>

</div>
</div>