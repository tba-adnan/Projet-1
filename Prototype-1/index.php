<?php
 include 'GestionPromo.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div>
    <table >
     <tr>
        <th>id : </th>
        <th>Nom du promotion : </th>
     </tr>
     <?php      
      $Gestionpromo = new GestionPromotion;
      $data = $Gestionpromo->Display();
       foreach($data as $value){
    ?>
      <tr>
         <td><?= $value->getId() ?></td>
         <td><?= $value->getName() ?></td>
      </tr>
     
     <?php }?>
    </table>
    </div>
</body>
</html>