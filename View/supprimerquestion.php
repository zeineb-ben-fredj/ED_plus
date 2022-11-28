<?php
	include 'C:/xampp/htdocs/ED+/Controller/questionsC.php';
	$questionC=new questionC();
	$questionC->supprimerquestion($_GET["Id_Question"]);
	header('Location:question_back.php');
?>
