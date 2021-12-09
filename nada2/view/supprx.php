<?php 

include_once '../config.php';
include_once '../controller/servicec.php';


$produitc=new servic();
$prod=$produitc->supprimercategorie($_POST['id']);
//$catc=new produitC();
//$catc->supprimerproduit($sqlc);
header('location:categorie.php');

?>


