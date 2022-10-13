<?php

include ("DAL/PromoManager.php");
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

    function DelData($Promo){
      return $this->PromoManager->DelData($Promo);
   }

   function EditD($Promo){
      return $this->PromoManager->Edit($Promo);
   }

   function updateData($id, $Name){

      return $this->PromoManager->update($id, $Name);

   }

}

?>