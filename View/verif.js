function verif(){

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
        document.getElementById("errorT").textContent = "Category Verified";
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
        document.getElementById("errorC").textContent = "Name has to start by a capital letter!";
        document.getElementById("errorC").style.color = "red";
        return 0;
    } else {
        document.getElementById("errorC").textContent = "Prenom Verified";
        document.getElementById("errorC").style.color = "green";
        return 1;
    }
  }
 
  function saisirtitrelivre(){

    var livre=document.getElementById("titre_livre").value;


 if (livre[0] == livre[0].toLowerCase()) {
        document.getElementById("errorT").textContent = "Title has to start by a capital letter!";
        document.getElementById("errorT").style.color = "red";
        return 0;
    } else {
        document.getElementById("errorT").textContent = "Title Verified";
        document.getElementById("errorT").style.color = "green";
        return 1;
    }
  }
  function saisirauteur(){

    var livre=document.getElementById("nom_auteur").value;


 if (livre[0] == livre[0].toLowerCase()) {
        document.getElementById("errorA").textContent = "Name has to start by a capital letter!";
        document.getElementById("errorA").style.color = "red";
        return 0;
    } else {
        document.getElementById("errorA").textContent = "Auteur Verified";
        document.getElementById("errorA").style.color = "green";
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
    function ajouter(event) {
        if (verif() == 0 )
            event.preventDefault();
    }
