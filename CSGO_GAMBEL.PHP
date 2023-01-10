<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tall1 = 17;
    $tall2 = 9;
    $tekst1 = "karl";
    $tekst2 = "Johan";
    $date = date("m");

    $csgo = rand (1,10);    

    $sum = $tall1 + $tall2;
    $differanse = $tall1 - $tall2;
    $produkt = $tall1 * $tall2;
    $kvotient = $tall1 / $tall2;

    $langtekst = $tekst1 . $tekst2;
    $bedretekst = $tekst1 . " " . $tekst2 . "s gate";
    echo "summer blir $sum <br>";
    echo "Differansen blir $differanse <br>";
    echo "Produktet blir $produkt <br>";
    echo "Kvotienten blir $kvotient <br>";
    

    echo "<br><br>";

    echo "$langtekst <br>";
    echo "$bedretekst <br>" ;


    echo "<a href='https://www.1881.no/person/roedoey/gjeroey/hans-kasper-granlund-storhaug_34074905S1/'>hkgs 1881</a> <br>" ;

    echo "<a href='https://www.gulesider.no/hans+kasper+granlund+storhaug+gjer%C3%B8y/163212742/person?page=12&query=storhaug'>hkgs_gule_sider</a> <br>";

    if($date == 01){
        echo "det er januar";
    }else if ($date == 02) {
        echo "det er februar";
    }


    
    

    ?>

</body>
</html>