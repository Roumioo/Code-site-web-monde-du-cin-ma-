<?php

include('include/twig.php');
$twig = init_twig();

include('include/data-acteur-en.php');

echo $twig->render('modele2-acteur.twig', [
	'titre' => 'Actor',
	'lang' => 'en',
	'categorie_act' => $categorieActeur,

	'metier' => 'Occupation:',
    'nationalité' => 'Nationality:',
    'naissance' => 'Birth:',
    'age' => 'Age',
    'carrière' => 'Years of Career',
    'tournage' => 'Films and Series shot',
    'prix' => 'Awards',
    'bio' => 'Biography',
    'plus' => 'See more',
    'film' => 'Actor\'s Film',
    'tourné_avec' => 'Has worked with...',
    'aside_titre' => 'Other Actors',
]);
