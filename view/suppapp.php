<?php
include_once('../controllers/appartementcontroller.php');
$appclr=new appartementController;
$id=$_POST['idapp'];
$appclr->delete($id);
header('location:admin.php')
?>