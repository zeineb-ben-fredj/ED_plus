<?php
	include 'C:/xampp/htdocs/WEB/Controller/coursesC.php';
	$coursesC=new coursesC();
	$coursesC->supprimercourses($_GET["idcourse"]);
	header('Location:Courses_table2.php');
?>

		