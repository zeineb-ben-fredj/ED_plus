<?php
	include 'C:\xampp\htdocs\WEB\config.php';
	include_once 'C:\xampp\htdocs\WEB\Model\courses.php';
	
	class coursesC {
		function affichercourses(){
			$sql="SELECT * FROM tabcourse";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
			die('Erreur:'. $e->getMessage());
			}
		}
		function supprimercourses($idcourse){
			$sql="DELETE FROM tabcourse WHERE idcourse=:idcourse";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idcourse', $idcourse);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajoutercourses($courses){
			$sql="INSERT INTO tabcourse (idcourse, subjects,  numof_students, dateof_creation, descriptionsC, pictureC) 
			VALUES (NULL,:subjects,:numof_students, :dateof_creation, :descriptionsC, :pictureC)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					//'idcourse' => $courses->getidcourse(),
					'subjects' => $courses-> getsubjects(),
					'numof_students' => $courses->getnumof_students(),
					'dateof_creation' => $courses->getdateof_creation(),
					'descriptionsC' => $courses->getdescriptionsC(),
					'pictureC' => $courses->getpictureC()
					

					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperercourses($idcourse){
			$sql="SELECT * from tabcourse where idcourse=$idcourse";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$courses=$query->fetch();
				return $courses;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifiercourses($courses, $idcourse){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE tabcourse SET  
					-- idcourse= :idcourse,
						 subjects= :subjects, 
						numof_students= :numof_students,
						dateof_creation= :dateof_creation,
						descriptionsC= :descriptionsC,
						pictureC= :pictureC
						
					WHERE idcourse= :idcourse'
				);
				$query -> bindValue(':idcourse',$idcourse);
				$query->execute([
					 'subjects' => $courses->getsubjects(),
					'numof_students' => $courses->getnumof_students(),
					'dateof_creation' => $courses->getdateof_creation(),
					'descriptionsC' => $courses->getdescriptionsC(),
					'pictureC' => $courses->getpictureC(),
					
					'idcourse' => $idcourse
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>