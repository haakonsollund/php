<?php
$server ="localhost";
$brukernavn = "root";
$passord = "";
$database = "gitarer";


$kobling = new mysqli($server,$brukernavn,$passord,$database);


if($kobling->connect_error){
    die("noe gikk galt:".$kobling->connect_error);

}else{
    echo"Tilkoblingen virker<br><br>";
}

$sql = "SELECT*FROM bil";
$resultat = $kobling->query($sql);

while($rad = $resultat->fetch_assoc()){
    $id = ['id'];
    $merke = ['gitar merke'];
    $pickup = ['pickup'];
    $farge = ['farge'];
    $modell = ['modell'];
    $frets = ['frets'];
    $neck_type['neck type'];


    echo"$id,$merke,$pickup,$farge,$modell,$frets,$neck_type<br>";
}



























?>