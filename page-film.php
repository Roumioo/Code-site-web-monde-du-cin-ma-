<?php

include('include/twig.php');
$twig = init_twig();

include('include/data-film-fr.php');


echo $twig->render('modele1-film.twig', [
	'titre' => 'Film',
	'lang' => 'fr',
	'categorie_film' => $categoriefilm,

	'realisé' => 'Réalisé par',
	'resumé' => 'Résumé : ',
	'equipe' => 'Equipe',
	'role' => 'Rôle',
	'nom' => 'Noms',
	'comm_popu' => 'Commentaires Populaires',
	'commmenté' => 'Commenté Par ',
	'aside_titre' => 'Autre films',

]);
