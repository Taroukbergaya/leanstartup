<?php
include('db_connect.php');
$conn->exec('UPDATE produits SET nom=\''.$_POST['nom'].'\', img=\''.$_POST['img'].'\', prix=\''.$_POST['prix'].'\' WHERE id=\''.$_GET['id'].'\'')or die(print_r($conn->errorInfo()));
     

header('Location: ../index.php?page=21&mess=2');      

?>