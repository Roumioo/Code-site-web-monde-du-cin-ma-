<?php

include('include/twig.php');
$twig = init_twig();

include('include/data-propos-fr.php');

echo $twig->render('modele4-apropos.twig', [
	'titre' => 'A propos',
	'Propos' => $Propos,
	'lang' => 'fr',
]);
