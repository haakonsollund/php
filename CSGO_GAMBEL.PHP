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
    
    
    $date = date("m");
    if($date == 01){
        echo "det er januar";
    }else if ($date == 02) {
        echo "det er februar";
    }
    
    
    
    
    
    
    $csgo = rand (1,10);    
    
    if($csgo == 1) {
        echo '<img src="https://totalcsgo.com/image/skins/ppbizon-bamboo-print-minimal-wear.png" alt="">';
    }else if ($csgo == 2) {
        echo '<img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopujwezhz3MzbcDNG09GzkImemsj4MqnWkyUB6pUk0r6R84qkjgKyr0FoMTv7IILAcwFoZgvY_QC2krq-h5Lv6smc1zI97WWh0fYG/360fx360f" alt="">';
    }else if ($csgo == 3) {
        echo '<img src="https://steamcdn-a.akamaihd.net/apps/730/icons/econ/default_generated/weapon_negev_am_army_shine_light_large.884085f4a13b786f0ac7234d616ff01a848f28d5.png" alt="">';
    }else if ($csgo == 4) {
        echo '<img src="https://steamuserimages-a.akamaihd.net/ugc/952970795168025802/87EF765889F7492447757AEA208835D66898D474/?imw=637&imh=358&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true" alt="">';
    }else if ($csgo == 5) {
        echo '<img src="https://s-wiki.cs.money/wiki_747f90bcc2d144f2899a40e553e59102_preview.png" alt="">';
    }else if ($csgo == 6) {
        echo '<img src="https://steamcdn-a.akamaihd.net/apps/730/icons/econ/default_generated/weapon_ak47_hy_ak47lam_blue_light_large.9f8ec5103efa5b7a0b3919a13b4de78e1bd612a0.png" alt="">';
    }else if ($csgo == 7) {
        echo '<img src="https://s-wiki.cs.money/wiki_cmj08xw_preview.png" alt="">';
    }else if ($csgo == 8) {
        echo '<img src="" alt="">';
    }












    $csgowildlotus = rand (1,400);
    $csgowildlilly = rand (1,100);
    
    
    if ($csgowildlotus == 400) {
        echo '<img src="data:image/jpeg;base64,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" alt="">';
    }
    
    
    
    if ($csgowildlilly == 100) {
        echo '<img src="https://s-wiki.cs.money/wiki_gE3TNWp_preview.png" alt="">';
    }
    

    
    

    ?>

</body>
</html>