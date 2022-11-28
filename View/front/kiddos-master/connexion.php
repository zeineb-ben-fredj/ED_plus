<?php
session_start();
// include_once 'C:\xampp\htdocs\WEB\Model\utilisateur.php';
include_once 'C:\xampp\htdocs\WEB\Controller\utilisateurc.php';
$message="";
$utilisateurC = new utilisateurC();
if (isset($_GET["Cin"]) &&
    isset($_GET["Motpasse"])) {
    if (!empty($_GET["Cin"]) &&
        !empty($_GET["Motpasse"]))
    {   $message=$utilisateurC->connexionUser($_GET["Cin"],$_GET["Motpasse"]);
         $_SESSION['e'] = $_GET["Cin"];// on stocke dans le tableau une colonne ayant comme nom "e",
        //  avec l'email à l'intérieur
        if($message!='Cin ou le mot de passe est incorrect'){
           header('Location:ProfileUser.php');}
        else{
            $message='Cin ou le mot de passe est incorrect';
        }}
    else
        $message = "Missing information";}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ED+ Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!--===============================================================================================-->
<link rel="icon" href="favicon.png" />
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
		
			<div class="wrap-login100">
			
				<div class="login100-pic js-tilt" data-tilt>
				<img src="logo_.png" width="210" height="190">
				</div>

				<form  action="" methode="GET" onsubmit= "return ajouter(event)" >
				<div class="message">
      <?php if($message!="") { echo $message; } ?>
    </div>
				
	
					<span class="login100-form-title">
						Sign In				</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid Email is required: z">
						<input class="input100" type="number" name="Cin" placeholder="Cin" id="Cin" onKeyUp=" numBer()">
						<p id="errorNBM" class="error"></p>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					

					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="Motpasse" placeholder="Motpasse" id ="Motpasse" onKeyUp=" pas()">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						<p id="errorP" class="error"></p>

					</div>
					<div class="g-recaptcha" data-sitekey="6LdhkY0dAAAAABoJW1wr73D6gcPbq799wfM4HDX3"></div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn " type="submit" name ="sumbit" value="sumbit">
							Connectez
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Oublié
						</span>
						<a class="txt2" href="adem2.php">
							Nom d'utilisateur  / Mot passe?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="ajouterutilisateur.php">
							CRÉER UN COMPTE
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
					<script>
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
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>

</body>
</html>