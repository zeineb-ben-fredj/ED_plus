<?php
	include('formationC.php');
	include_once 'C:\xampp\htdocs\WEB\Model\formation.php';
	class donnateurC {
		function afficherdonnateurs(){
			$sql="SELECT * FROM donnateur";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

		
			function afficherdonnateurs_sort($t){
				$sql="SELECT * FROM `donnateur` ORDER BY `$t`";
				$db = config::getConnexion();
				try{
					$liste = $db->query($sql);
					return $liste;
				}
				catch(Exception $e){
					die('Erreur:'. $e->getMeesage());
				}
			}
	
		function supprimerdonnateur($iddonnateur){
			$sql="DELETE FROM donnateur WHERE iddonnateur=:iddonnateur";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':iddonnateur', $iddonnateur);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

		function ajouterdonnateur($donnateur){
			$sql="INSERT INTO donnateur (nom, adresse, phone, email,montant,formation) 
			VALUES (:nom,:adresse, :phone,:email,:montant,:formation)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom' => $donnateur->getnom(),
					'adresse' => $donnateur->getadresse(),
					'phone' => $donnateur->getphone(),
					'email' => $donnateur->getemail(),
					'montant' => $donnateur->getmontant(),
					'formation' => $donnateur->getformation()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function recupererdonnateur($iddonnateur){
			$sql="SELECT * from donnateur where iddonnateur=$iddonnateur";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$donnateur=$query->fetch();
				return $donnateur;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function modifierdonnateur($donnateur, $iddonnateur){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE donnateur SET 
					iddonnateur= :iddonnateur,
						nom= :nom, 
						adresse= :adresse, 
						phone= :phone,
						email= :email, 
						montant= :montant
						
					WHERE iddonnateur= :iddonnateur'
				);
				$query->execute([
					
					'iddonnateur' => $donnateur->getiddonnateur(),
					'nom' => $donnateur->getnom(),
					'adresse' => $donnateur->getadresse(),
					'phone' => $donnateur->getphone(),
					'email' => $donnateur->getemail(),
					'montant' => $donnateur->getmontant(),

				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
// 		public function afficherformation($iddonnateur) {
//             try{
//              $pdo = getConnexion(); 
//              $query = $pdo->prepare( 
//                  'SELECT * FROM formation where donnateur = :iddonnateur' 
//            ); 
//                $query->execute([ 
//                    'iddonnateur' => $iddonnateur  
//                ]); 
//                return $query->fetchAll(); 
//            } 
//        catch (PDOException $e){
//             $e->getMessage(); 
//        } 

//    }

	}
?>