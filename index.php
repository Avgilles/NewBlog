<?php
require 'bootstrap.php';
session_start();

$rep=$entityManager->getRepository('Message');
$mes = $rep->findAll(); //retourne un tableau d'objets, findAll() pour afficher tous les message de la bdd

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tout les messages</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css'><link rel="stylesheet" href="./css/style.css">
</head>
<body>

<header>
<div class="headerD">
    
<img src="img/blog.png" alt="" style="width: 50px">
<a href="goConnect.php"><p class="textH">Connexion/inscription</p></a>
</div>

</header>

<h4 class="titre">Les messages de nos utilisateurs !</h4>
<?php
foreach($mes as $mes){
            echo "<div class='msg'><p> Message de <strong>".$mes->getUtilisateur()->getLogin()."</strong> :<br><br> ".$mes->getTexte()."  </p></div>";
        }

 ?>   
</body>
</html>