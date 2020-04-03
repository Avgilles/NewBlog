<?php session_start()>

require_once "bootstrap.php";
$login=$_POST["login"];
$mdp=$_POST["mdp"];
if(isset($_POST["mdp"])){

$rep=$entityManager->getRepository('Utilisateur');
$usrcheck = $rep->findBy(array('login'=>$login));
}
if(empty($usrcheck)){

$usr= new Utilisateur();
$usr->setLogin($login);
$usr->setMdp($mdp);
$entityManager->persist($usr);
$entityManager->flush();
header('Location:goConnect.php?create=true');

// echo "<div class='mask active'></div><div class='modal'><h3><strong>Aie </strong>erreur de login ou mot de passe</h3><p>Tu t\' es peut être trompé quelque part🙃</p><button class='close' >X</button>";

}else{

echo "Des champs sont incomplets ou le login est déja utilisé !";

}



?>