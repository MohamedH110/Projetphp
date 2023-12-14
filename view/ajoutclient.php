<?php
require_once('../controllers/clientcontroller.php');
require_once('../modele/client.php');

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$password=$_POST['password'];

if (isset($nom)){
    $client=new Client($nom,$prenom,$telephone,$email,$password);
    $clientctr=new ClientController();
    $clientctr->insert($client);
    session_start();
    $_SESSION['compte_cree'] = true;
    header('location:index.php');
}
?>