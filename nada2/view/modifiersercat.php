<?php 
include_once '../model/categorie.php';
include_once'../controller/servicec.php';


if(!isset($_POST['id'])||!isset($_POST['libelle']))
{
	echo "erreur de ";
}

$service=new c ($_POST['id'],$_POST['libelle']);

$produitc=new servic();
$produitc->Modifiercategorie($service);
header('location:categorie.php');


?>