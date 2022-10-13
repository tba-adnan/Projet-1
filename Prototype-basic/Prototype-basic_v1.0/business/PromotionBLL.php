<?php

include ("Data_Acess/PromoAD.php");


class PromoBLL{

    private $PromoManager = null ;
    public  function __construct()
    {
       $this->PromoManager = new PromoManager();
    
    }


    function GetAllData(){

       return $this->PromoManager->GetData();

    }
    function AddData($Promo){

       return $this->PromoManager->AddData($Promo);

    }
    
 
}

?>