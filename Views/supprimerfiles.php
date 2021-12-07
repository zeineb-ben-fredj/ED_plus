<?php
	include 'C:/xampp/htdocs/ED+/Controller/FilesC.php';
	$filesC=new filesC();
	$filesC->supprimerfiles($_GET["idfichier"]);
	header('Location:Files_Table.php');
?> 