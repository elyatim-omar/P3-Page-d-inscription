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
            Result Page
        </title>
        <link rel="stylesheet" href="result.css" />
        <style>
    .size{
        width: 400px;
    }
    .container{
        display: flex;
    }
    h2 ,h1{
        text-align:center;
    }
    li {
        text-align:center;
        list-style:none;
    }

    </style>
        
    </head>
    <body>
        <h1 class="text-center">
            Participants list
        </h1>
        <div class="container">

<div class="size">
<h2>SURNAME</h2>
<ul >
    <?php
        foreach ($nom as $value) { 
        ?>
        <li> <?php echo $value ?></li><br>
        <?php
        }
    ?>  
    </ul>
    </div>
    <div class="size">
    <h2>NAME</h2>
    <ul>
    <?php
        foreach ($prenom as $value) { 
        ?>
    <li> <?php echo  $value?></li><br>
        <?php
        }

    ?> 
    </ul>
    </div>
    <div class="size">
    <h2>EMAIL</h2>
    <ul>
      <?php
        foreach ($email as $value) { 
        ?>
    <li> <?php echo  $value ?></li><br>
        <?php
        }

    ?> 
    
     </ul> 
     </div>
     </div>
             <button type="button" class="btn btn-primary d-print-none " onclick="window.print()">print</button>
             <a href="index.php" type="button" class="btn btn-secondary d-print-none ">new applicant</a>
         
    </body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>