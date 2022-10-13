<?php 
include "BLL/PromotionBLL.php";
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
        $PromoManager = new PromotionBLL();
        $GetData =  $PromoManager->GetAllData();
        // 
        foreach($GetData as $value){
        ?>
      <td> <?php echo $value->GetId() ?></td>
      <td> <?php echo $value->getName() ?></td>
      <td>
      <a href="edit.php?id=<?php echo $value->GetId() ?>">Edit</a>
      <a href="delete.php?id=<?php echo $value->GetId() ?>">Delete</a>
      </td>
     
    </tr>
<?php }?>
  </tbody>
</table>
<a href="add.php">ajouter</a>