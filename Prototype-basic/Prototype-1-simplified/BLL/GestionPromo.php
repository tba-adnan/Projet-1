<?php

include 'Promotion.php';
class GestionPromotion {

//   Conn (SQL connection)
    private function conn(){
            $this->Connection = mysqli_connect('localhost', 'superadmin', 'strongpassword', 'crud_db');
        return $this->Connection;
    }
// 
     public function Display(){
         $SQLQ = 'SELECT * FROM classes';
         $query = mysqli_query($this->conn() ,$SQLQ);
         $pdata = mysqli_fetch_all($query, MYSQLI_ASSOC);
// 
         $tData = array();
          foreach ($pdata as $tdata_value) {
           $promotion = new Promotion;
           $promotion->setId($tdata_value['id']);
           $promotion->setName($tdata_value['nom']);
           array_push($tData , $promotion);
          }
          return $tData;

     } 
}
?>