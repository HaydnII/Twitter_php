<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['keywords'])) {
   
    $keywords = $_POST['keywords'];


    $directory = "/chemin/vers/le/repertoire";

    $files = glob("$directory/*.txt");

    foreach ($files as $file) {
        $handle = fopen($file, "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                if (strpos($line, $keywords) !== false) {
                    echo $line . "<br>";
                }
            }
            fclose($handle);
        } else {
            echo "Erreur : impossible d'ouvrir le fichier $file.";
        }
    }
}
?>

<form method="post">
    <label for="keywords">Tweet à rechercher :</label>
    <input type="text" name="keywords" id="keywords">
    <button type="submit">Rechercher</button>
</form>