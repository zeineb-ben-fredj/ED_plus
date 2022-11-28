<?php
	include 'C:\xampp\htdocs\last\connect1.php';
	include_once 'C:\xampp\htdocs\last\Model\utilisateur.php';
	class utilisateurC {
		function afficherutilisateur(){
			$sql="SELECT * FROM utilisateur";
			$db = connect1::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerutilisateur($Cin){
			$sql="DELETE FROM utilisateur WHERE Cin=:Cin";
			$db = connect1::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':Cin', $Cin);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterutilisateur($utilisateur){
			$sql="INSERT INTO utilisateur (Nom, Prenom , Cin, Daten,Type1,Email,Tel,Motpasse) 
			VALUES (:Nom, :Prenom , :Cin, :Daten,:Type1,:Email,:Tel,:Motpasse)";
			$db = connect1::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'Nom' => $utilisateur->getNom(),
					'Prenom' => $utilisateur->getPrenom(),
					'Cin' => $utilisateur->getCin(),
					'Daten' => $utilisateur->getDaten(),
					'Type1' => $utilisateur->getType1(),
					'Email' => $utilisateur->getEmail(),
					'Tel' => $utilisateur->getTel(),
					'Motpasse' => $utilisateur->getMotpasse()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererutilisateur($Cin){
			$sql="SELECT * from utilisateur where Cin=$Cin";
			$db = connect1::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$utilisateur=$query->fetch();
				return $utilisateur;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierutilisateur($utilisateur, $Cin){
			try {
				$db = connect1::getConnexion();
				$query = $db->prepare(
					'UPDATE utilisateur SET 
						Nom= :Nom, 
						Prenom= :Prenom, 
						Cin= :Cin,
						Daten= :Daten, 
						Type1= :Type1, 
						Email= :Email,
						Tel= :Tel, 
						Motpasse= :Motpasse 
						
					WHERE Cin= :Cin'
				);
				$query->execute([
					'Nom' => $utilisateur->getNom(),
					'Prenom' => $utilisateur->getPrenom(),
					'Daten' => $utilisateur->getDaten(),
					'Type1' => $utilisateur->getType1(),
					'Email' => $utilisateur->getEmail(),
					'Tel' => $utilisateur->getTel(),
					'Motpasse' => $utilisateur ->getMotpasse(),
					'Cin' => $Cin
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}

		}

		function connexionUser($Cin,$Motpasse){
            $sql="SELECT * FROM utilisateur WHERE Cin='" . $Cin . "' and Motpasse = '". $Motpasse."'";
            $db = connect1::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
                $count=$query->rowCount();
                if($count==0) {
                    $message = "Cin ou le mot de passe est incorrect";
                } else {
                    $x=$query->fetch();
                    $message = $x['role'];
                }
            }
            catch (Exception $e){
                    $message= " ".$e->getMessage();
            }
          return $message;
        }
		function afficherutilisateur_sort($t){
			$sql="SELECT * FROM `utilisateur` ORDER BY `$t`";
			$db = connect1::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
	}
?>