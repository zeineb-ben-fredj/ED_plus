<?php
    
    // include_once 'C:\xampp\htdocs\WEB\Model\utilisateur.php';
    include_once 'C:\xampp\htdocs\WEB\Controller\utilisateurc.php';

    $error = "";

    // create adherent
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
        ){$utilisateur =new utilisateur(
            $_GET["Nom"],
            $_GET["Prenom"],
            $_GET["Cin"],
            $_GET["Daten"],
            $_GET["Type1"],
            $_GET["Email"],
            $_GET["Tel"],
            $_GET["Motpasse"] 
    
            );
            $utilisateurC->ajouterutilisateur($utilisateur);
            header('Location:connexion.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Sign Up</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="icon" href="favicon.png" />
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
   
</head>
    <body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Sign Up</h2>
                    <a href="connexion.php"></a>
                    <form method="GET" action="" onsubmit= "return ajouter(event)"
>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="Nom" id= "Nom"
                            required 
       minlength="4" maxlength="8" size="10" onKeyUp=" verif()"
>
<p id="errorT" class="error"></p>

                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Last name" name="Prenom" id="Prenom"
                            required
       minlength="4" maxlength="8" size="10" onKeyUp=" verifPrenom()">
       <p id="errorC" class="error"></p>

                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="number" placeholder="CIN" name="Cin" id="Cin" required maxlength="8"
                            onKeyUp=" numBer()"
>
<p id="errorNBM" class="error"></p>

                        </div>

                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="date" placeholder="Date of birth" name="Daten" id="Daten"
                            required
                            onKeyUp=" saisirdate_publication()">
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                            <p id="errorDP" class="error"></p>

                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="Type1" id="Type1">
                                    <option disabled="disabled" selected="selected" class="form-control" required>Type</option>
                                    <option>Parent</option>
                                    <option>Eleve</option>
                                    <option>Client</option>
                                </select> 
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="Email" id="Email"  onKeyUp=" saisirMail()"
                             data-centralpay="firstName" type="text" name="order[firstName]" autocomplete="off"
                                         data-form="card-user" class="form-control" placeholder="First name" required="required" style=" height: 50px;" />
                                         <p id="errorMR" class="error"></p>

                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="number" placeholder="Tel" name="Tel" id="Tel" required
                            maxlength="8"
                            onKeyUp=" numTel()"
>
<p id="errorTel" class="error"></p>
                        </div>
                    
                    <div class="input-group">
                        <input type="password"  class="input--style-3" name="Motpasse" id="Motpasse" placeholder="Password"
                        required     onKeyUp=" pas()"

       minlength="7"  size="10"/>
       <p id="errorP" class="error"></p>
                    </div>
                   
                        <div class="p-t-10">

                            <button class="btn btn--pill btn--green" name="Enregistrer" type="submit" value="Envoyer">Submit</button>
                        </div>
                        <div class="p-t-10">
                        <p class="loginhere">
                        </p>                        
                        </div>
                    </div>
                    <script >function verif(){

var utilisateur=document.getElementById("Nom").value;
var regex = /^[A-Za-z]+$/;


if (!(regex.test(utilisateur))) {
    document.getElementById("errorT").textContent = "Name has to be composed of letters only!";
    document.getElementById("errorT").style.color = "red";
    return 0;
} else if (utilisateur[0] == utilisateur[0].toLowerCase()) {
    document.getElementById("errorT").textContent = "Name has to start by a capital letter!";
    document.getElementById("errorT").style.color = "red";
    return 0;
} else {
    document.getElementById("errorT").textContent = "Name Verified";
    document.getElementById("errorT").style.color = "green";
    return 1;
}
}
function verifPrenom(){

var utilisateur=document.getElementById("Prenom").value;
var regex = /^[A-Za-z]+$/;


if (!(regex.test(utilisateur))) {
    document.getElementById("errorC").textContent = "Last name has to be composed of letters only!";
    document.getElementById("errorC").style.color = "red";
    return 0;
} else if (utilisateur[0] == utilisateur[0].toLowerCase()) {
    document.getElementById("errorC").textContent = "Last name has to start by a capital letter!";
    document.getElementById("errorC").style.color = "red";
    return 0;
} else {
    document.getElementById("errorC").textContent = "Last name Verified";
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
        document.getElementById("errorNBM").textContent = "Cin has to be 8 numbers ";
        document.getElementById("errorNBM").style.color = "red";
    }
    else  if (nbm > 99999999   ) {
        document.getElementById("errorNBM").textContent = "Cin has to be 8 numbers ";
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
        document.getElementById("errorTel").textContent = "Tel has to be 8 numbers ";
        document.getElementById("errorTel").style.color = "red";
    }
    else  if (nbm > 99999999   ) {
        document.getElementById("errorTel").textContent = "Tel has to be 8 numbers ";
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
if (!(terminaison==="@gmail.com"))
{
    document.getElementById("errorMR").textContent = "mail not valid";
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
    document.getElementById("errorP").textContent = "MPassword Verified";
    document.getElementById("errorP").style.color = "green";
    return 0;
} else if (utilisateur[0] == utilisateur[0].toLowerCase()) {
    document.getElementById("errorP").textContent = "Password has to start by a capital letter!";
    document.getElementById("errorP").style.color = "red";
    return 0;
} else {
    document.getElementById("errorP").textContent = "Password Verified";
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
    </div>
 
    </body>
</html>