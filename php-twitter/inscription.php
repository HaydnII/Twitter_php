<?php

$host = 'localhost';
$user = 'root';
$mdp = '';
$nomBase = 'twitter';

try {
    $bdd = new PDO("mysql:host=$host;dbname=$nomBase", $user, $mdp);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['motdepasse'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $motdepasse = $_POST['motdepasse'];

    if ($bdd) {
        $req = $bdd->prepare('INSERT INTO users (nom, email, motdepasse) VALUES(:nom, :email, :motdepasse)');
        $req->execute(array(
            'nom' => $nom,
            'email' => $email,
            'motdepasse' => $motdepasse
        ));
        echo 'Inscription réussie !';
    } else {
        echo 'Erreur de connexion à la base de données.';}
    }

    echo '<form class "form-add-tweet" action "add-tweet.php"method "post">';