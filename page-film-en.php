<?php

include('include/twig.php');
$twig = init_twig();

include('include/data-film-en.php');


echo $twig->render('modele1-film.twig', [
	'titre' => 'Movie',
	'lang' => 'en',
	'categorie_film' => $categoriefilm,

	'realisé' => 'Directed by',
	'resumé' => 'Summary : ',
	'equipe' => 'Team',
	'role' => 'Role',
	'nom' => 'Names',
	'comm_popu' => 'Popular Comments',
	'commmenté' => 'Commented by ',
	'aside_titre' => 'Other movies',
]);
