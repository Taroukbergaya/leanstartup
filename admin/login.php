<html>
  <head>
	 <meta charset="utf-8">
		
		<title></title>
        
		<?php include('includes/resources.php'); ?>
  </head>
  
	<body id="login">
		
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
			
				<h1>Simpla Admin</h1>
				<!-- Logo (221px width) -->
				<img id="logo" src="resources/images/logo.png" alt="DSI Market Admin" />
			</div> <!-- End #logn-top -->
			
			<div id="login-content">
				
				<form action="index.php">
				
					<div class="notification information png_bg">
						<div>
							Veuillez vérifier votre login / Mot de passe.
						</div>
					</div>
					
					<p>
						<label>Login</label>
						<input class="text-input" type="text" />
					</p>
					<div class="clear"></div>
					<p>
						<label>Password</label>
						<input class="text-input" type="password" />
					</p>
					<div class="clear"></div>
					
					<div class="clear"></div>
					<p>
						<input class="button" type="submit" value="Se connecter" />
					</p>
					
				</form>
			</div> <!-- End #login-content -->
			
		</div> <!-- End #login-wrapper -->
		
  </body>
  
</html>
