<?php

include('include/twig.php');
$twig = init_twig();

include('include/data-acteur-fr.php');

echo $twig->render('modele2-acteur.twig', [
	'titre' => 'Acteur',
	'lang' => 'fr',
	'categorie_act' => $categorieActeur,

	'metier' => 'Métier : ',
	'nationalité' => 'Nationalité : ',
	'naissance' => 'Naissance : ',
	'age' => 'Âge',
	'carrière' => 'ans de carrière',
	'tournage' => 'films et séries tournés',
	'prix' => 'Prix',
	'bio' => 'Biographie',
	'plus' => 'Voir plus',
	'film' => 'Film de l\'acteur',
	'tourné_avec' => 'A tournée avec...',
	'aside_titre' => 'Autres acteurs',
]);
