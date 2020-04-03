<?php
require "bootstrap.php";
session_start();

$login = htmlspecialchars($_GET["login"]);
$mdp = htmlspecialchars($_GET["mdp"]);
$rep = $entityManager -> getRepository('Utilisateur');
$usr = $rep -> findOneBy(array('login' => $login, 'mdp' => $mdp));

if($usr){
    $_SESSION = ['id' => $usr -> getId(), 'login' => $usr -> getLogin(), 'password' => $usr -> getMdp()];
  header('Location:creer_message.php');

}
else{
   
    header('Location:goConnect.php?err=true');
    ?>
    <!-- echo "<div class='mask active'></div><div class='modal'><h3><strong>Aie </strong>erreur de login ou mot de passe</h3><p>Tu t\' es peut être trompé quelque part🙃</p><button class='close' >X</button>";
    exit(); -->
<!--  -->
<?php
}
?>