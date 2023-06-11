<?php
    include ("conn_db.php"); 
    $e= $_POST["email"];
    $data = $conn->query("DELETE FROM demandeformations WHERE email='$e';");
    if ($data)
        echo "<center><h1> Succées de suppression </h1></center>"
?>
