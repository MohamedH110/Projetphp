<?php
include_once('../modele/appartement.php') ;
include_once('../database/config.php');
class appartementController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(appartement $a){

    $query="insert into appartement (prixlocation,superficie,type,etat,adresse)values(?, ?, ?, ?,?)";
    $res=$this->pdo->prepare($query);
    
    $aryy =array($a->getPrixlocation(),$a->getSuperficie(),$a->getType(),$a->getEtat(),$a->getadresse()) ;
    //var_dump($aryy);
    return $res->execute($aryy);
    
    }

    function delete($idapp) {
        $query = "delete from appartement where idapp=?";
        $res=$this->pdo->prepare($query);
        return $res->execute(array($idapp));
        }
        
    
        function liste(){
            $query = "select * from appartement";
            $res=$this->pdo->prepare($query);
            $res->execute();
            return $res;
            }

            function getapartment($id){
                $query="SELECT * FROM appartement WHERE idapp = ? ";
                $res = $this->pdo->prepare($query);
                $res->execute(array($id));
                $array= $res->fetch();
                return $array;
            }
                
        
            function modifier_apar(appartement $a,$id) {
                $query = "UPDATE appartement SET prixlocation = ?, superficie = ?, type = ?, etat = ?,adresse=? WHERE idapp = ?";
                $res = $this->pdo->prepare($query);
            
                $aryy = array($a->getprixlocation(),$a->getSuperficie(), $a->gettype(), $a->getetat(),$a->getadresse(),$id);
            
                return $res->execute($aryy);
            }
         
}


?>