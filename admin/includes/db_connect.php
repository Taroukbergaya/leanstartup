<?php
try
{  // se connecter a MySQL
$conn = new PDO('mysql:host=localhost;dbname=leanstartup' , 'root',  '') ;
} 
catch (Exception $e)  // En cas d'erreur
{
die ('Erreur : '. $e->getMessage());
}
?>