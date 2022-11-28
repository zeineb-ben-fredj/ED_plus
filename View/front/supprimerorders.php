<?php
	include '../Controller/ordersC.php';
	$ordersC=new ordersC();
	$ordersC->supprimerorders($_GET["ref_cmd"]);
	header('Location:db_orders2.php');
?>