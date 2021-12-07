<?php
	include '../Controller/FilesC.php';
	$filesC=new filesC();
	$listefiles=$filesC->afficherfiles(); 
?>  
<html>
	<head></head>
	<body> 
	    <button><a href="ajouterfiles.php">Add a file</a></button>
		<center><h1>List of files</h1></center>
		<table border="1" align="center">
			<tr>
                                                   <th>idfichier</th>
												   <th>Name</th>
													<th>Type</th>
													<th>Publication Date</th>
													<th>lesson_level</th>
													<th>Description</th>
													<th>Upload File</th>
													<th>Picture</th>
													<th>ID_Course</th> 
													
			</tr>
			<?php
				foreach($listefiles as $files){
			?>
		    <tr>
            
				<td><?php echo $files['idfichier']; ?></td>
				<td><?php echo $files['nomfichier']; ?></td>
				<td><?php echo $files['typefichier']; ?></td>
				<td><?php echo $files['dateof_publication']; ?></td>
				<td><?php echo $files['lesson_level']; ?></td>
				<td><?php echo $files['descriptionfichier']; ?></td>
				<td><?php echo $files['uploadfichier']; ?></td>
				<td><?php echo $files['filepic']; ?></td>
				<td><?php echo $files['id_cc']; ?></td>
				

				<td>
					<form method="POST" action="modifierfiles.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $files['idfichier']; ?> name="idfichier">
					</form>
				</td>
				<td>
					<a href="supprimerfiles.php?idfichier=<?php echo $files['idfichier']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
