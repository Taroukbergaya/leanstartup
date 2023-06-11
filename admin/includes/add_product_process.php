<?php
include('db_connect.php');
$nom = $_POST['nom'];
$img = $_POST['img'];
$prix = $_POST['prix'];


$conn->exec('INSERT INTO produits VALUES(NULL, \''.$_POST['nom'].'\', \''.$_POST['img'].'\', \''.$_POST['prix'].'\')')or die(print_r($conn->errorInfo()));
     

header('Location: ../index.php?page=21&mess=1');      

?>