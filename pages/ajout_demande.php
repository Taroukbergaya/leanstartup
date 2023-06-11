<?php 
			  if(isset($_POST['valider'])){
				  include ("conn_db.php");
				  $a=$_POST['cin'];
				  $b=$_POST['nomprenom'];
                  $c=$_POST['age'];
                  $d=$_POST['genre'];
				  $e=$_POST['email'];
                  $f=$_POST['section'];
                  $g=$_POST['niveau'];
                  $h=$_POST['date'];
				  if(($a!='') && ($b!='') && ($c!='') && ($d!='') && ($e!='') && ($f!='') && ($g!='') && ($h!='') ){
		

$sql= "INSERT INTO damandeformation values('','$a','$b','$c','$d','$e','$f','$g','$h')";
				  if($sql)
                            echo "<center><H1> Vos données ont été enregistrées avec succès</H1></center>";
                  else 
                            echo "echec d'inscription";
                  
                            $conn->exec($sql);
				  }
				
				 }?>