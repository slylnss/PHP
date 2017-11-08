Exercice 10

<html>
<body>
<br/>
<form method="GET" action="ternaire.php">
	Genre: Femme<input type="radio" value="F" name="genre">Homme<input type="radio" value="H" name="genre"><br/><input type="submit" value="ok">
</form>

</body>
</html>



<?php 

$bonjour= $_GET["genre"];

$genre = ($bonjour =="H") ? "Bonjour Monsieur" : "Bonjour Madame";

echo $genre;

?>



