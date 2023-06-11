
<?php include('pages/conn_db.php'); ?>
<?php
	$user=true;
	if(!empty($_POST)){
		$user = connect($_POST);
		if (count((array)$user) > 1){
			Session_start();
			$_SESSION['email'] = $user['email'];
			$_SESSION['password'] = $user['password'];
			header('location:admin/index.php');
		}
	}

?>
<?php
function connect($data)
{
	include ('pages/conn_db.php');
	$email = $data['email'];
	$password = $data['password'];
	$requette = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
	$resultat = $conn->query($requette);
	$user = $resultat->fetch();
	return $user;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo" >
                <img src="images/logo_ipie.png" width="120px" height="130px"> <br>
                <h1>Centre de formation LEAN-STARTUP</h1>
            </div>
        </div>
        <br> <br>
        <div class="main_nav">
            <ul class="menu">
                <li><a href="acceuil.php">Acceuil</a></li>
                <li><a href="pages/types_formations.php">Types de formations</a></li>
                <li><a href="pages/types_paiement.php">Types de paiement </a></li>
                <li><a href="pages/contact.html">Contact</a></li>
                <li><a href="pages/demande_formation.html">Demande de formations</a></li>
            </ul>
        </div>
        
        <div class="section">
        <form  method="POST" action="acceuil.php">
        <div class="connexion" align="right">
                <p>Ma connexion : </p>
                    Email : <input type="email" name="email" placeholder="Entrez votre email"> <br>
                    Password : <input type="password" name="password" placeholder="Entrez votre mdp"> <br>
                    <input type="submit" value="Se connecter">
            </div>
        </div>
</form>
        
        
        <div class="footer">
                <p align="center"> Copyright by <a href="https://www.facebook.com/webcampfreelance">LEAN STARTUP</a></p>
        </div>
    </div>
</body>
</html>