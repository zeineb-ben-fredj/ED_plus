<?php
    include_once '../Model/utilisateur.php';
    include_once '../Controller/utilisateurc.php';

    $error = "";
        
    
    $utilisateur = null;

    // create an instance of the controller
    $utilisateurC = new utilisateurC();
    if (
        isset($_GET["Nom"]) &&
        isset($_GET["Prenom"]) &&		
        isset($_GET["Cin"]) &&
        isset($_GET["Daten"]) && 
        isset($_GET["Type1"]) && 
        isset($_GET["Email"]) &&
        isset($_GET["Tel"]) &&
        isset($_GET["Motpasse"]) 
    ) {
        if (
            !empty($_GET["Nom"]) && 
            !empty($_GET["Prenom"]) &&
            !empty($_GET["Cin"]) && 
            !empty($_GET["Daten"]) && 
            !empty($_GET["Type1"]) && 
            !empty($_GET["Email"])&&
            !empty($_GET["Tel"]) &&
            !empty($_GET["Motpasse"]) 
    
        
            )
            {
                $utilisateur= new utilisateur (
                    $_GET["Nom"],
                    $_GET["Prenom"],
                    $_GET["Cin"] ,
                    $_GET["Daten"], 
                    $_GET["Type1"] ,
                    $_GET["Email"],
                    $_GET["Tel"],
                    $_GET["Motpasse"]

                );
                $utilisateurC->modifierutilisateur($utilisateur, $_GET["Cin"]);
            header('Location:datatables.php');   
        }
        else
            $error = "Missing information";
    }    
    ?>
<html lang="en">
<head>
    <title>modifier utilisateur</title>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <script src="verif.js"></script>
