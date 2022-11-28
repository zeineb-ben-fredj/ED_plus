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
		function trouverfiles($id){
			$sql="SELECT * from orders where id_client= $id";
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
			$sql="SELECT * FROM orders ORDER BY Date_conf ASC";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function afficherordersDESC(){
			$sql="SELECT * FROM orders ORDER BY Date_conf DESC ";
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
			$sql="INSERT INTO orders (id_prod, id_client, qtt_prod, Date_conf,  montant_cmd, mode_paiement, etat) 
			VALUES (:id_prod, :id_client, :qtt_prod, CURDATE(), :montant_cmd, :mode_paiement, :etat)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					//  'ref_cmd' => $orders->getref(),
					//'Date_conf' => $orders-> getdateconf(),
					'id_prod' => $orders-> getidprod(),
					'id_client' => $orders-> getidclient(),
					'qtt_prod' => $orders-> getqttprod(),
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
		function recupererordersUser($ref_cmd){
			$sql="SELECT * from orders where id_client=$ref_cmd";
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
						id_prod= :id_prod,
						id_client= :id_client,
						qtt_prod= :qtt_prod,
						 Date_conf= :Date_conf, 
						montant_cmd= :montant_cmd,
						mode_paiement= :mode_paiement,
						etat= :etat
					WHERE ref_cmd= :ref_cmd'
				);
				$query->execute([
					'ref_cmd' => $orders->getref(),
					'id_prod' => $orders->getidprod(),
					'id_client' => $orders->getidclient(),
					'qtt_prod' => $orders->getqttprod(),
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