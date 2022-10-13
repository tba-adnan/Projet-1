<?php 

include ('Promotion.php');
include ('DBcon.php');

class PromotionDAL {

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

public function AddData($Promo){
 $Name =$Promo->getName();
 $InsertRow="INSERT INTO classes(name) 
 VALUES( '$Name')";
 mysqli_query(Conn(), $InsertRow);
}


public function DelData($id){
    $DeleteRow="DELETE  FROM classes where id = $id"; 
    mysqli_query(Conn(), $DeleteRow);
   }

   public function updateData($id){
    $DeleteRow="DELETE  FROM classes where id = $id"; 
    mysqli_query(Conn(), $DeleteRow);
   }

}

?>