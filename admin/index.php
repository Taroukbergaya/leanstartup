<?php 
session_start(); 
if(!isset($_SESSION['email'])){
	header('location:../Login.php');
}else{
?>
<html>
  <head>
	 <meta charset="utf-8">
		
		<title>produi tcosmetique</title>
        <?php include('includes/resources.php'); ?>
  </head>

	<body>
    <div id="body-wrapper"> 
		
        <?php include('includes/sidebar.php'); ?>
		
        <div id="main-content"> 
        
        <div class="clear"></div> 
<?php 
  if ( isset($_GET['page']) ) {
	  $page = $_GET['page'];
		if ($page == 1) {  }
		if ($page == 21) { include('./pages/list_voiture.php'); }
		if ($page == 22) { include('./pages/add_voiture.php'); }
		if ($page == 23) { include('./pages/modify_voiture.php'); }
		if ($page == 31) { include('./pages/list_réservation.php'); }
		if ($page == 41) { include('./pages/add_promotion.php'); }
  } else {
	   
	}

?>
		
		
        <?php include('includes/footer.php'); ?>
		
	</div>
    </body>
  
</html>
<?php } ?>
