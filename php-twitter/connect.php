<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
</head>
<body>
	<h2>Inscription</h2>
	<form action="inscription.php" method="post">
		<label for="nom">Nom :</label>
		<input type="text" id="nom" name="nom" required><br>

		<label for="email">Email :</label>
		<input type="email" id="email" name="email" required><br>

		<label for="motdepasse">Mot de passe :</label>
		<input type="password" id="motdepasse" name="motdepasse" required><br>

        <label for="photo">Photo de profil :</label>
	    <input type="file" id="photo" name="photo" accept="image/*"><br>

		<input type="submit" value="S'inscrire">
	</form>
</body>
</html>