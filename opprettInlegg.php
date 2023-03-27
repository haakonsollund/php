<form method="POST">
    <br><input type="text" name="text"><br>
    <input type="submit" name="submit_innlegg" value="Legg ut">
</form>
<?php
if(isset($_POST["submit_innlegg"])){
    include "azure.php";
    $tekst = $_POST["text"];
    $sql = "INSERT INTO innlegg (tekst, idbruker, date) VALUES ('$tekst','$id_fra_link', now() )";


    if($con->query($sql)){
        echo "inlegg ble lagt til i database";
    } else {
        echo "feilmeding $con->error";
    }
}

?>