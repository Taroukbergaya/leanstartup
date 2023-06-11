<div class="content-box">
    <div class="content-box-header">
	<h3>Liste des Contacts</h3>
	

<div class="clear"></div>
</div> <!-- End .content-box-header -->
				
<div class="content-box-content">
 <div class="tab-content default-tab" id="tab1">
 <?php
// si le parametre mess est dans l'url
if(isset($_GET['mess']) && ($_GET['mess']==1))
{
?>
<div class="notification success png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Produits ajouté avec succès :)</div>
			</div>
<?php
}
if(isset($_GET['mess']) && ($_GET['mess']==2))
{
?>
<div class="notification success png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Produits modifié avec succès :)</div>
			</div>
<?php
}
?>				
 <table>
 <thead>
	 <tr>
	 <th>ID</th>
	 <th>Nom et prenom</th>
	 <th>Email</th>
	 <th>Adresse</th>
	 <th>Message</th>
	 <th></th>
	 </tr>							  
</thead>
<tbody>
<?php
include('./includes/db_connect.php');
$result = $conn->query('SELECT * FROM contacts ORDER BY id DESC');
?>
<?php
while ($donnees = $result->fetch() )
{
?>
 <tr>
	 <td><?php echo $donnees['id']; ?></td>
	 <td><?php echo $donnees['nomprenom']; ?></td>
	 <td><?php echo $donnees['email']; ?></td>
	 <td><?php echo $donnees['adresse']; ?></td>
	 <td><?php echo $donnees['msg']; ?></td>
 </tr>
<?php
}
?>
</tbody>
						 
<tfoot>
								<tr>
									<td colspan="6">
										
										
										<div class="pagination">
											<a href="#" title="First Page">&laquo; Début</a><a href="#" title="Previous Page">&laquo; Précédent</a>
											<a href="#" class="number" title="1">1</a>
											<a href="#" class="number" title="2">2</a>
											<a href="#" class="number current" title="3">3</a>
											<a href="#" class="number" title="4">4</a>
											<a href="#" title="Next Page">Suivant &raquo;</a><a href="#" title="Last Page">Fin &raquo;</a>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>							
</table>
</div> <!-- End #tab1 -->
					
					<div class="tab-content" id="tab2">
					
						<form name="f1" action="includes/add_product_process.php" method="post">
 <fieldset>
<p><label>Image</label>
<input class="text-input small-input" type="text" id="small-input" name="image" /></p>
<p><label>Nom</label>
<input class="text-input small-input" type="text" id="small-input" name="nom" /></p>
<p><label>Vitesse</label>
<input class="text-input small-input" type="text" id="small-input" name="vitesse" /></p>
<p><label>Accélération</label>
<input class="text-input small-input" type="text" id="small-input" name="acceleration" /></p>	
<p><label>Prix</label>
<input class="text-input small-input" type="text" id="small-input" name="prix" /></p>							
<p><input class="button" type="submit" value="Ajouter voiture" /></p>
</fieldset>
							
<div class="clear"></div><!-- End .clear -->
							
</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->