<?PHP
	include "../controller/utilisateurC.php";

	$utilisateurC=new UtilisateurC();
	
	if (isset($_GET["Cin"])){
		$utilisateurC->supprimerutilisateur($_GET["Cin"]);
		header('Location:datatables.php');
	}

?>