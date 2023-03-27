<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<link rel="stylesheet" href="style.css">
<a href="registrer.php">
    <button>registrer deg</button>
</a>
<body>
    <?php
    include "azure.php";

    $id_fra_link = $_GET['bruker_id'];
    
    $sql = "SELECT * FROM bruker WHERE idbruker='$id_fra_link'";
    $resultat = $con->query($sql);

    $rad = $resultat->fetch_assoc();
        $idbruker = $rad['idbruker'];
        $brukernavn = $rad['brukernavn'];
        $fornavn = $rad['fornavn'];
        $etternavn = $rad['etternavn'];
        $bio = $rad['bio'];
        $passord = $rad['passord'];
        $epost = $rad['epost'];
        $tlf = $rad['tlf'];
        $skole = $rad['skole'];
        $bosted = $rad['bosted'];
        $fodselsdato = $rad['fodselsdato'];

        echo"<h1>$brukernavn</h1> <h3>$fornavn $etternavn</h3>  <h3>$epost</h3> <h3>$tlf</h3> <h3>$skole</h3> <h3>$bosted</h3> <h3>$fodselsdato</h3>";
        echo" "
    ?>
    <?php
    include "upload.php";
    include "opprettInlegg.php";
    

    ?>

<div class='inlegg div'>
            <?php
                $sql = "SELECT * FROM innlegg WHERE idbruker='$id_fra_link' ";
                $resultat = $con->query($sql); # henter ut fra DB
 
                while($innlegg = $resultat->fetch_assoc()) { # loop gjennom alle brukere
                     $inlegg_tekst = $innlegg['tekst'];  
                     $idinnlegg = $innlegg['idinnlegg'];
                    echo "$inlegg_tekst<br>";   
                    
                     include "komentar.php";

                     echo"
                    <form method='POST'>
                    <input name='tekst_kommentar' value='kommentar'>
                    <input name='idinnlegg' type='hidden' value=''>
                    <input type='submit' name='submit_kommentar' value='svar'>
                </form>";

 

                }
            
             

          
            ?>
        </div>

    <div class='bilde_div'>
            <?php
                $sql = "SELECT * FROM media WHERE idbruker='$id_fra_link' ";
                $resultat = $con->query($sql); # henter ut fra DB
 
                while($rad = $resultat->fetch_assoc()) { # loop gjennom alle brukere
                    $media_navn = $rad['media_navn'];  
                    echo "<img class='bilder'src='img/$media_navn'>";
                }
        
            ?>
        </div>


     

        
    
</body>
</html>