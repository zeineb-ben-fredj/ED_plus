function saisirN() {
    var nom = document.getElementById('name').value;
    var test = false;
    var regex = /^[A-Za-z]+$/;

    if ((nom == "") || (nom[0] == nom[0].toLowerCase()) || (!(regex.test(nom))))
       { document.getElementById("errorN").textContent = "Entrez un nom valide";
        document.getElementById("errorN").style.color = "red";
        return 0;
    } 
    else {
        document.getElementById("errorN").textContent = "Nom validé";
        document.getElementById("errorN").style.color = "green";
        return 1;
    }
}

function saisirE(){
var mail=document.getElementById('email').value;
    c=mail.search("@");
if (c==-1)
{

    document.getElementById("errorE").textContent = "Veuillez entrer un mail valide";
    document.getElementById("errorE").style.color = "red";
    return 0;}
  else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) || (mail.search("gmail.com")==-1))
{document.getElementById("errorE").textContent = "Veuillez entrer un mail valide";
document.getElementById("errorE").style.color = "red";
return 0;}
else {
    document.getElementById("errorE").textContent = "mail validé";
        document.getElementById("errorE").style.color = "green";
        return 1;
}
}
function saisirS() {
    var subject = document.getElementById("subject").value;


    if (subject== "")
    {
        document.getElementById('errorS').textContent="Veuillez saisir le sujet correctement ";
        document.getElementById("errorS").style.color = "red";
        return 0;
    }
    else
    {
        document.getElementById("errorS").textContent = "sujet verifié";
        document.getElementById("errorS").style.color = "green";
        return 1;
    }
}
function saisirM() {
    var message = document.getElementById("message").value;


    if ((message== "") || (message.length<10))
    {
        document.getElementById('errorM').textContent="Veuillez saisir le message correctement ";
        document.getElementById("errorM").style.color = "red";
        return 0;
    }
    else
    {
        document.getElementById("errorM").textContent = "message verifié";
        document.getElementById("errorM").style.color = "green";
        return 1;
    }
}
function ajout(event) {
    if (saisirN() == 0 || saisirE() == 0 || saisirS() == 0 || saisirM()==0)
        event.preventDefault();
}
function generatePDF()
{
 const message = document.getElementById("message")
const nom = document.getElementById('name').value;
const subject = document.getElementById("subject").value;
const mail=document.getElementById('email').value;
const pdf=document.getElementById('pdf').value;

// const pdf=document.getElementById("invoice");

 html2pdf().from(pdf).save();
}

window.onload=function(){
    document.getElementById("pdf_down").addEventListener("click", () => {
        const pdf=this.document.getElementById("pdf");

        html2pdf().from(pdf).save();
    })
}