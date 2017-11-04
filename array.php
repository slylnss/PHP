<?php

$famille=["Papa", "Maman", "Pif", "Paf"];
echo '<pre>';
print_r ($famille);
echo '<pre>';
$plats=["Banane", "Cereales", "Legumes", "Bonbons"];
echo '<pre>';
print_r($plats);
echo '<pre>';
$média=["stranger things", "GI Jane", "The good wives", "L'age de raison"];
echo '<pre>';
print_r($média[3]);
echo '<pre>';
$papaest= array(
	'nom' => 'Alonsious',
	'prénom' => 'Francois',
	'age' => '73',
	'Adresse' => 'Rue de la ouilhabite',
	'Ville' => 'Moinsloin',	
	'ilsesentvieux' => true,
	'Passion' => array('Ses chats', 'La lecture', 'La musique', 'Le cinéma'));
$jesuis = array(
	'nom' => 'Alonsious',
	'prénom' => 'Syl',
	'age' => '35',
	'Adresse' => 'Rue de la oujhabite',
	'Ville' => 'Nonloin',	
	'Jemesensvieille' => false,
	'Passion' => array('Mes chats', 'Ma famille', 'Mes amis', 'Mes objectifs'),
	'mon pere'=> $papaest);

echo '<pre>';
print_r($jesuis);
echo '<pre>';

$hobbysyl=count($jesuis['Passion']);
$hobbypapa=count($papaest['Passion']);

$qthobby=$hobbysyl + $hobbypapa;

echo $qthobby;

array_push($jesuis['Passion'], 'Le cinéma');

echo '<pre>';
print_r($jesuis);
echo '<pre>';

$jesuis['nom'] = 'Dieudonné';

echo '<pre>';
print_r($jesuis);
echo '<pre>';

$amesoeur = array(
	'nom' => 'Elle',
	'prénom' => 'même',
	'age' => '37',		
	'Passiondelenfant' => array('Puzzle', 'La nature', 'Ses amis', 'Le cinéma')
);

$communs=array_intersect($jesuis['Passion'], $amesoeur['Passiondelenfant']);
echo '<pre>';
print_r($communs);
echo '<pre>';

$fusion=array_merge($jesuis['Passion'], $amesoeur['Passiondelenfant']);

echo '<pre>';
print_r($fusion);
echo '<pre>';


$webdevelopment=array(
	'frontend' => array (),
	'backend' => array ());
array_push($webdevelopment['frontend'], 'xhtml');
array_push($webdevelopment['backend'], 'Ruby on Rails');
array_push($webdevelopment['frontend'], 'CSS');
array_push($webdevelopment['frontend'], 'Flash');
array_push($webdevelopment['backend'], 'Javascript');

echo '<pre>';
print_r($webdevelopment['frontend']);
echo '<pre>';

echo '<pre>';
print_r($webdevelopment['backend']);
echo '<pre>';

array_splice($webdevelopment['frontend'], -0, 1,'html');

echo '<pre>';
print_r($webdevelopment['frontend']);
echo '<pre>';

unset($webdevelopment['frontend'][array_search('Flash', $webdevelopment['frontend'])]);

echo '<pre>';
print_r($webdevelopment['frontend']);
echo '<pre>';
?>