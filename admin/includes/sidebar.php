<?php 
	function current_page($p) {
		if (isset($_GET['page'])) {
			if ($_GET['page']==$p) {
				return true;
			} else { return false; }
		}
	}
	?>

<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
    <h1 id="sidebar-title"></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="" alt="" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Bienvenue, <a href="#" title="Edit your profile">Admin</a>
				<br />
				 <a href="../acceuil.php" title="Sign Out">Se d&eacute;connecter</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				
				

<li> 
  <a href="#" <?php if(current_page(21) || current_page(22)) { ?>class="nav-top-item current"<?php } else { ?> class="nav-top-item" <?php } ?>>Gérer Produits</a>
  <ul>
  <li><a <?php if(current_page(21)) { ?>class="current"<?php } ?> href="index.php?page=21">Liste produits</a></li>
  <li><a <?php if(current_page(22)) { ?>class="current"<?php } ?> href="index.php?page=22">Ajouter produit</a></li>
  </ul>
</li>

<li> 
  <a href="#" <?php if(current_page(31) || current_page(32)) { ?>class="nav-top-item current"<?php } else { ?> class="nav-top-item" <?php } ?>>Gérer contacts</a>
  <ul>
  <li><a <?php if(current_page(31)) { ?>class="current"<?php } ?> href="index.php?page=31">Afficher contact</a></li>
  </ul>
</li>				
<li> 
  <a href="#" <?php if(current_page(41) || current_page(42)) { ?>class="nav-top-item current"<?php } else { ?> class="nav-top-item" <?php } ?>>Gérer Promotions</a>
  <ul>
  <li><a <?php if(current_page(41)) { ?>class="current"<?php } ?> href="index.php?page=41">Ajouter promotions</a></li>
  </ul>
</li>				
	
     				
			</ul> <!-- End #main-nav -->
			
			
			
		</div></div> <!-- End #sidebar -->