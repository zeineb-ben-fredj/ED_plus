function saisirmnt() {
    var montant_cmd = document.getElementById('montant_cmd').value;


    if (montant_cmd<=0) {
        document.getElementById("errorMC").textContent = "The price needs to be superior to 0";
        document.getElementById("errorMC").style.color = "red";
        return 0;
    } 
    else {
        document.getElementById("errorMC").textContent = "price Verified";
        document.getElementById("errorMC").style.color = "green";
        return 1;
    }
}
function saisirqtt() {
    var montant_cmd = document.getElementById('quantity').value;


    if (montant_cmd<=0) {
        document.getElementById("errorQt").textContent = "Choose a verified quantity";
        document.getElementById("errorQt").style.color = "red";
        return 0;
    } 
    else {
        document.getElementById("errorQt").textContent = "quantity verified ";
        document.getElementById("errorQt").style.color = "green";
        return 1;
    }
}
function saisirE(){
    var mail=document.getElementById('adr_mail').value;
        c=mail.search("@");
    if (c==-1)
    {
    
        document.getElementById("errorE").textContent = "Enter Email properly";
        document.getElementById("errorE").style.color = "red";
        return 0;}
      else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) || (mail.search("gmail.com")==-1))
    {document.getElementById("errorE").textContent = "Enter email properly";
    document.getElementById("errorE").style.color = "red";
    return 0;}
    else {
        document.getElementById("errorE").textContent = "mail verified";
            document.getElementById("errorE").style.color = "green";
            return 1;
    }
    }

function saisirpay() {
    var method = document.getElementById("mode_paiement").selectedIndex;

    if (method == 0) {
        document.getElementById('errorPM').textContent= "Choose payment method";
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

function saisirProduct() {
    var product = document.getElementById("product").selectedIndex;


    if (product == 0)
    {
        document.getElementById('errorPr').textContent="Choose a product";
        document.getElementById('errorPr').style.color = "red";
        return 0;
    }
    else
    {
        document.getElementById("errorPr").textContent = "product verified";
        document.getElementById("errorPr").style.color = "green";
        return 1;
    }
}


// function saisirDate_conf() {
//     var Date_conf = document.getElementById('Date_conf').value;
//     var dat=new Date();

//     if  (new Date(Date_conf).getDate() != dat.getDate() ) 
//     {
//         document.getElementById("errorCD").textContent = "il faut mettre la date d'aujourd'hui";
//         document.getElementById("errorCD").style.color="red";
//         return 0; 
//     }
   
//     else
//     {
       
//         document.getElementById("errorCD").textContent = "verifier ";
//         document.getElementById("errorCD").style.color="green";
//         return 1;
//     }
   
// }

// function saisirDate_realisation() {
//     var Date_realisation = document.getElementById('Date_realisation').value;
//     var dat=new Date();

//     if (new Date(Date_realisation).getTime() <= dat.getTime())
//     {
//         document.getElementById("errorPD").textContent = "date inferieur";
//         document.getElementById("errorPD").style.color = "red";
//         return 0;
//     }
//     else
//     {
//         document.getElementById("errorPD").textContent = "date verifiée";
//         document.getElementById("errorPD").style.color="green";
//         return 1;
//     }
// }


function ajout(event) {
    if (saisirmnt() == 0 || saisirpay() == 0 || saisirqtt()==0 || saisirProduct()==0 || saisirE()==0)
        event.preventDefault();
}