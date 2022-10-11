<?php 
include "BLL/PromoBLL.php";
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id : </th>
      <th scope="col">Nom du promo : </th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php 
        $PromoManager = new PromoBLL();
        $GetData =  $PromoManager->GetAllData();
        // 
        foreach($GetData as $value){
        ?>
      <td> <?php echo $value->GetId() ?></td>
      <td> <?php echo $value->getName() ?></td>
    </tr>
<?php }?>
  </tbody>
</table>
<a href="add.php">ajouter</a>