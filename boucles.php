<!-- //Exercice 1

<?php
$pronoms_personnels = array ('Je', 'Tu', 'Il/Elle', 'Nous', 'Vous', 'Ils/Elles');

$code = "code";
foreach ($pronoms_personnels as $pronom_perso) {
		echo $pronom_perso;
		echo " ";
			switch ($pronom_perso){
			case 'Je':
			$code = "codes";
			echo $code;
			break;
			case 'Tu':
			$code = "codes";
			echo $code;
			break;
			case 'Il/Elle':
			$code = "code";
			echo $code;
			break;
			case 'Nous':
			$code = "codons";
			echo $code;
			break;
			case 'Vous':
			$code = "codez";
			echo $code;
			break;
			case 'Ils/Elles':
			$code ="codent";
			echo $code;
			break;

		};
		
	echo "<br/>";
};

?> -->

<!-- //Exercice 2

<?php

$nb=1;
echo"<br/>";
while($nb != 121){
	echo $nb;
	echo "<br/>";
	$nb++;
}

for($i=0; $i!=121; $i++)
{
	echo $i;
	echo "<br/>";
}

?> -->

<!--//Exercice 3
 
<?php

$team = array ('Laureen', 'Vincent', 'Antoine', 'Caro', 'Mehdi', 'Nico2', 'Gaetan', 'Alexandre');
$j=count($team);
for ($i=0; $i<$j; $i++){
	echo $team[$i];
	echo"<br/>";
}

?> --> 

//Exercice 4

<html>
<body>
	<form method="POST" action="boucles.php">
		Ton pays : 
		<select multiple>		

<?php

$pays=array('BE'=>'Belgique','FR'=> 'France', 'DE'=>'Allemagne','ES'=>'Espagne','IT'=> 'Italie', 'LU'=>'Luxembourg','PB'=> 'Pays-Bas','GB'=> 'Angleterre', 'IS'=> 'Islande', 'IR'=>'Irlande');

foreach($pays as $key){
	echo "<option value =";
	echo $key;
	echo ">";
	echo "$key";
	echo "</option>";
}

?>
</select>
</form>
</body>
</html>

