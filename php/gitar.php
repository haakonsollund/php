<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gitar</title>
</head>
<body>
    <?php
    include "azure.php";

    $sql = "SELECT * FROM tabel1 WHERE id = '1'";

    $resultat = $con->query($sql);

    $rad = $resultat->fetch_assoc();

    
        $id = $rad["id"];
        $merke = $rad["merke"];
        $antall_strenger = $rad["antall_strenger"];
        $pickup = $rad["pickup"];
        $farge = $rad["farge"];
        $modell = $rad["modell"];
        $frets = $rad["frets"];
        $neck_type = $rad["neck"];
    

    echo"$merke, $antall_strenger";


    ?>
</body>
</html>