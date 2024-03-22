<?php

include('include/twig.php');
$twig = init_twig();

include('include/data-index-fr.php');

echo $twig->render('base.twig', [
	'Accueil' => $Accueil,
	'titre' => 'Page d\'accueil',
	'lang' => 'fr',
]);
