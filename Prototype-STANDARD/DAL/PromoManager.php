<?php 

include 'Promo.php';
include 'DBcon.php';

class PromoManager {

public function GetData(){

    $selectRow = "SELECT * from classes";
    $Query = mysqli_query(Conn(),$selectRow);
    $GetData = mysqli_fetch_all($Query,MYSQLI_ASSOC);
    $array= array();
    foreach ($GetData as $value){
    $promo = new Promo();
    $promo->SetId($value['id']);
    $promo->SetName($value['nom']);
    array_push($array,$promo);
    }
    
    return $array ;
}

public function AddData($Promo){
 $Name =$Promo->getName();
 $insertRow="INSERT INTO classes(nom) 
 VALUES( '$Name')";
 mysqli_query(Conn(), $insertRow);
}



public function DelData($Promo){
    $Name =$Promo->getName();
    $insertRow="INSERT INTO classes(nom) 
    VALUES( '$Name')";
    mysqli_query(Conn(), $insertRow);
   }
   


}

?>