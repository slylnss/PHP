<!-- <h1>Bonjour</h1>

//Exercice 1

<h3> Ton emploi du temps est : 
<?php
$chambre_sale=false;

if ($chambre_sale == true){
	$message="Va ranger ta chambre";
}
else{
	$message="Parfait tu peux mater une série";
}

echo $message;
?>

</h3>

//Exercice 2

<h2>
<?php
$heure= (new DateTime())->format('H:i');
echo $heure;


if($heure>('05:00') AND $heure<('09:00')){
	$message =" Bonjour!";
}
else if($heure>('09:01') AND $heure<('12:00')){
	$message = " Bonne journée!";
}
else if($heure>('12:01') AND $heure<('16:00')){
	$message = " Bonne après-midi!";
}
else if ($heure>('16:01') AND $heure<('21:00')){
	$message = " Bonne soirée!";
}
else{
	$message = " Bonne nuit";
}
echo $message;
?>
</h2>

//Exercice 3 et 4
<html><body>
<form method="POST" action="conditions.php">
	Parles tu anglais?<br/>
	<input type="radio" name="langue" value="oui">Oui
	<input type="radio" name="langue" value="non">Non<br/>
	Homme ou Femme ?<br/>
	<input type="text" name="sexe"><br/>
	Quel est votre âge?<br/>
	<input type="number" name="age"><br/>	
	<input type="submit" value="ok">
</form>

<?php

$age = $_POST["age"];
$sexe = $_POST["sexe"];
$langue = $_POST["langue"];


if($langue != "oui"){
	if ($age<12){
		if($sexe!="femme"){
			echo "Salut petit!";
		}
		else{
			echo "Salut petite";
		}
	}
	else if ($age>12 AND $age<18){
		if($sexe!="femme"){
			echo "Salut l'ado!";
		}
		else{
			echo "Salut l'adote";
		}
	}
	else if($age>18 AND $age<115){
		if($sexe!="femme"){
			echo "Salut l'adulte";
		}
		else{
			echo "Salut l'adultesse";	
		}
	}
	else{
		if($sexe!="femme"){
			echo "Wow! T'es toujours vivant?";
		}
		else{
			echo "Wow! T'es toujours vivante?";
		}
	}
}
else{
	if ($age<12){
		if($sexe!="femme"){
			echo "Hello Boy!";
		}
		else{
			echo "Hello Girl";
		}
	}
	else if ($age>12 AND $age<18){
		if($sexe!="femme"){
			echo "Hello teenage boy!";
		}
		else{
			echo "Hello teenage girl";
		}
	}
	else if($age>18 AND $age<115){
		if($sexe!="femme"){
			echo "Hello Sir";
		}
		else{
			echo "Hello Lady";	
		}
	}
	else{
		if($sexe!="femme"){
			echo "Wow! Still alive, old man?";
		}
		else{
			echo "Wow! Still alive, old lady?";
		}
	}
}
?>
 -->



<!-- //Exercice 5

<html>
<body>
<form method="post" action="conditions.php">
Ta note : <input type="text" name="note"><br/>
<input type="submit" value="ok">
</form>
</body>
</html>

<?php

$note= $_POST["note"];

if($note <= 3 ){
	$message= "Ce travail est nul";
}
else if ($note>=5 AND $note<=9 ){
	$message = "Ce travail n'est pas terrible";
} 
else if ($note == 10) {
	$message= "Tout juste!";
}
else if ($note>=11 AND $note<=14){
	$message= "C'est pas mal";
}
else if($note>=15 AND $note<=18){
	$message= "Bravo";
}
else if ($note>=19 AND $note<=20){
	$message = "Police! Arrêter ce tricheur!";
}
else{
	$message="Note non valide";
}
echo $message;

?> -->


