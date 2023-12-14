<?php
include_once('../controllers/contratcontroller.php');
$clr=new contratController;
$id=$_POST['idapp'];
$clr->delete($id);
header('location:admin.php')
?>