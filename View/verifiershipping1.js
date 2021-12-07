
function saisirAdr_livr() {
    var Adr_livr = document.getElementById("Adr_livr").value;


    if (Adr_livr == "")
    {
        document.getElementById('errorAL').textContent="Please enter the shipping adress properly";
        document.getElementById("errorAL").style.color = "red";
        return 0;
    }
    else
    {
        document.getElementById("errorAL").textContent = "Adress verified";
        document.getElementById("errorAL").style.color = "green";
        return 1;
    }
}


function saisirDate_livr() {
    var Date_livr = document.getElementById('Date_livr').value;
    var dat=new Date();

    if  (new Date(Date_livr).getDate() <= dat.getDate() ) 
    {
        document.getElementById("errorDL").textContent = "Please enter the shipping date properly";
        document.getElementById("errorDL").style.color="red";
        return 0; 
    }
   
    else
    {
       
        document.getElementById("errorDL").textContent = "date verified ";
        document.getElementById("errorDL").style.color="green";
        return 1;
    }
   
}



function ajout(event) {
    if (saisirAdr_livr() == 0 || saisirDate_livr() == 0 )
        event.preventDefault();
}