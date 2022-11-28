<!DOCTYPE html>
<html>

<?php 
include_once 'C:\xampp\htdocs\WEB\config.php';
class servic{
	function nbpage()
		{
			$db = config::getConnexion();
			$sql = 'SELECT COUNT(*) AS nb_articles FROM produit;';
			$query = $db->prepare($sql);
			$query->execute();
			$result = $query->fetch();
			$nbArticles = (int) $result['nb_articles'];
			$pages = ceil($nbArticles / 3);
			return $pages;
			
		}
	
	function afficherproduit(){
		if(isset($_GET['page']) && !empty($_GET['page'])){
			$currentPage = (int) strip_tags($_GET['page']);
		}else{
			$currentPage = 1;
		}
		$sql = 'SELECT COUNT(*) AS nb_articles FROM produit ;';
		$db=config::getConnexion();
		$query = $db->prepare($sql);
		$query->execute();
		$result = $query->fetch();
		$nbArticles = (int) $result['nb_articles'];
		$parPage = 3;
		$pages = ceil($nbArticles / $parPage);
		$premier = ($currentPage * $parPage) - $parPage;
		$sql = 'SELECT * FROM produit LIMIT :premier, :parpage;';
		$query = $db->prepare($sql);
		$query->bindValue(':premier', $premier, PDO::PARAM_INT);
		$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);
		$query->execute();
		$articles = $query->fetchAll(PDO::FETCH_ASSOC);
		return $articles;
		// $sql="SELECT * FROM enclos";
		// $db=config::getConnexion();
		// try{
		// 	$liste=$db->query($sql);
		// 	return $liste;
		// }
		// catch(Exception $e){
		// 	die("erreur:".$e->getMessage());
		// }
	}
// 	function afficherproduit(){
// 		$sql="SELECT * FROM produit

// 		";
// 		$db=config::getConnexion();
// 		try{
// 			$liste=$db->query($sql);
// 			return $liste;
// 		}
// 		catch(Exception $e){
// 			die("erreur:".$e->getMessage());
// 		}
// 	}
// 	   function supprimerproduit($numadh){
//  		$sql="DELETE  FROM produit WHERE `id`= $numadh ";
// 		$db=config::getConnexion();
// 		try{
// 			$liste=$db->query($sql);

//         }catch(Exception $e){
// 			die("erreur:".$e->getMessage());
//    }
// }

 function Modifierser($ser)
 {
 $sqlc= "UPDATE `produit` SET prix=:prix, date=:dat WHERE id=:id  ";
 $db=config::getConnexion();
 try{ $recipesStatement = $db->prepare($sqlc);
 	$recipesStatement->execute([ 'prix' =>$ser->getprix(),
	 							 'dat' =>$ser->getdate(), 		            
 					              'id' =>$ser->getid(),
 		         ]);
 }
  catch(Exception $e){ 
	
 			 die("erreur:".$e->getMessage());
 }

 }
 function supprimerproduit($ser){
	$sql="DELETE FROM produit WHERE id=:id";
	$db = config::getConnexion();
	$req=$db->prepare($sql);
	$req->bindValue(':id', $ser);
	try{
		$req->execute();
	}
	catch(Exception $e){
		die('Erreur:'. $e->getMeesage());
	}
}

 function Ajouter($ser){
 $sql= "INSERT INTO `produit` VALUES (:id, :nom,:image,:prix,:id_cat ,:date,:reference,:description,:note)";
 $db=config::getConnexion();
 try{ $recipesStatement = $db->prepare($sql);
 	$recipesStatement->execute([ 'id'=>$ser->getid(),
 		            'nom' =>$ser->getnom(),
 					'image'=>$ser->getimage(),
 		            'prix'=>$ser->getprix(),
 		            'id_cat'=>$ser->getid_cat(),
 		            'date'=>$ser->getdate(),
					 'reference'=>$ser->getreference(),
					 'description'=>$ser->getdescription(),
					 'note'=>$ser->getnote(),
		    

 	]);
  }
  catch(Exception $e){ 
 	
 			 die("erreur:".$e->getMessage());

 }

 }
 function affichercategorie1(){
	$sql="SELECT * FROM categorie";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch(Exception $e){
	die('Erreur:'. $e->getMessage());
	}
}
 function trouverfiles($id){
	$sql="SELECT * from produit where id_cat= $id";
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
function trouverProd($id){
	$sql="SELECT * from produit where id= $id";
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
function recupererref($id){
	$sql="SELECT * from produit where id=$id";
	$db = config::getConnexion();
	try{
		$query=$db->prepare($sql);
		$query->execute();

		$sql1=$query->fetch();
		return $sql1;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}
 function recherche($search_value)
    {
        $sql="SELECT * FROM categorie where id like '$search_value' or libelle like  '%$search_value%' ";

        //global $db;
        $db =Config::getConnexion();

        try{
            $result=$db->query($sql);

            return $result;

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

 
function trierproduit()
{
	$sql = "SELECT * from produit ORDER BY prix DESC";
	$db = config::getConnexion();
	try {
		$req = $db->query($sql);
		return $req;
	} 
	catch (Exception $e)
	 {
		die('Erreur: ' . $e->getMessage());
	}



}

function affichercategorie(){
 	$sql="SELECT * FROM categorie

 	";
 	$db=config::getConnexion();
 	try{
 		$liste=$db->query($sql);
 		return $liste;
 	}
 	catch(Exception $e){
 		die("erreur:".$e->getMessage());
 	}
 }
   function supprimercategorie($numadh){
$sql="DELETE  FROM categorie WHERE `id`= $numadh ";
	$db=config::getConnexion();
	try{
		$liste=$db->query($sql);

	}catch(Exception $e){
		die("erreur:".$e->getMessage());
}
}

function Modifiercategorie($ser)
{
$sqlc= "UPDATE `categorie` SET libelle=:libelle WHERE id=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
$recipesStatement->execute([ 'libelle'=>$ser->getlibelle(),
				'id'=>$ser->getid(),
			 ]);
}
catch(Exception $e){ 
 
		 die("erreur:".$e->getMessage());
}

}

function Ajoutercategorie($ser){
$sql= "INSERT INTO `categorie` VALUES (:id, :libelle,:image)";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
$recipesStatement->execute([ 'id'=>$ser->getid(),
				'libelle' =>$ser->getlibelle(),
				'image'=>$ser->getimage(),



]);
}
catch(Exception $e){ 
 
		 die("erreur:".$e->getMessage());

}

}
}
?>
</html>