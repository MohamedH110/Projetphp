<?php
include_once('../controllers/clientcontroller.php');
$clr=new ClientController();
$id=$_POST['idClient'];
$clr->delete($id);

header('location:admin.php')
?>