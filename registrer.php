<form method="POST">
     brukernavn
    <br><input type="text" name="brukernavn"><br>
    fornavn
    <br><input type="text" name="fornavn"><br>
    etternavn
    <br><input type="text" name="etternavn"><br>
    bio
    <br><input type="text" name="bio"><br>
    passord
    <br><input type="password" name="passord"><br>
    epost
    <br><input type="text" name="epost"><br>
    tlf
    <br><input type="number" name="tlf"><br>
    <br><input type="submit" name="leggtil" value="legg til profil">
    
  
</form>
<link rel="stylesheet" href="registrer.css">


<?php
include "azure.php";
if (isset($_POST["leggtil"])){
    $brukernavn = $_POST["brukernavn"];
    $fornavn = $_POST["fornavn"];
    $etternavn = $_POST["etternavn"];
    $bio = $_POST["bio"];
    $passord = $_POST["passord"];
    $epost = $_POST["epost"];
    $tlf = $_POST["tlf"];

    
    $sql = "INSERT INTO bruker (brukernavn, fornavn, etternavn, bio, passord, epost, tlf) 
    VALUES ('$brukernavn','$fornavn','$etternavn','$bio','$passord','$epost','$tlf')";
    header("location: loginn.php");
if ($con->query($sql)){
 echo "lag til i databasem";

 }else{
        echo"noe gikk feil med insert";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
.app
  .content
    .header.hidden
    .button
      .sign-up SIGN UP
      form.hidden.form
        input(type="text", placeholder="Username")
        input(type="email", placeholder="Email Id")
        input(type="password", placeholder="Password")
      button.hidden
        span.text DONE

    
</body>
</html>