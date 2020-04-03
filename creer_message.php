<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css'><link rel="stylesheet" href="./css/style.css">
<body>
<header>
<div class="headerD">
    
<img src="img/blog.png" alt="" style="width: 50px">
<a href="index.php"><p class="textH">retour aux messages</p></a>
</div>

</header>
<form method="GET">
        <h4 class="titre">Quel est ton message ?</h4>
        <br>
        <textarea name="message" id="texte" cols="90" rows="10"></textarea>
        <br>
        <input type="submit" value="Envoyer le message" name="newmessage">
    </form>
    
</body>
</html>
<?php session_start()>

require_once "bootstrap.php";
$user = $entityManager
        -> getRepository('Utilisateur')
        -> find($_SESSION["id"]);

        $newMessage = $_GET["message"];
        $message = new Message();
        $message->setUtilisateur($user);
        $message->setTexte($newMessage);
        $entityManager->persist($message);
        $entityManager->flush();
        header('Location:index.php');

        ?>