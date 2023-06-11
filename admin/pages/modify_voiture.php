<?php 
include('includes/db_connect.php');
$sql='SELECT * FROM produits WHERE id='.$_GET['id'].'';
$req = $conn->query($sql);
$data = $req->fetch();
?>
<div class="content-box">
    <div class="content-box-header">
	<h3>Modifier produit <?php echo $data['nom']; ?></h3>
	<div class="clear"></div>
</div> <!-- End .content-box-header -->
				
<div class="content-box-content">
 <div class="tab-content default-tab" id="tab1">
 <form name="f1" action="includes/modify_product_process.php?id=<?php echo $_GET['id']; ?>" method="post">
 <fieldset>
<p><label>nom</label>
<input class="text-input small-input" type="text" id="small-input" name="nom" value="<?php echo $data['nom']; ?>" /></p>
<p><label>img</label>
<input class="text-input small-input" type="text" id="small-input" name="img" value="<?php echo $data['img']; ?>" /></p>					
<p><label>Prix</label>
<input class="text-input small-input" type="text" id="small-input" name="prix" value="<?php echo $data['prix']; ?>"/></p>									


<p><input class="button" type="submit" value="Modifier produit" /></p>
</fieldset>
							
<div class="clear"></div><!-- End .clear -->
							
</form>
						
					</div>       
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->