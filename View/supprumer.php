<?php 

include_once '../config.php';
include_once '../controller/servicec.php';


$produitc=new servic();
$prod=$produitc->supprimerproduit($_POST['id']);
//$catc=new produitC();
//$catc->supprimerproduit($sqlc);
header('location:produit.php');

?>


