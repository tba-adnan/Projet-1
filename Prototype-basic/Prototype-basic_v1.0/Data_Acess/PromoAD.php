<?php 

include 'Promo.php';
include 'ConnectionDB.php';

class PromoManager {

public function GetData(){

    $selectRow = "SELECT * from promotion";
    $Query = mysqli_query(GetConnection(),$selectRow);
    $GetData = mysqli_fetch_all($Query,MYSQLI_ASSOC);
   $array= array();
    foreach ($GetData as $value){
    $promo = new Promo();
    $promo->SetId($value['Id']);
    $promo->SetName($value['Name_Promotion']);
    array_push($array,$promo);
    }
    
    return $array ;
}

public function AddData($Promo){

$Name =$Promo->getName();

$insertRow="INSERT INTO promotion(Name_Promotion) 
VALUES( '$Name')";

mysqli_query(getConnection(), $insertRow);

}


}





?>