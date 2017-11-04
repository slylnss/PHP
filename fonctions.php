<!-- //Exercice 1

<?php
$prenom = "emilie";
function majuscule($prenom){

	$maj=ucfirst($prenom);
	return $maj;

}

echo majuscule($prenom);


?> -->

<!-- //Exercice 2

<?php

echo date('Y');

?> -->

<!-- //Exercice 3

<?php

echo date('c');

?> -->

<!-- //Exercice 4

<?php


$num1 = 54;
$num2 = 98;

function calc($num1,$num2){
	$result= $num1 + $num2;
	return $result;
}

echo calc($num1, $num2);

?> -->

<!-- // Exercice 5

<?php


$num1 = 71;
$num2 = 98;

function calcul($num1,$num2){
	if (is_int($num1) && is_int($num2)){
		$result= $num1 + $num2;
		return $result;
	}
	else{
		echo "Ce ne sont pas des chiffres";
	}
}


echo calcul($num1, $num2);

?> -->


//Exercice 6

<?php
$chaine='Vis Pour Ce Que Demain A A T Offrir!';

function abbr($chaine){
	$init=str_split($chaine,1);
	echo $init;
	foreach($chaine as $word){
	$abrev=substr($word,0,1);
	}
	return $abrev;
}

echo abbr($chaine);

?>