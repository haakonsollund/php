<!DOCTYPE html>
<html lang="en">
<head>
<h1> Gitar database </h1>
<link rel="stylesheet" href="style.css">

</head>
<body>
    <a href="leggtil.php">
        <button>legg til</button>
    </a>
    <?php
    include "azure.php";
     
    $sql = "SELECT*FROM table1";
    $resultat = $con->query($sql);

    echo "<table id = 'gitar'>";
    echo "<tr>";
        echo "<th> merke </th>";
        echo "<th> antall strenger </th>";
        echo "<th> pickups </th>";
        echo "<th> farge </th>";
        echo "<th> modell </th>";
        echo "<th> frets </th>";
        echo "<th> neck type </th>";
        echo "<th></th>";
    echo "</tr>";


    while($rad = $resultat->fetch_assoc()) {
        $id = $rad["id"];
        $merke = $rad["merke"];
        $antall_strenger = $rad["antall_strenger"];
        $pickup = $rad["pickup"];
        $farge = $rad["farge"];
        $modell = $rad["modell"];
        $frets = $rad["frets"];
        $neck_type = $rad["neck"];

        echo"<tr>";
            echo"<td>$merke</td>";
            echo"<td>$antall_strenger</td>";
            echo"<td>$pickup</td>";
            echo"<td>$farge</td>";
            echo"<td>$modell</td>";
            echo"<td>$frets</td>";
            echo"<td>$neck_type</td>";
            echo"<td><form method='post' action='slett.php'>";
            echo "<input type='hidden' name'slett_id' value='$id'>";
            echo "<input type='submit' value='slett'>";
            echo "</form>";
            echo"</td>";

        echo"</tr>";


        }
        
        
        echo "</table>";
        
        
        
        
        
        
        ?>
    
</body>
</html>