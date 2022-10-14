<?php 

include ('Promotion.php');
include ('DBcon.php');
class PromotionDAL {

// Display
public function GetData(){
    $selectRow = "SELECT * from classes";
    $Query = mysqli_query(Conn(),$selectRow);
    $GetData = mysqli_fetch_all($Query,MYSQLI_ASSOC);
    $array= array();
    foreach ($GetData as $value){
    $promo = new Promotion();
    $promo->SetId($value['id']);
    $promo->SetName($value['name']);
    array_push($array,$promo);
    } 
    return $array ;
}

// Add
public function AddData($Promo){
 $Name =$Promo->getName();
 $InsertRow="INSERT INTO classes(name) 
 VALUES( '$Name')";
 mysqli_query(Conn(), $InsertRow);
}

// Delete
public function DelData($id){
    $DeleteRow="DELETE  FROM classes where id = $id"; 
    mysqli_query(Conn(), $DeleteRow);
   }

// Update
   public function Update($id,$name){
    $UpdateRow="UPDATE classes SET 
    `name` = '$name' 
     where id = $id"; 
    mysqli_query(Conn(), $UpdateRow);
   }

//  Edit
   function Edit($id){
    $SelectRowId = "SELECT * FROM classes WHERE id=$id";
    $Query = mysqli_query(Conn(),$SelectRowId);
    $GetData = mysqli_fetch_all($Query,MYSQLI_ASSOC);
    foreach ($GetData as $value){
    $promo = new Promotion();
    $promo->SetId($value['id']);
    $promo->SetName($value['name']);
    }
    return $promo ;
}
}
?>