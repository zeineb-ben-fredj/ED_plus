<?php
    include_once '../Model/orders.php';
    include_once '../Controller/ordersC.php';

    $error = "";

    // create adherent
    $orders = null;

    // create an instance of the controller
    $ordersC = new ordersC();
    if (
        isset($_POST["ref_cmd"]) &&
		isset($_POST["Date_conf"]) &&
        isset($_POST["montant_cmd"]) && 
        isset($_POST["mode_paiement"]) && 
        isset($_POST["etat"]) && 
        isset($_POST["Date_realisation"])
    ) {
        if (
            !empty($_POST["ref_cmd"]) && 
			!empty($_POST["Date_conf"]) &&
            !empty($_POST["montant_cmd"]) && 
            !empty($_POST["mode_paiement"]) && 
            !empty($_POST["etat"]) && 
            !empty($_POST["Date_realisation"])
        ) {
            $orders = new orders(
                $_POST['ref_cmd'],
				$_POST['Date_conf'],
                $_POST['montant_cmd'],
                $_POST['mode_paiement'],
                $_POST['etat'],
                $_POST['Date_realisation']
            );
            $ordersC->ajouterorders($orders);
            header('Location:afficherordres.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherorders.php">Return to orders list</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="ref_cmd">cmd ref:
                        </label>
                    </td>
                    <td><input type="number" name="ref_cmd" id="ref-cmd" ></td>
                </tr>
				<tr>
                    <td>
                        <label for="Date_conf">cmd confirmation date:
                        </label>
                    </td>
                    <td><input type="date" name="Date_conf" id="Date_conf" ></td>
                </tr>

                <tr>
                    <td>
                        <label for="montant_cmd">montant à payer:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="montant_cmd" id="montant_cmd">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="mode_paiement">mode de paiement:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="mode_paiement" id="mode_paiement" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="etat">etat:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="etat" id="etat" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Date_realisation">date de realisation:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="Date_realisation" id="Date_realisation" >
                    </td>
                </tr>              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html> -->