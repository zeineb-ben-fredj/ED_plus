<?php
	include 'C:/xampp/htdocs/WEB/config.php';
	include_once 'C:/xampp/htdocs/WEB/Model/orders.php';
	class ordersC {
		function afficherorders(){
			$sql="SELECT * FROM orders";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function afficherNborders(){
			$sql="SELECT COUNT(*) FROM orders";
			$db = config::getConnexion();
			try{
				$nbTotreq = $db->query('SELECT ref_cmd FROM orders');
				$nb=$nbTotreq -> rowCount();
				return $nb;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function afficherordersPagination($perPage,$firstOfPage){
			$sql="SELECT * FROM orders  LIMIT $firstOfPage,$perPage ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function afficherordersASC(){
			$sql="SELECT * FROM orders ORDER BY Date_conf ASC LIMIT $firstOfPage,$perPage";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function afficherordersDESC($perPage,$firstOfPage){
			$sql="SELECT * FROM orders ORDER BY Date_conf DESC LIMIT $firstOfPage,$perPage";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function searchorders($filterval,$firstOfPage,$perPage){
			$sql="SELECT * FROM orders WHERE CONCAT(ref_cmd,Date_conf,montant_cmd) LIKE '%$filterval%' LIMIT $firstOfPage,$perPage ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerorders($ref_cmd){
			$sql="DELETE FROM orders WHERE ref_cmd=:ref_cmd";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':ref_cmd', $ref_cmd);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		// function afficherordersASC(){
		// 	$sql="SELECT * FROM orders ORDER BY mode_paiement";
		// 	$db = config::getConnexion();
		// 	try{
		// 		$liste = $db->query($sql);
		// 		return $liste;
		// 	}
		// 	catch(Exception $e){
		// 		die('Erreur:'. $e->getMeesage());
		// 	}
		// }
	
		function ajouterorders($orders){
			$sql="INSERT INTO orders (Date_conf,  montant_cmd, mode_paiement, etat) 
			VALUES (CURDATE(),:montant_cmd, :mode_paiement, :etat)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					//  'ref_cmd' => $orders->getref(),
					//'Date_conf' => $orders-> getdateconf(),
					'montant_cmd' => $orders->getmontant(),
					'mode_paiement' => $orders->getmodep(),
					'etat' => $orders->getetat()
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererorders($ref_cmd){
			$sql="SELECT * from orders where ref_cmd=$ref_cmd";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$orders=$query->fetch();
				return $orders;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierorders($orders, $ref_cmd){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE orders SET  
						ref_cmd= :ref_cmd,
						 Date_conf= :Date_conf, 
						montant_cmd= :montant_cmd,
						mode_paiement= :mode_paiement,
						etat= :etat
					WHERE ref_cmd= :ref_cmd'
				);
				$query->execute([
					'ref_cmd' => $orders->getref(),
					 'Date_conf' => $orders->getdateconf(),
					'montant_cmd' => $orders->getmontant(),
					'mode_paiement' => $orders->getmodep(),
					'etat' => $orders->getetat()
					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>