function saisirmnt() {
    var montant_cmd = document.getElementById('montant_cmd').value;


    if (montant_cmd<=0) {
        document.getElementById("errorMC").textContent = "le montant doit être sup à 0!";
        document.getElementById("errorMC").style.color = "red";
        return 0;
    } 
    else {
        document.getElementById("errorMC").textContent = "Price Verified";
        document.getElementById("errorMC").style.color = "green";
        return 1;
    }
}
// function saisiridprod() {
//     var method = document.getElementById("id_prod").selectedIndex;

//     if (method == 0) {
//         document.getElementById('errorIP').textContent= "Please enter the product reference properly";
//         document.getElementById('errorIP').style.color="red";
//         return 0;
//     }
//     else
//     {
//       document.getElementById("errorIP").textContent = "Product reference verified"; 
//       document.getElementById('errorIP').style.color="green"; 
//       return 1;
//     }
        
// }
function saisirqt() {
    var qtt_prod = document.getElementById('qtt_prod').value;


    if (qtt_prod<=0) {
        document.getElementById("errorQP").textContent = "Quantity has to be superiour to 0";
        document.getElementById("errorQP").style.color = "red";
        return 0;
    } 
    else {
        document.getElementById("errorQP").textContent = "Qunatity Verified";
        document.getElementById("errorQP").style.color = "green";
        return 1;
    }
}
function saisirpay() {
    var method = document.getElementById("mode_paiement").selectedIndex;

    if (method == 0) {
        document.getElementById('errorPM').textContent= "Please choose the payment method properly";
        document.getElementById('errorPM').style.color="red";
        return 0;
    }
    else
    {
      document.getElementById("errorPM").textContent = "Payment method verified"; 
      document.getElementById('errorPM').style.color="green"; 
      return 1;
    }
        
}

function saisirState() {
    var state = document.getElementById("etat").selectedIndex;


    if (state == 0)
    {
        document.getElementById('errorST').textContent="Please choose the state of the order properly";
        document.getElementById('errorST').style.color = "red";
        return 0;
    }
    else
    {
        document.getElementById("errorST").textContent = "state verified";
        document.getElementById("errorST").style.color = "green";
        return 1;
    }
}


function saisirDate_conf() {
    var Date_conf = document.getElementById('Date_conf').value;
    var dat=new Date();

    if  (new Date(Date_conf).getDate() != dat.getDate() ) 
    {
        document.getElementById("errorCD").textContent = "You have to put today's date";
        document.getElementById("errorCD").style.color="red";
        return 0; 
    }
   
    else
    {
       
        document.getElementById("errorCD").textContent = "Date Verified ";
        document.getElementById("errorCD").style.color="green";
        return 1;
    }
   
}

function saisirDate_realisation() {
    var Date_realisation = document.getElementById('Date_realisation').value;
    var dat=new Date();

    if (new Date(Date_realisation).getTime() <= dat.getTime())
    {
        document.getElementById("errorPD").textContent = "date inferieur";
        document.getElementById("errorPD").style.color = "red";
        return 0;
    }
    else
    {
        document.getElementById("errorPD").textContent = "date verifiée";
        document.getElementById("errorPD").style.color="green";
        return 1;
    }
}


function ajout(event) {
    if (saisirmnt() == 0 || saisirpay() == 0 || saisirState() == 0 ||
    saisirDate_conf() == 0 || saisirDate_realisation() == 0 || saisirqt() == 0)
        event.preventDefault();
}