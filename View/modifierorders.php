<?php
    include_once '../Model/orders.php';
    include_once '../Controller/ordersC.php';

    $error = "";

    // create crud
    $orders = null;

    // create an instance of the controller
    $ordersC = new ordersC();
    if (
		isset($_POST["Date_conf"]) &&
        isset($_POST["montant_cmd"]) && 
        isset($_POST["mode_paiement"]) && 
        isset($_POST["etat"]) 
       
    ) {
        if (
			!empty($_POST["Date_conf"]) && //'
            !empty($_POST["montant_cmd"]) && 
            !empty($_POST["mode_paiement"]) && 
            !empty($_POST["etat"])  
            
        ) {
            $orders = new orders(
                $_POST['ref_cmd'],
				$_POST['Date_conf'],
                $_POST['montant_cmd'],
                $_POST['mode_paiement'],
                $_POST['etat']
               
            );
            $ordersC->modifierorders($orders, $_POST["ref_cmd"]);
            header('Location:db_orders2.php');
        }
        else
            $error = "Missing information";
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Modification</title>
    <script type="text/javascript" src="verifier1.js">  </script>
    <style>
 body {
    display: block;
  width: 100%;
  height: calc(2.25rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  
       
      }
</style>
</head>
    <body>
        <button><a href="db_orders2.php">Return to orders list</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['ref_cmd'])){
				$orders = $ordersC->recupererorders($_POST['ref_cmd']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="ref_cmd">cmd ref:
                        </label>
                    </td>
                    <td><input type="number" name="ref_cmd" id="ref_cmd" value="<?php echo $orders['ref_cmd']; ?>" >
                </td>
                </tr>
				<tr>
                    <td>
                        <label for="Date_conf">date conf:
                        </label>
                    </td>
                    <td><input onblur="saisirDate_conf()" type="date" name="Date_conf" id="Date_conf" value="<?php echo $orders['Date_conf']; ?>" >
                    <p id="errorCD" class="error"></p>
                </td>
                </tr>
                <tr>
                    <td>
                        <label for="montant_cmd">montant:
                        </label>
                    </td>
                    <td>
                        <input onblur="saisirmnt()" type="number" name="montant_cmd" id="montant_cmd" value="<?php echo $orders['montant_cmd']; ?>">
                        <p id="errorMC" class="error"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="mode_paiement">mode de paiement:
                        </label>
                    </td>
                    <td>
                    <select onblur="saisirpay()" name="mode_paiement" id="mode_paiement"  class="form-control"  >
             			  <option value="select">Select</option>
               						 <option value="Online">Online</option>
               								 <option value="Shipping">Shipping</option>
                															
            									</select><br>
									<p id="errorPM" class="error"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="etat">etat:
                        </label>
                    </td>
                    <td>
                    <select onblur="saisirState()" name="etat" id="etat"  class="form-control"  >
             		  <option value="select">Select</option>
               				 <option value="Effectue">Effectue</option>
               		 <option value="Non Effectue">Non Effectue</option>
                															
            			</select><br>
					<p id="errorST" class="error"></p>
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