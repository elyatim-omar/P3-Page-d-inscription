<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
   
</head>
<body>
  <div class="content col-md-6 col-sm-12 float-left">
     <div class="text">
       <h1>Registration page</h1>

       <p id="para">Welcome to our first event you can sign here </p>
     </div>
     <img src="laptop.gif">
    </div>
        <form action="result.php" method="post" class = "col-md-6 col-sm-12 float-right  " >
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" name="prenom" placeholder="Name">
                <div><p id=nomr></p></div>
              </div>
              <div class="form-group col-md-6">
                <label for="inputSurname4">Surname</label>
                <input type="text" class="form-control" name="nom" placeholder="Surname">
                <div><p id=prenomr></p></div>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    <div><p id=adressr></p></div>
                  </div>
                <div class="form-group col-md-6">
                  <label for="inputPhone">Phone number</label>
                  <input type="text" class="form-control" id="inputPhone" placeholder="Phone">
                  <div><p id=phoner></p></div>
                </div>
              </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
                <div><p id=emailr></p></div>
              </div>
            <button type="submit" class="btn btn-primary" onclick="validation()">Submit</button>
<a class="btn btn-outline-light" href="result.php">list of participants</a>
<a class="btn btn-outline-light" href="certificate.php">Certificates</a>

          </form>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</body>
</html>