<?php 

include ('Promo.php');
include ('DBcon.php');

class PromoManager {

public function GetData(){

    $selectRow = "SELECT * from classes";
    $Query = mysqli_query(Conn(),$selectRow);
    $GetData = mysqli_fetch_all($Query,MYSQLI_ASSOC);
    $array= array();
    foreach ($GetData as $value){
    $promo = new Promo();
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


   function Edit($id, $Name){
    $SelectRowId = "SELECT * FROM classes WHERE id=$id";
    $Query = mysqli_query(Conn(),$SelectRowId);
    $GetData = mysqli_fetch_all($Query,MYSQLI_ASSOC);
    foreach ($GetData as $value){
    $promo = new Promo();
    $promo->SetId($value['id']);
    $promo->SetName($value['name']);
   
    }
    
    return $promo ;
}



}

?>