</head>
    <body>

        <button><a href="datatables.php">Retour à la liste des utilisateur </a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_GET['Cin'])){
                
				$utilisateur = $utilisateurC->recupererutilisateur($_GET['Cin']);
				
		?>
<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">        
        <form action="" method="GET" onsubmit= "return ajouter(event)">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label class="input--style-3"  for="Nom">Nom:
                        </label>
                    </td>
                    <td><input class="input--style-3" type="text" name="Nom" id="Nom" value="<?php echo $utilisateur['Nom']; ?>" maxlength="20" onKeyUp=" verif()" >
                    <p id="errorT" class="error"></p>

                </td>

                </tr>
				<tr>
                    <td>
                        <label class="input--style-3"  for="Prenom">Prenom:
                        </label>
                    </td>
                    <td><input class="input--style-3"  type="text" name="Prenom" id="Prenom" value="<?php echo $utilisateur['Prenom']; ?>" maxlength="20" onKeyUp=" verifPrenom()">
                    <p id="errorC" class="error"></p>

                </td>
                </tr>
                <tr>
                    <td>
                        <label class="input--style-3"  for="Cin"> Cin:
                        </label>
                    </td>
                    <td>
                        <input class="input--style-3"  type="number" name="Cin" id="Cin" value="<?php echo $utilisateur['Cin']; ?>"  onKeyUp=" numBer()">
                        <p id="errorNBM" class="error"></p>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="input--style-3"  for="Daten">Daten:
                        </label>
                    </td>
                    <td>
                        <input  class="input--style-3" type="date" name="Daten" id="Daten" value="<?php echo $utilisateur['Daten']; ?>" onKeyUp=" saisirdate_publication()">
                        <p id="errorDP" class="error"></p>

                    </td>
                </tr>    
                <tr>
                    <td>
                        <label class="input--style-3"  for="Type1">Type:
                        </label>
                    </td>
                    <td>
                        <input class="input--style-3"  type="text" name="Type1" id="Type1" value="<?php echo $utilisateur['Type1']; ?>">
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label class="input--style-3"  for="Email">Email:
                        </label>
                    </td>
                    <td>
                        <input class="input--style-3"  type="email" name="Email" id="Email" value="<?php echo $utilisateur['Email']; ?>"  onKeyUp=" saisirMail()">
                        <p id="errorMR" class="error"></p>

                    </td>
                </tr> 
                <tr>
                    <td>
                        <label  class="input--style-3" for="Tel">Tel:
+                        </label>
                    </td>
                    <td>
                        <input class="input--style-3"  type="number" name="Tel" id="Tel" value="<?php echo $utilisateur['Tel']; ?>"  onKeyUp=" numTel()">
                        <p id="errorTel" class="error"></p>

                    </td>
                </tr> 
                <tr>
                    <td>
                        <label class="input--style-3"  for="Motpasse">Motpasse:
                        </label>
                    </td>
                    <td>
                        <input class="input--style-3"  type="password" name="Motpasse" id="Motpasse" value="<?php echo $utilisateur['Motpasse']; ?>"  onKeyUp=" pas()">
                        <p id="errorP" class="error"></p>

                    </td>
                </tr> 
                 

                          

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"  name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
            <script >function verif(){

var utilisateur=document.getElementById("Nom").value;
var regex = /^[A-Za-z]+$/;


if (!(regex.test(utilisateur))) {
    document.getElementById("errorT").textContent = "Nom has to be composed of letters only!";
    document.getElementById("errorT").style.color = "red";
    return 0;
} else if (utilisateur[0] == utilisateur[0].toLowerCase()) {
    document.getElementById("errorT").textContent = "Nom has to start by a capital letter!";
    document.getElementById("errorT").style.color = "red";
    return 0;
} else {
    document.getElementById("errorT").textContent = "Nom Verified";
    document.getElementById("errorT").style.color = "green";
    return 1;
}
}
function verifPrenom(){

var utilisateur=document.getElementById("Prenom").value;
var regex = /^[A-Za-z]+$/;


if (!(regex.test(utilisateur))) {
    document.getElementById("errorC").textContent = "Prenom has to be composed of letters only!";
    document.getElementById("errorC").style.color = "red";
    return 0;
} else if (utilisateur[0] == utilisateur[0].toLowerCase()) {
    document.getElementById("errorC").textContent = "Prenom has to start by a capital letter!";
    document.getElementById("errorC").style.color = "red";
    return 0;
} else {
    document.getElementById("errorC").textContent = "Prenom Verified";
    document.getElementById("errorC").style.color = "green";
    return 1;
}
}
function saisirdate_publication() {
    var DateFond = document.getElementById('Daten').value;
    var dat=new Date();

    if (new Date(DateFond).getTime() >= dat.getTime())
    {
        document.getElementById("errorDP").textContent = "date superiour";
        document.getElementById("errorDP").style.color = "red";
        return 0;
    }
    else
    {
        document.getElementById("errorDP").textContent = "date verified";
        document.getElementById("errorDP").style.color="green";
        return 1;
    }
}
function numBer()
{
    var nbm = document.getElementById("Cin").value;

    if (nbm < 1000000  ) {
        document.getElementById("errorNBM").textContent = "Cin doit etre 8 chiffres ";
        document.getElementById("errorNBM").style.color = "red";
    }
    else  if (nbm > 99999999   ) {
        document.getElementById("errorNBM").textContent = "Cin doit etre 8 chiffres ";
        document.getElementById("errorNBM").style.color = "red";
    }
    else
    {
        document.getElementById("errorNBM").textContent = "Cin Verified";
        document.getElementById("errorNBM").style.color = "green";
            return 1;
    
        }
    }
    function numTel()
{
    var nbm = document.getElementById("Tel").value;

    if (nbm< 1000000 ) {
        document.getElementById("errorTel").textContent = "Tel doit etre 8 chiffres ";
        document.getElementById("errorTel").style.color = "red";
    }
    else  if (nbm > 99999999   ) {
        document.getElementById("errorTel").textContent = "Tel doit etre 8 chiffres ";
        document.getElementById("errorTel").style.color = "red";
    }
else
    {
        document.getElementById("errorTel").textContent = "Tel Verified";
        document.getElementById("errorTel").style.color = "green";
            return 1;
    }
}
    function saisirMail() {

var mail = document.getElementById("Email").value;
var x=mail.length-10;
var terminaison=mail.substring(x,mail.length);
if (!(terminaison==="@esprit.tn"))
{
    document.getElementById("errorMR").textContent = "mail non valide";
    document.getElementById("errorMR").style.color = "red";
    return 0;
}
else
{
    document.getElementById("errorMR").textContent = "mail Verified";
    document.getElementById("errorMR").style.color = "green";
    return 1;



}
    }
    function pas(){

var utilisateur=document.getElementById("Motpasse").value;
var regex = /^[A-Za-z]+$/;


if (!(regex.test(utilisateur))) {
    document.getElementById("errorP").textContent = "Motpasse Verified";
    document.getElementById("errorP").style.color = "green";
    return 0;
} else if (utilisateur[0] == utilisateur[0].toLowerCase()) {
    document.getElementById("errorP").textContent = "Motpasse has to start by a capital letter!";
    document.getElementById("errorP").style.color = "red";
    return 0;
} else {
    document.getElementById("errorP").textContent = "Motpasse Verified";
    document.getElementById("errorP").style.color = "green";
    return 1;
}
}
function ajouter(event) {
        if (verif() == 0 )
            event.preventDefault();
    }
</script>
        </form>
		<?php
		}
		?>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>

