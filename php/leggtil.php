<form method="POST">
     gitarmerke
    <br><input type="text" name="gitarmerke"><br>
    antall strenger
    <br><input type="number" name="antallstrenger"><br>
    pickups
    <br><input type="text" name="pickups"><br>
    farge
    <br><input type="text" name="farge"><br>
    modell
    <br><input type="text" name="modell"><br>
    frets
    <br><input type="number" name="frets"><br>
    neck type
    <br><input type="text" name="necktype"><br>
    
  
</form>
<link rel="stylesheet" href="style2.css">

<?php
include "azure.php";
if (isset($_POST["leggtil"])){
    $gitarmerke = $_POST["gitarmerke"];
    $antall_strenger = $_POST["antallstrenger"];
    $pickups = $_POST["pickups"];
    $farge = $_POST["farge"];
    $modell = $_POST["modell"];
    $frets = $_POST["frets"];
    $neck = $_POST["necktype"];

    
    $sql = "INSERT INTO table1 (merke, antall_strenger, pickup, farge, modell, frets, neck) 
    VALUES ('$gitarmerke','$antall_strenger','$pickups','$farge','$modell','$frets','$neck')";

if ($con->query($sql)){
 echo "gitaren er lagt til i databasen";

 }else{
        echo"noe gikk feil med insert";
    }
}

?>
<a href="index.php">
        <button>legg til</button>
    </a>