<!-- //Exercice 6

<html>
<body>
<form method="post" action="conditions-switch.php">
Ta note : <input type="text" name="note"><br/>
<input type="submit" value="ok"><br/>

<?php
$note= $_POST["note"];
switch ($note){
	case 1:
	$message = "Nul";
	break;
	case 2:
	$message = "Nul";
	break;
	case 3:
	$message = "Nul";
	break;
	case 6:
	$message = "Pas terrible";
	break;
	case 7:
	$message = "Pas terrible";
	break;
	case 8:
	$message = "Pas terrible";
	break;
	case 9:
	$message = "Pas terrible";
	break;
	case 10:
	$message = "Tout juste";
	break;
	case 11:
	$message = "Pas mal";
	break;
	case 12:
	$message = "Pas mal";
	break;
	case 13:
	$message = "Pas mal";
	break;
	case 14:
	$message = "Pas mal";
	break;
	case 15:
	$message = "Bravo";
	break;
	case 16:
	$message = "Bravo";
	break;
	case 17:
	$message = "Bravo";
	break;
	case 18:
	$message = "Bravo";
	break;
	case 19:
	$message = "Waouh";
	break;
	case 20:
	$message = "Waouh";
	break;
} 
echo $message;
?>
</form>
</body>
</html> -->


<!-- //Exercice 7 

<html>
<body>
<br/>
<form method="POST" action="conditions-switch.php">
Votre age : <input type="text" name="age"><br/>
Votre sexe : Femme<input type="radio" value="femme" name="sexe">Homme<input type="radio" value="homme" name="sexe"><br/>
<input type="submit" value="ok">
</form>
</body>
</html>
<?php
$age=$_POST["age"];
$sexe=$_POST["sexe"];

if ($age>21 AND $age<40){
	if($sexe == "femme"){
		$message="Bonjour bienvenue parmis nous";
	}
}
else{
	$message = "Désolée vous ne remplissez pas les conditions";
}
echo $message;
?> -->

<!-- // Exercice 8

<html>
<body>
<br/>
<form method="POST" action="conditions-switch.php">
Votre age : <input type="text" name="age"><br/>
Votre sexe : Femme<input type="radio" value="femme" name="sexe">Homme<input type="radio" value="homme" name="sexe"><br/>
<input type="submit" value="ok">
</form>
</body>
</html>
<?php
$age=$_POST["age"];
$sexe=$_POST["sexe"];
$message="Désolée vous ne remplissez pas les conditions";

if ($age>21 AND $age<40){
	if($sexe == "femme"){
		$message="Bonjour bienvenue parmis nous";
	}
}
echo $message;
?> -->





