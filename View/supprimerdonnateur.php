<?php
	include '../Controller/donnateurC.php';
	$donnateurC=new donnateurC();
	$donnateurC->supprimerdonnateur($_GET["iddonnateur"]);
	header('Location:tables/datatables.php');
?>