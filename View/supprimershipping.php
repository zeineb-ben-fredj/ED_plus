<?php
	include '../Controller/shippingC.php';
	$shippingC=new shippingC();
	$shippingC->supprimershipping($_GET["id_shipping"]);
	header('Location:db_shipping');
?>