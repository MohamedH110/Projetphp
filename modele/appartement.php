<?php

class appartement{
    private $idapp,
    
     $prixlocation,
     $superficie,
     $type,
     $etat,
     $adresse;
    
    
    public function __construct($prixlocation, $superficie,$type, $etat, $adresse){
       
        
        $this->prixlocation = $prixlocation ;
        $this->superficie = $superficie ;
        $this->type = $type ;
        $this->etat = $etat ;
        $this->adresse = $adresse ;
        
       
        }
        public function getIdapp(){
            return $this->idapp;
            }
        
        
         public function setPrix($prixlocation) {
                        $this->prixlocation = $prixlocation;
                        }
         public function getPrixlocation() {
                 return $this->prixlocation;
                            }
        public function setSuperficie($superficie) {
                $this->superficie = $superficie;
                        }
        public function getSuperficie() {
                return $this->superficie;
                                    }
        
       
         public function setType($type) {
              $this->type = $type;
                                }
        public function getType() {
             return $this->type;
                }
        
                public function setEtat($etat) {
                    $this->etat = $etat;
                }
                 public function getEtat() {
                     return $this->etat;
                 }


                 public function setadresse($adresse) {
                    $this->adresse = $adresse;
                }
                 public function getadresse() {
                     return $this->adresse;
                 }
                        
                                                                            
}







?>