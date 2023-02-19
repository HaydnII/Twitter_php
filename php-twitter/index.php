<?php
require 'connect.php';
require 'add-tweet.php';
require 'rechercher.php';
require 'delete-tweet.php';



$requete = $database->prepare("SELECT * FROM twitter");
$requete->execute();
$taches = $requete->fetchAll( PDO ::FETCH_ASSOC );

?>


