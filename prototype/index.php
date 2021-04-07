<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forum</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
    <div id="para"></div>
    <script>

    $.get("liste-apprenants.php" , function(data){
var apprenants = JSON.parse(data);

apprenants.forEach(apprenant => {

    var affichage = $("<p></p>")
    .text(apprenant.Nom + " " + apprenant.Prenom);

    $("#para").append(affichage);
});
 });

    </script>

    
</body>
</html>