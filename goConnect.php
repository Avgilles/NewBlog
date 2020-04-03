<?php session_start()?>


<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog test php Gilles avraam</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css'><link rel="stylesheet" href="./css/style.css">

</head>
<body>

<?php
if (isset($_GET["err"])) {
	
	echo "<div class='mask active'></div><div class='modal'><h3><strong style='font-size:2rem'>Aïe </strong>erreur de login ou mot de passe</h3><p>Tu t' es peut-être trompé quelque part🙃</p><a href='goConnect.php' class='bouton'>Réessayer</a>";
    exit();
}
if (isset($_GET["create"])) {
	
	echo "<div class='mask active'></div><div class='modal'><h3><strong style='font-size:2rem'>Super </strong>tu t'es créé un compte !</h3><p>Connecte toi pour poster des messages !</p><a href='goConnect.php' class='bouton'>Continuer</a>";
    exit();
}
else {
    
}
?>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="creer_un_compte-traite.php" method="POST">
			<h1>Créer un compte</h1>
			<div class="social-container">
				
			</div>
			<input type="text" placeholder="nom d'utilisateur" name="login" required="required"/>
			<!-- <input type="email" placeholder="Email" /> -->
			<input type="password" placeholder="mot de passe" name="mdp" required="required"/>
			<button type="submit">S'inscrire</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="connection_blog.php" method="GET">				<h1>Se connecter</h1>
			<div class="social-container">
			</div>

			<input type="text" placeholder="identifiant" required="required" name="login"/>
			<input type="password" placeholder="mot de passe" required="required" name="mdp" />
			<button type="submit">se connecter</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Déjà membre ?</h1>
				<p>Pour te connecter, mets les infos de ton profil </p>
				<button class="ghost" id="signIn">se connecter</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Salut toi !</h1>
				<p>Viens compléter ton profil pour te joindre à nous !</p>
				<button class="ghost" id="signUp">s'inscrire</button>
			</div>
		</div>
	</div>
</div>

<a href="index.php">Retour à l'accueil</a>


<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
