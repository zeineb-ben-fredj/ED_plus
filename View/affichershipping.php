<?php
	include '../Controller/shippingC.php';
	$shippingC=new shippingC();
	$listeshipping=$shippingC->affichershipping(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajoutershipping.php">Add Shipping</a></button>
		<center><h1>shipping list</h1></center>
		<table border="1" align="center">
			<tr>
				<th>id de livraison</th>
				<th>reference de la commande</th>
				<th>Date de livraison</th>
				<th>Adresse de livraison</th>
				
			</tr>
			<?php
				foreach($listeshipping as $shipping){
			?>
			<tr>
				<td><?php echo $shipping['id_shipping']; ?></td>
				<td><?php echo $shipping['ref_cmd']; ?></td>
				<td><?php echo $shipping['Date_livr']; ?></td>
				<td><?php echo $shipping['Adr_livr']; ?></td>
				
				<td>
					<form method="POST" action="modifiershipping.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $shipping['id_shipping']; ?> name="id_shipping">
					</form>
				</td>
				<td>
					<a href="supprimershipping.php?id_shipping=<?php echo $shipping['id_shipping']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
