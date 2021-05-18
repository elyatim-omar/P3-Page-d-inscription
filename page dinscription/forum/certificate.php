<?php
 // Traitement

 // Initialisation du session
 session_start();

 // Initialisation du tableau des participants
 $nom = [] ;
 $prenom = [] ;
 $email = [];


 // Trouver ou créer le tableau dans Session
 if( isset( $_SESSION['nom'] ) ) {
    $nom =  $_SESSION['nom'] ;
 }
 if( isset( $_SESSION['prenom'] ) ) {
    $prenom =  $_SESSION['prenom'] ;
 }
 if( isset( $_SESSION['email'] ) ) {
    $email =  $_SESSION['email'] ;
 }
 else {
    $_SESSION['nom'] =  $nom;
    $_SESSION['prenom'] =  $prenom;
    $_SESSION['email'] =  $email;
 }

 // Ajouter le nom du nom dans le tableau
 if ( isset($_POST['nom'])){

    $nom[]  = $_POST["nom"] ;
    $prenom[]  = $_POST["prenom"] ;
 $email[]  = $_POST["email"] ;
 }
 
 


 // Enregistrer le tableau dans la session
$_SESSION['nom'] =  $nom;
$_SESSION['prenom'] =  $prenom;
$_SESSION['email'] =  $email;

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>
            Certificates
        </title>
        <link rel="stylesheet" href="certificate.css" />
       
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    </head>
    <body>
        <ul id="printelement"></ul>
        <div id="container">
        <h1 class="text-center d-print-none">
            Certificates
        </h1>
        <ul class="text-center " id="p" >
        <li class='frame' >
        <div class='frame2' >
        <span class='title'>Certificate of Participation</span>
        <br><br
        ><span style='font-size:25px'><i>This is to certify that</i></span>
        <br><br>
         <div class='name'>
         <span style=' font-size:50px'>
         <?php
         for ($i = 0; $i <= 10; $i++) {
        foreach ($nom as $value) { 
        ?>
         <?php 
         
         echo $value[$i];

         

          ?>
    
        <?php
        }
        }
    ?>  
     
         </span>
         </div><br/><br/>
         <span style=font-size:25px><i>has participated in the event</i></span>
          <br/><br/>
           <span style='font-size:30px'>event name</span>
            <br/><br/> 
         <span style='font-size:25px'><i>dated</i></span><br> 
          <span style='font-size:30px'> 30 mars 2020</span> </div>
           
        </ul>
       
         <div class="but d-flex justify-content-center"> 
             <button type="button" class="btn btn-primary d-print-none " onclick="window.print()">Print all</button>
         </div>
        </div>
    </body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>