<?php

include('include/twig.php');
$twig = init_twig();

include('include/data-propos-en.php');

echo $twig->render('modele4-apropos.twig', [
	'titre' => 'About',
	'Propos' => $Propos,
	'lang' => 'en',
]);
