<?php
	include '../config2.php';
	include_once '../Model/questionM.php';
	
	class questionC {
		function afficherquestion(){
			$sql="SELECT * FROM question";
			$db = config2::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
			die('Erreur:'. $e->getMessage());
			}
		}
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
		
		function supprimerquestion($Id_Question){
			$sql="DELETE FROM question WHERE Id_Question=:Id_Question";
			$db = config2::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':Id_Question', $Id_Question);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		
		function ajouterquestion($question){
			$sql="INSERT INTO question (Id_Question, Questions, Reponse_Correcte,  Reponse_Fausse, idtable) 
			VALUES (NULL, :Questions, :Reponse_Correcte,:Reponse_Fausse, :idtable)";
			$db = config2::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'Questions' => $question->getQuestions(),
					'Reponse_Correcte' => $question-> getReponse_Correcte(),
					'Reponse_Fausse' => $question->getReponse_Fausse(),
					'idtable' => $question->getidtable()
					
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererquestion($Id_Question){
			$sql="SELECT * from question where Id_Question=$Id_Question";
			$db = config2::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$question=$query->fetch();
				return $question;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierquestion($question, $Id_Question){
			try {
				$db = config2::getConnexion();
				$query = $db->prepare(
					'UPDATE question SET  
					Questions= :Questions,
                    Reponse_Correcte= :Reponse_Correcte, 
                    Reponse_Fausse= :Reponse_Fausse,
                    idtable= :idtable
					WHERE Id_Question= :Id_Question'
				);
				$query -> bindValue(':Id_Question',$Id_Question);
				$query->execute([
					'Id_Question' => $Id_Question,
					'Questions' => $question->getQuestions(),
					 'Reponse_Correcte' => $question->getReponse_Correcte(),
					'Reponse_Fausse' => $question->getReponse_Fausse(),
					'idtable' => $question->getidtable()
					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function trouverquestion($id){
			$sql="SELECT * from question where idtable= $id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
	        
				$fich_var=$query->fetchAll();
				return $fich_var;
				var_dump($fich_var);
				
			}
			catch (Exception $e){
				die('error: '.$e->getMessage());
			}
		}
       

	}
?>