<?php
    include ("conn_db.php"); 
    $f= $_POST["section"];
    $data = $conn->query("UPDATE demandeformations set section='$f' WHERE nomprenom='br tarek';");
    if ($data)
        echo "<center><h1> Modification effectuée </h1></center>"
?>
