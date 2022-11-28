function saisirtype() {
    var typefichier = document.getElementById("typefichier").selectedIndex;

    if (typefichier == 0) {
        document.getElementById('errortype').textContent= "Choose type of file";
        document.getElementById('errortype').style.color="red";
        return 0;
    }
    else
    {
      document.getElementById("errortype").textContent = "verified"; 
     document.getElementById('errortype').style.color="green"; 
      return 1;
    }
  
        
}

function saisirlevel() {
    var lesson_level = document.getElementById("lesson_level").selectedIndex;

    if (lesson_level == 0) {
        document.getElementById('errorlevel').textContent= "Choose level";
document.getElementById('errorlevel').style.color="red";
        return 0;
    }
    else
    {
      document.getElementById("errorlevel").textContent = "verified"; 
      document.getElementById('errorlevel').style.color="green"; 
      return 1;
    }
        
} 

function saisirid() {
    var id_cc = document.getElementById("id_cc").selectedIndex;

    if (id_cc == 0) {
        document.getElementById('errorid').textContent= "Choose course ID";
        document.getElementById('errorid').style.color="red";
        return 0;
    }
    else
    {
      document.getElementById("errorid").textContent = "verified"; 
      document.getElementById('errorid').style.color="green"; 
      return 1;
    }
        
} 






function saisirdateof_publication() {
    var DateF = document.getElementById('dateof_publication').value;
    var datt=new Date();

    if (new Date(DateF).getDate() < datt.getDate())
    {
        document.getElementById("errordatepub").textContent = "Publication date invalid";
        document.getElementById("errordatepub").style.color = "red";
        return 0;
    }
    else
    {
        document.getElementById("errordatepub").textContent = "Publication date verified";
       document.getElementById("errordatepub").style.color="green";
        return 1;
    }
}
function saisirsubject() {
    var subjects = document.getElementById("subjects").selectedIndex;

    if (subjects == 0) {
        document.getElementById('erroraddPosition').textContent= "Choose subject";
        document.getElementById('erroraddPosition').style.color="red";
        return 0;
    }
    else
    {
      document.getElementById("erroraddPosition").textContent = "verified"; 
      document.getElementById('erroraddPosition').style.color="green"; 
      return 1;
    }
        
}




function saisirnbstudent() {
    var nb = document.getElementById('numof_students').value;

    
    if (nb < 0) {
        document.getElementById("erroraddOffice").textContent = "number of students invalid";
        document.getElementById("erroraddOffice").style.color = "red";
        return 0;
    } 
   
    else {
        document.getElementById("erroraddOffice").textContent = "Verified";
        document.getElementById("erroraddOffice").style.color = "green";
        return 1;
    }
}



function saisirdateof_creation() {
    var DateFond = document.getElementById('dateof_creation').value;
    var dat=new Date();

    if (new Date(DateFond).getDate() < dat.getDate())
    {
        document.getElementById("errordate").textContent = "creation date invalid";
        document.getElementById("errordate").style.color = "red";
        return 0;
    }
    else
    {
        document.getElementById("errordate").textContent = "creation date verified";
        document.getElementById("errordate").style.color="green";
        return 1;
    }
}


function ajout(event) {
    if (saisirsubject() == 0 || saisirdateof_creation() == 0 || saisirnbstudent() == 0 || saisirtype() == 0 || saisirlevel() == 0 ||
    saisirdateof_publication() == 0 || saisirid()== 0 )
        event.preventDefault();
}


