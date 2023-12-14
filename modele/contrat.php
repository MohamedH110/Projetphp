<?php

class Contrat {
private 
        $idClient,
        $idapp,
        $datel;
function __construct($idClient="",$idapp="",$datel="")
{

$this->idClient=$idClient;
$this->idapp=$idapp;
$this->datel=$datel;
}

public function getidClient(){
    return $this->idClient;
}


public function getidapp(){
    return $this->idapp;
}

public function getdatel(){
    return $this->datel;
}

public function setidClient($idClient){
    $this->idClient=$idClient;
}

public function setidapp($idapp){
    $this->appt=$idapp;
}

public function setdatel($datel){
    $this->datel=$datel;
}


}