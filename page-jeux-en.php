<?php

include('include/twig.php');
$twig = init_twig();

include('include/data-jeux-en.php');


echo $twig->render('modele3-jeux.twig', [
	'titre' => 'Games',
	'lang' => 'en',
	'categorie_jeu' => $categoriejeux,

	'note' => 'Rating:',
    'synopsis' => 'Synopsis:',
    'sortie' => 'Release Date:',
    'avis' => 'REVIEWS',
    'fort' => 'Strengths',
    'faible' => 'Weaknesses',
    'aside_titre' => 'Other Games',
]);
