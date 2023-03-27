<?php


$året = date("Y");

$oscar = "Oscar";
$ludvig = "Ludvig";
$beate = "Beate";

$oscarÅR = 1980;
$ludvigÅR = 2003;
$beateÅR = 2007;

$oscaralder = $året - $oscarÅR;
$ludvigalder = $året - $ludvigÅR;
$beatealder = $året - $beateÅR;

echo"oscar er $oscaralder gammel<br>";
echo"ludvig er $ludvigalder gammel<br>";
echo"beate er $beatealder gammel<br>";
echo"<br>";

$oscarogludvig = $oscaralder - $ludvigalder;
$oscarogbeate = $oscaralder - $beatealder;
$ludvigogbeate = $ludvigalder - $beatealder;
echo"oscar er $oscarogludvig år eldre en ludvig <br>";
echo"oscar er $oscarogbeate år eldre en ludvig <br>";
echo"ludvig er $ludvigogbeate år eldre en beate <br>";
echo"beate er $ludvigogbeate år yngere en luvig <br>";





?>