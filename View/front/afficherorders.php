<?php
	include '../Controller/ordersC.php';
	$ordersC=new ordersC();
	$listeorders=$ordersC->afficherorders(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajouterorders.php">Add order</a></button>
		<center><h1>Orders list</h1></center>
		<table border="1" align="center">
			<tr>
				<th>ref</th>
				<th>date de confirmation de la commande</th>
				<th>montant à payer</th>
				<th>mode de paiement</th>
				<th>etat de la commande</th>
				<th>date de réalistaion</th>
			</tr>
			<?php
				foreach($listeorders as $orders){
			?>
			<tr>
				<td><?php echo $orders['ref_cmd']; ?></td>
				<td><?php echo $orders['Date_conf']; ?></td>
				<td><?php echo $orders['montant_cmd']; ?></td>
				<td><?php echo $orders['mode_paiement']; ?></td>
				<td><?php echo $orders['etat']; ?></td>
				<td><?php echo $orders['Date_realisation']; ?></td>

				<td>
					<form method="POST" action="modifierorders.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $orders['ref_cmd']; ?> name="ref_cmd">
					</form>
				</td>
				<td>
					<a href="supprimerorders.php?ref_cmd=<?php echo $orders['ref_cmd']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
