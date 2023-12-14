<?php
include_once('../modele/contrat.php') ;
include_once('../database/config.php');
class contratcontroller extends Connexion{
function __construct() {
parent::__construct();
}

function insert(Contrat $c){

    $query="insert into contrat (idClient,idapp,datel)values(?, ?, ?)";
    $res=$this->pdo->prepare($query);
    
    $aryy =array($c->getidClient(),$c->getidapp(),$c->getdatel()) ;
    //var_dump($aryy);
    return $res->execute($aryy);
    
    }

    function getContrat($id){
        $query="SELECT * FROM contrat WHERE idClient = ? ";
        $res = $this->pdo->prepare($query);
        $res->execute(array($id));
        $array=$res->fetchAll(PDO::FETCH_ASSOC);

        return $array;
    }

    function delete($idapp) {
        $query = "delete from contrat where idapp = ?";
        $res=$this->pdo->prepare($query);
        return $res->execute(array($idapp));
        }


        function liste() {
            $query = "select * from contrat
                      join client on client.idClient = contrat.idClient";
            $res = $this->pdo->prepare($query);
            $res->execute();
            return $res;
        }
        

           

        }