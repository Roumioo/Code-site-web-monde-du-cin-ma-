<?php

include('include/twig.php');
$twig = init_twig();

include('include/data-jeux-fr.php');


echo $twig->render('modele3-jeux.twig', [
	'titre' => 'Jeux',
	'lang' => 'fr',
	'categorie_jeu' => $categoriejeux,

	'note' => 'Note : ',
	'synopsis' => 'Synopsis : ',
	'sortie' => 'Sortie : ',
	'avis' => 'AVIS',
	'fort' => 'Points forts',
	'faible' => 'Points faibles',
	'aside_titre' => 'Autres jeux',
]);
