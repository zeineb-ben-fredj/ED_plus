<?php
	include 'C:/xampp/htdocs/WEB/config2.php';
	include_once 'C:/xampp/htdocs/WEB/Model/shipping.php';
	class shippingC {
		function affichershipping(){
			$sql="SELECT * FROM shipping";
			$db = config2::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function afficherNbshipping(){
			$sql="SELECT COUNT(*) FROM shipping";
			$db = config2::getConnexion();
			return $sql;
			// try{
			// 	$liste = $db->query($sql);
			// 	return $liste;
			// }
			// catch(Exception $e){
			// 	die('Erreur:'. $e->getMeesage());
			// }
		}
		function searchshipping($filterval){
			$sql="SELECT * FROM shipping WHERE CONCAT(id_shipping,ref_cmd,Date_livr,Adr_livr) LIKE '%$filterval%' ";
			$db = config2::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function affichershippingASC(){
			$sql="SELECT * FROM shipping ORDER BY Adr_livr";
			$db = config2::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function affichershippingDESC(){
			$sql="SELECT * FROM shipping ORDER BY Adr_livr DESC";
			$db = config2::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimershipping($id_shipping){
			$sql="DELETE FROM shipping WHERE id_shipping=:id_shipping";
			$db = config2::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_shipping', $id_shipping);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajoutershipping($shipping){
			$sql="INSERT INTO shipping (ref_cmd, Date_livr, Adr_livr) 
			VALUES (:ref_cmd, :Date_livr, :Adr_livr)";
			$db = config2::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					// 'id_shipping' => $shipping->getidshipping(),
					'ref_cmd' => $shipping-> getrefcmd(),
					'Date_livr' => $shipping->getdatelivr(),
					'Adr_livr' => $shipping->getadrlivr(),
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperershipping($id_shipping){
			$sql="SELECT * from shipping where id_shipping=$id_shipping";
			$db = config2::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$shipping=$query->fetch();
				return $shipping;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererref($ref_cmd){
			$sql="SELECT * from shipping where ref_cmd=$ref_cmd";
			$db = config2::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$ref_cmd=$query->fetch();
				return $ref_cmd;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifiershipping($shipping, $id_shipping){
			try {
				$db = config2::getConnexion();
				$query = $db->prepare(
					'UPDATE shipping SET  
						id_shipping= :id_shipping,
						ref_cmd= :ref_cmd, 
						Date_livr= :Date_livr,
						Adr_livr= :Adr_livr
					WHERE id_shipping= :id_shipping'
				);
				$query->execute([
					'id_shipping' => $shipping->getidshipping(),
					'ref_cmd' => $shipping-> getrefcmd(),
					'Date_livr' => $shipping->getdatelivr(),
					'Adr_livr' => $shipping->getadrlivr()
					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>