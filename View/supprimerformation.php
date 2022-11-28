<?php
	include '../Controller/formationC.php';
	$formationC=new formationC();
	$formationC->supprimerformation($_GET["idformation"]);
	header('Location:formation_back.php');
?>