<?php 
include_once '../model/produit.php';
include_once'../controller/servicec.php';


if(!isset($_POST['id'])||!isset($_POST['prix'])||!isset($_POST['date']))
{
	echo "erreur de ";
}

$service=new  p( $_POST['id'],$_POST['prix'],$_POST['date']);


$produitc=new servic();
$produitc->Modifierser($service);
header('location:produit.php');


?>