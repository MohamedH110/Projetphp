<?php
include_once('../modele/client.php') ;
include_once('../database/config.php');
class ClientController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(Client $c){

$query="insert into client (nom,prenom,telephone,email,password)values(?, ?, ?, ?,?)";
$res=$this->pdo->prepare($query);

$aryy =array($c->getNom(),$c->getPrenom(),$c->getTel(),$c->getemail(),$c->getpassword()) ;
//var_dump($aryy);
return $res->execute($aryy);

}

function getClient($id){
    $query="SELECT * FROM client WHERE idClient = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}
function delete($idClient) {
$query = "delete from client where idClient=?";
$res=$this->pdo->prepare($query);
return $res->execute(array($idClient));
}

function liste(){
$query = "select * from client";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}


function modifier_user(Client $c,$id) {
    $query = "UPDATE client SET nom = ?, prenom = ?, telephone = ?, email = ?,password=? WHERE idClient = ?";
    $res = $this->pdo->prepare($query);

    $aryy = array($c->getNom(), $c->getPrenom(), $c->getTel(), $c->getemail(),$c->getpassword(),$id);

    return $res->execute($aryy);
}


function getclientid(Client $c){
    $query = "select idClient from client  where nom like ?, prenom like ?, telephone like ?, email like ?,password like ?";
    $res = $this->pdo->prepare($query);
    $aryy = array($c->getNom(), $c->getPrenom(), $c->getTel(), $c->getemail(),$c->getpassword());
    return $res->execute($aryy);
}



}
?>