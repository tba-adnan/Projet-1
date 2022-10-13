<?php
include ("DAL/PromotionDAL.php");
class PromotionBLL{
    private $PromoManager = null ;
    public  function __construct()
    {
       $this->PromoManager = new PromotionDAL();
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

   function updateData($Promo){
      return $this->PromoManager->DelData($Promo);
   }

}
?>