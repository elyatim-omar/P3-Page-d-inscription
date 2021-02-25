function ins(){
  
            var text=document.getElementById("nom").value;
            document.getElementById("p").innerHTML+="<b id=op>Nom:</b>&nbsp;"+text+"<br>";

            var text=document.getElementById("Prenom").value;
            document.getElementById("p").innerHTML+="<b id=op>Prénom:</b>&nbsp;"+text+"<br>";

            var text=document.getElementById("Adresse").value;
            document.getElementById("p").innerHTML+="<b id=op>Adresse:</b>&nbsp;"+text+"<br>";

            var text=document.getElementById("Telephone").value;
            document.getElementById("p").innerHTML+="<b id=op>Téléphone:</b>&nbsp;"+text+"<br>";

            var text=document.getElementById("Email").value;
            document.getElementById("p").innerHTML+="<b id=op>Email:</b>&nbsp;"+text+"<br><br>";
          

        }

