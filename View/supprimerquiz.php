<?php
	include 'C:/xampp/htdocs/WEB/Controller/quizC.php';
	$quizC=new quizC();
	$quizC->supprimerquiz($_GET["idquiz"]);
	header('Location:quiz_back.php');
?>

		