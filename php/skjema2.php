<?php




if(isset($_GET["sendinn"])){

    $navn = $_GET["ditnavn"];
    $film = $_GET["favorittfilm"];

    echo"<p>du heter $navn, og din favorittfilm er $film.</p>"; 
}
?>