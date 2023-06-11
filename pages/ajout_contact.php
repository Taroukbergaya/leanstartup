<?php 
			  if(isset($_POST['valider'])){
				  include ("conn_db.php");
				  $np_ele=$_POST['nomprenom'];
				  $email_ele=$_POST['email'];
                  $adr_ele=$_POST['adresse'];
				  $msg_ele=$_POST['msg'];
				  if(($np_ele!='') && ($email_ele!='') && ($adr_ele!='') && ($msg_ele!='') ){
		

$sql= "INSERT INTO contacts values('','$np_ele','$email_ele' ,'$adr_ele','$msg_ele')";
				  if($sql)
                            echo "<center><H1> Vos données ont été enregistrées avec succès</H1></center>";
                  else 
                            echo "echec d'inscription";
                  
                            $conn->exec($sql);
				  }
				
				 }?>