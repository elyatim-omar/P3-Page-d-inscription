
function validation(){
  var name = document.getElementById('inputName').value;
  var surname = document.getElementById('inputSurname').value;
  var adress =document.getElementById("inputAddress").value;
  var phone =document.getElementById("inputPhone").value;
  var email =document.getElementById("inputEmail").value;
  
  document.getElementById('nomr').innerHTML = "";
  document.getElementById('prenomr').innerHTML ="";
  document.getElementById('adressr').innerHTML="";
  document.getElementById('phoner').innerHTML = "";
  document.getElementById('emailr').innerHTML ="";
  
  // if(!mycheck.checked){
  //     alert("please check");
  //     return false;
  // }
  
  if(name == ""){
      document.getElementById('nomr').innerHTML = " *name is required"
  }
  if(surname == ""){
      document.getElementById('prenomr').innerHTML = " *surname is required"
  }
  if(adress == ""){
      document.getElementById('adressr').innerHTML = " *adress is required"
  }
  if(phone == ""){
      document.getElementById('phoner').innerHTML = " *phone is required"
  }
  if(email == ""){
      document.getElementById('emailr').innerHTML = " *email is required"
  }
  
  if(name == "" || surname == "" || adress == "" || phone == "" || email == ""  )
  {
      alert("all fields are required");
      return false;
  }
  
  if(localStorage.getItem('NAME') == null ){
    localStorage.setItem('NAME' , '[]');
    }

    if(localStorage.getItem('SURNAME') == null ){
      localStorage.setItem('SURNAME' , '[]' );
  }
     if(localStorage.getItem('ADRESS') == null ){
    localStorage.setItem('ADRESS' , '[]' );
      }
    if(localStorage.getItem('PHONE') == null ){
    localStorage.setItem('PHONE' , '[]' );
     }
     if(localStorage.getItem('EMAIL') == null ) {
      localStorage.setItem('EMAIL' , '[]' );
        }




        var old_name = JSON.parse(localStorage.getItem('NAME'));
        old_name.push(name);
        localStorage.setItem('NAME' , JSON.stringify(old_name));
   
        // alert("your regestration is done thank you");

        var old_surname = JSON.parse(localStorage.getItem('SURNAME'));
        old_surname.push(surname);  
        localStorage.setItem('SURNAME' , JSON.stringify(old_surname));



      var old_adress = JSON.parse(localStorage.getItem('ADRESS'));
      old_adress.push(adress);      
      localStorage.setItem('ADRESS' , JSON.stringify(old_adress));



     var old_phone = JSON.parse(localStorage.getItem('PHONE'));
     old_phone.push(phone);
    localStorage.setItem('PHONE' , JSON.stringify(old_phone));


    var old_email = JSON.parse(localStorage.getItem('EMAIL'));
    old_email.push(email);   
   localStorage.setItem('EMAIL' , JSON.stringify(old_email));

   


   document.getElementById('inputName').value="";
   document.getElementById('inputSurname').value="";
   document.getElementById("inputAddress").value="";
   document.getElementById("inputPhone").value="";
   document.getElementById("inputEmail").value="";

   alert("thank you");
        
  

  
  
  }

// function save(){

//   var name = document.getElementById('inputName').value;
//   var surname = document.getElementById('inputSurname').value;
//   var adress =document.getElementById("inputAddress").value;
//   var phone =document.getElementById("inputPhone").value;
//   var email =document.getElementById("inputEmail").value;

    
    
   

  
