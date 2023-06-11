<?php
include('db_connect.php');
$img = $_POST['img'];
$description = $_POST['description'];


$conn->exec('INSERT INTO promotion VALUES(NULL, \''.$_POST['img'].'\', \''.$_POST['description'].'\')')or die(print_r($conn->errorInfo()));
     

header('Location: ../index.php?page=21&mess=41');      

?>