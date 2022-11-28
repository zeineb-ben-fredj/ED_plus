<?php
	include 'C:/xampp/htdocs/WEB/config.php';
	include_once 'C:\xampp\htdocs\WEB\Model\formation.php';
	
	class formationC {
		function afficherformations(){
			$sql="SELECT * FROM formation";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

		function chercherformations($nom){
			$sql="SELECT * FROM `formation` WHERE `nom` = '$nom'";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

		function supprimerformation($idformation){
			$sql="DELETE FROM formation WHERE idformation=:idformation";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idformation', $idformation);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterformation($formation){
			$sql="INSERT INTO formation (nom,lesson,montant,photo) 
			VALUES (:nom,:lesson,:montant,:photo)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom' => $formation->getnom(),
					'lesson' => $formation->getlesson(),
					'montant' => $formation->getmontant(),
					'photo' => $formation->getphoto()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererformation($idformation){
			$sql="SELECT * from formation where idformation=$idformation";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$formation=$query->fetch();
				return $formation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierformation($formation, $idformation){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE formation SET 
					idformation= :idformation,
						nom= :nom, 
						lesson= :lesson, 
						montant= :montant,
						photo= :photo
				
					WHERE idformation= :idformation'
				);
				$query->execute([
					'idformation' => $formation->getidformation(),
					'nom' => $formation->getnom(),
					'lesson' => $formation->getlesson(),
					'montant' => $formation->getmontant(),
					'photo' => $formation->getphoto(),
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>