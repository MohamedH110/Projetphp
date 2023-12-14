<?php

class Client {
private $idClient,
        $nom,
        $prenom,
        $telephone,
        $email,
        $password;
function __construct($nom="",$prenom="",$telephone="",$email="",$password="")
{

$this->nom=$nom;
$this->prenom=$prenom;
$this->telephone=$telephone;
$this->email=$email;
$this->password=$password;


}

public function getpassword(){
    return $this->password;
}
public function setpassword($password){
    $this->password=$password;
}

public function getidclient(){
    return $this->idClient;
}
public function getemail(){
	return $this->email;
}

public function getNom(){
	return $this->nom;
}

public function getPrenom(){
	return $this->prenom;
}

public function getTel(){
	return $this->telephone;
}


public function setnom($nom){
        $this->nom = $nom;
    }

public function setemail($ncin){
        $this->ncin = $ncin;
    }

public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

 public function setTel($telephone){
        $this->telephone = $telephone	;
    }

}


?>