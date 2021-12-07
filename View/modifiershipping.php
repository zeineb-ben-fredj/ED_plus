<?php
    include_once '../Model/shipping.php';
    include_once '../Controller/shippingC.php';

    $error = "";

    // create crud
    $shipping = null;

    // create an instance of the controller
    $shippingC = new shippingC();
    if (
        isset($_POST["ref_cmd"]) && 
        isset($_POST["Date_livr"]) && 
        isset($_POST["Adr_livr"]) 
        
    ) {
        if (
            !empty($_POST["ref_cmd"]) && 
            !empty($_POST["Date_livr"]) && 
            !empty($_POST["Adr_livr"]) 
        ) {
            $shipping = new shipping(
                $_POST['id_shipping'],
				$_POST['ref_cmd'],
                $_POST['Date_livr'],
                $_POST['Adr_livr']
            );
            $shippingC->modifiershipping($shipping, $_POST["id_shipping"]);
            header('Location:db_shipping.php');
        }
        else
            $error = "Missing information";
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
    <script type="text/javascript" src="verifiershipping.js">  </script>
  
</head>
    <body>
        <button><a href="db_shipping.php">Return to shipping list</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['id_shipping'])){
				$shipping = $shippingC->recuperershipping($_POST['id_shipping']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id_shipping">id livr:
                        </label>
                    </td>
                    <td><input type="number" name="id_shipping" id="id_shipping" value="<?php echo $shipping['id_shipping']; ?>" >
                </td>
                </tr>
				<tr>
                    <td>
                        <label for="ref_cmd">reference commande:
                        </label>
                    </td>
                    <td><input  type="number" name="ref_cmd" id="ref_cmd" value="<?php echo $shipping['ref_cmd']; ?>" >
                    
                </td>
                </tr>
                <tr>
                    <td>
                        <label for="Date_livr">Date de livraison
                        </label>
                    </td>
                    <td>
                        <input onblur="saisirDate_livr()" type="date" name="Date_livr" id="Date_livr" value="<?php echo $shipping['Date_livr']; ?>">
                        <p id="errorDL" class="error"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="Adr_livr">Adresse de livraison
                        </label>
                    </td>
                    <td>
                        <input onblur="saisirAdr_livr()" type="text" name="Adr_livr" id="Adr_livr" value="<?php echo $shipping['Adr_livr']; ?>">
                        <p id="errorAL" class="error"></p>
                    </td>
                </tr>    
                <tr>
                    <td></td>
                    <td>
                        <input  type="submit" name="Modifier" value="Modifier" onclick="ajout(event)"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
    </body>
</html>