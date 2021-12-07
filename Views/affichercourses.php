<?php
	include '../Controller/coursesC.php';
	$coursesC=new coursesC();
	$listecourses=$coursesC->affichercourses(); 
?>
<html>
	<head></head>
	<body> 
	    <button><a href="ajoutercourses.php">Ajouter un courses</a></button>
		<center><h1>Liste des courses</h1></center>
		<table border="1" align="center">
			<tr>
				<th>idcourse</th>
				<th>subjects</th>
				<th>numof_students</th>
				<th>dateof_creation</th>
				<th>descriptionsC</th>
				<th>pictureC</th>
				
			</tr>
			<?php
				foreach($listecourses as $courses){
			?>
			<tr>
				<td><?php echo $courses['idcourse']; ?></td>
				<td><?php echo $courses['subjects']; ?></td>
				<td><?php echo $courses['numof_students']; ?></td>
				<td><?php echo $courses['dateof_creation']; ?></td>
				<td><?php echo $courses['descriptionsC']; ?></td>
				<td><?php echo $courses['pictureC']; ?></td>
				

				<td>
					<form method="POST" action="modifiercourses.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $courses['idcourse']; ?> name="idcourse">
					</form>
				</td>
				<td>
					<a href="supprimercourses.php?id=<?php echo $courses['idcourse']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
