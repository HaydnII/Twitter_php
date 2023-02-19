<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tweet_id'])) {

    $consumer_key = 'YOUR_CONSUMER_KEY';
    $consumer_secret = 'YOUR_CONSUMER_SECRET';
    $access_token = 'YOUR_ACCESS_TOKEN';
    $access_token_secret = 'YOUR_ACCESS_TOKEN_SECRET';

    $connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);

    $tweet_id = $_POST['tweet_id'];
  
    $status = $connection->post("statuses/destroy/$tweet_id");

   
    if ($connection->getLastHttpCode() == 200) {
        echo "Le tweet a été supprimé avec succès.";
    } else {
        echo "La suppression du tweet a échoué.";
    }
}
?>

<form method="post">
    <label for="tweet_id">tweet à supprimer :</label>
    <input type="text" name="tweet_id" id="tweet_id">
    <button type="submit">Supprimer le tweet</button>
</form>
