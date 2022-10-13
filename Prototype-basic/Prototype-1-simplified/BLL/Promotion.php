<?php

class Promotion {
    private $Id ;
    private $Nom;


      public function getId(){
        return $this->Id;
      }
      public function setId($id){
        $this->Id = $id;
      }
      public function getName(){
        return $this->Nom;
      }
      public function setName($nom){
        $this->Nom = $nom;
      }

} 

?>
   
