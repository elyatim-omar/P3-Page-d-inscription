// window.addEventListener('load', () => {

//     // Via Query parameters - GET
//     /* const params = (new URL(document.location)).searchParams;
//     const name = params.get('name');
//     const surname = params.get('surname'); */

//     // Via local Storage
//      var name = localStorage.getItem('NAME');
//     var surname = localStorage.getItem('SURNAME'); 
//     var adress = localStorage.getItem('ADRESS'); 
//     var phone = localStorage.getItem('PHONE'); 
//     var email = localStorage.getItem('EMAIL'); 
    
//     // const name = sessionStorage.getItem('NAME');
//     // const surname = sessionStorage.getItem('SURNAME');
//     document.getElementById("p").innerHTML+="<b >Name:</b>&nbsp;"+name+"<br>";
//     document.getElementById("p").innerHTML+="<b >Surname:</b>&nbsp;"+surname+"<br>";
//     document.getElementById("p").innerHTML+="<b >Adress:</b>&nbsp;"+adress+"<br>";
//     document.getElementById("p").innerHTML+="<b >Phone:</b>&nbsp;"+phone+"<br>";
//     document.getElementById("p").innerHTML+="<b >Email:</b>&nbsp;"+email+"<br>";
//     // document.getElementById('p').innerHTML = name;
//     // document.getElementById('p').innerHTML = surname;

// })

window.addEventListener('load', () => { 

    var name = JSON.parse(localStorage.getItem('NAME'));
    var surname = JSON.parse(localStorage.getItem('SURNAME'));
    var adress = JSON.parse(localStorage.getItem('ADRESS'));
    var phone = JSON.parse(localStorage.getItem('PHONE'));
    var email = JSON.parse(localStorage.getItem('EMAIL'));

for(let i=0 ; i< name.length ; i++ )
    {document.getElementById('p').innerHTML +="<span>Name :</span>&nbsp;"+ name [i]+"<br>";
    document.getElementById('p').innerHTML +="<span>Surname :</span>&nbsp;"+ surname [i]+"<br>"
    document.getElementById('p').innerHTML +="<span>Adress :</span>&nbsp;"+ adress [i]+"<br>"
    document.getElementById('p').innerHTML +="<span>Phone :</span>&nbsp;"+ phone [i]+"<br>"
    document.getElementById('p').innerHTML +="<span>Email :</span>&nbsp;"+ email [i]+"<br><br><br>"



}



})

