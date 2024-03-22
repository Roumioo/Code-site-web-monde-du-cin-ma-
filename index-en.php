<?php

include('include/twig.php');
$twig = init_twig();

include('include/data-index-en.php');

echo $twig->render('base.twig', [
	'Accueil' => $Accueil,
	'titre' => 'Home Page',
	'lang' => 'en',
	
]);
