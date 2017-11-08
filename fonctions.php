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


<!-- //Exercice 6

<?php
$chaine='Always Coca Cola';

function abbr($chaine){
	$init=explode(" ",$chaine);
	foreach($init as $initiales){
		echo strtoupper($initiales[0]);
	}
}

echo abbr($chaine);

?> -->

<!--//Exercice 7
<?php
function remplace_ae($mot)
{
  $mot=str_split($mot);
  //$last_was_a=false;
  for ($i=0; $i <count($mot)-1 ; $i++) {
    if ($mot[$i] == "a") {
      if ($i <count($mot)) {//s'il reste une lettre après
        if ($mot[$i+1] == "e") {
          $mot[$i]="æ";
          //unset($mot[$i+1]);
          $mot[$i+1]="";
          $i++;
        }
      }
    }
  }
    return implode($mot);
}
echo remplace_ae("aeaeaeae");
function remplace_æ($mot)
{
  return str_replace("æ","ae",$mot);
}
echo "<br>";
echo str_replace("æ","ae","chænichthys");
?> -->

 <!-- //Exercice 8

 <?php
function feedback($message,$classe="info")
{
  echo "<div class=\"{$classe}\"> {$message} </div>";
}
feedback("Ceci est une erreur","Warning");
feedback("Ceci est une erreur sans classe");
?> -->

<!-- // Exercice 9

<?php

function word_generator($min,$max){
  $nbr_letter=rand($min,$max);
  $word_array=[];
  while ($nbr_letter >0) {
    $nbr_letter--;
    array_push($word_array,chr(rand(97,122)));
  }
  return implode($word_array);
}
echo "<br/>  <br/>";
echo "<a href=\"fonctions.php\">recommencer</a>";
echo "<br/>";
echo word_generator(1,5);
echo "<br/>";
echo word_generator(7,15);
?> -->

<!-- // Exercice 10
<?php
$en_minuscule=strtolower("ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!");
echo "$en_minuscule";
?> -->

<!-- //Exercice 11
<?php
function reverse_string($stringToReverse){
    $stringToReverse=str_split($stringToReverse);
    $reversed=[];
    for ($i=count($stringToReverse)-1; $i >=0 ; $i--) {
      array_push($reversed,$stringToReverse[$i]);
    }
    return implode($reversed);
}
echo reverse_string("Bisous");
echo "<br/> <br/>";
?> -->

// Exercice 12
<?php
$chanson="A
Bavas a ca ma sarpata a parda,
Ma la macha ma la macha
Bavas a ca ma sarpata a parda
Ma la macha a ravana.
";
$substitutions = array( 'E', 'I', 'O', 'U', 'OU', 'É', 'È', 'OI', 'UI', 'OUI', 'AN', 'IN', 'ON', 'UN', 'OIN');
echo "<br/>  <br/>";
echo "<br/>  <br/>";
for ($i=0; $i <count($substitutions)-1 ; $i++) {
  echo str_replace("a",$substitutions[$i],$chanson);
  echo "<br/>  <br/>";
}
?>



