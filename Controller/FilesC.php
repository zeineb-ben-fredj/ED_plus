<?php
	include 'C:\xampp\htdocs\WEB\config.php';
	include_once 'C:\xampp\htdocs\WEB\Model\Files.php';
	
	class filesC {
		function afficherfiles(){
			$sql="SELECT * FROM tabfiles";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
			die('Erreur:'. $e->getMessage());
			}
		}
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
		function supprimerfiles($idfichier){
			$sql="DELETE FROM tabfiles WHERE idfichier=:idfichier";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idfichier', $idfichier);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		
		function ajouterfiles($files){
			$sql="INSERT INTO tabfiles (idfichier, nomfichier, typefichier,  dateof_publication, lesson_level, descriptionfichier, uploadfichier, filepic, id_cc) 
			VALUES (NULL, :nomfichier, :typefichier,:dateof_publication, :lesson_level, :descriptionfichier, :uploadfichier,:filepic, :id_cc)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nomfichier' => $files->getnomfichier(),
					'typefichier' => $files-> gettypefichier(),
					'dateof_publication' => $files->getdateof_publication(),
					'lesson_level' => $files->getlesson_level(),
					'descriptionfichier' => $files->getdescriptionfichier(),
					'uploadfichier' => $files->getuploadfichier(),
					'filepic' => $files->getfilepic(),
					'id_cc' => $files->getid_cc()
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererfiles($idfichier){
			$sql="SELECT * from tabfiles where idfichier=$idfichier";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$files=$query->fetch();
				return $files;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierfiles($files, $idfichier){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE tabfiles SET  
					nomfichier= :nomfichier,
                    typefichier= :typefichier, 
                    dateof_publication= :dateof_publication,
                    lesson_level= :lesson_level,
                    descriptionfichier= :descriptionfichier,
                    uploadfichier= :uploadfichier,
					filepic= :filepic,
					id_cc= :id_cc
					WHERE idfichier= :idfichier'
				);
				$query -> bindValue(':idfichier',$idfichier);
				$query->execute([
					'idfichier' => $idfichier,
					'nomfichier' => $files->getnomfichier(),
					 'typefichier' => $files->gettypefichier(),
					'dateof_publication' => $files->getdateof_publication(),
					'lesson_level' => $files->getlesson_level(),
					'descriptionfichier' => $files->getdescriptionfichier(),
					'uploadfichier' => $files->getuploadfichier(),
					'filepic' => $files->getfilepic(),
					 'id_cc' => $files->getid_cc()
					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function trouverfiles($id){
			$sql="SELECT * from tabfiles where id_cc= $id";
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