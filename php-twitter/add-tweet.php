<?php

$host = 'localhost';
$user = 'root';
$mdp = '';
$nomBase = 'twitter';
$bdd = new PDO("mysql:host=$host;dbname=$nomBase", $user, $mdp);


if(isset($_POST['auteur']) && isset($_POST['contenu'])) {
 
    $auteur = $_POST['auteur'];
    $contenu = $_POST['contenu'];

    $req = $bdd->prepare('INSERT INTO tweets (auteur, contenu) VALUES (:auteur, :contenu)');
    $req->execute(array(
        'auteur' => $auteur,
        'contenu' => $contenu
    ));

    
    echo 'Le tweet a été ajouté avec succès !';
}

?>

<form method="post">
    <label for="auteur">Auteur :</label>
    <input type="text" name="auteur" id="auteur"><br>

    <label for="contenu">Contenu :</label>
    <textarea name="contenu" id="contenu"></textarea><br>

    <input type="submit" value="Envoyer">
</form>