<!DOCTYPE html>
<html>
<head>
<style> 
    table {
        border-collapse: collapse;
    }
    th, td {
        border-style: solid;
        padding: 5px;
    }
    </style>


</head>
<?php 
    $rad = 10;
    $kolonner = 10;
 
    echo "<table>";
 
    for ($i=1; $i<=$rad; $i++){
        // kode som utføres av første for loop
        echo "<tr>";//row
            echo "<td> $i gangen: </td>"; //column
            for ($x=1; $x<=$kolonner; $x++) {
                // kode for loop nr 2, lager <td> tags inni hver <tr>
                $gange = $x * $i;
                echo "<td> $x * $i = $gange </td>";
            }
 
        echo "</tr>";
    }
    echo "</table>";






    ?>


<body>




    
</body>
</html>