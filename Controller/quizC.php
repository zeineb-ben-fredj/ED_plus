<?php
	include '../config2.php';
	include_once '../Model/quizM.php';
    
	class quizC {
		function afficherquiz(){
			$sql="SELECT * FROM tabquiz";
			$db = config2::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
			die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerquiz($idquiz){
			$sql="DELETE FROM tabquiz WHERE idquiz=:idquiz";
			$db = config2::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idquiz', $idquiz);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterquiz($quiz){
			$sql="INSERT INTO tabquiz (idquiz, quiz_nom,  date_de_creation, descriptions, images) 
			VALUES (NULL,:quiz_nom,:date_de_creation, :descriptions, :images)";
			$db = config2::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					//'idquiz' => $courses->getidquiz(),
					'quiz_nom' => $quiz-> getquiz_nom(),
					'date_de_creation' => $quiz->getdate_de_creation(),
					'descriptions' => $quiz->getdescriptions(),
					'images' => $quiz->getimages()
					
					

					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererquiz($idquiz){
			$sql="SELECT * from tabquiz where idquiz=$idquiz";
			$db = config2::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$quiz=$query->fetch();
				return $quiz;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierquiz($quiz, $idquiz){
			try {
				$db = config2::getConnexion();
				$query = $db->prepare(
					'UPDATE tabquiz SET  
					-- idquiz= :idquiz,
						 quiz_nom= :quiz_nom, 
						date_de_creation= :date_de_creation,
						descriptions= :descriptions,
						images= :images
						
						
					WHERE idquiz= :idquiz'
				);
				$query -> bindValue(':idquiz',$idquiz);
				$query->execute([
					 'quiz_nom' => $quiz->getquiz_nom(),
					'date_de_creation' => $quiz->getdate_de_creation(),
					'descriptions' => $quiz->getdescriptions(),
					'images' => $quiz->getimages(),
					
					
					'idquiz' => $idquiz
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>