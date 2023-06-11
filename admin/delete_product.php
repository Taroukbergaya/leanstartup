<?php
include('includes/db_connect.php');
if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $conn->exec("DELETE FROM produits where id=$id");
    
}
     

header('Location: ../admin/index.php?page=21');      

?>