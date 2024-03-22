<?php

include('include/twig.php');
$twig = init_twig();

echo $twig->render('modele5-Contact.twig', [
	'titre' => 'Contacte',
	'lang' => 'fr',
	'nom' => 'Nom :',
	'email' => 'Email : ',
	'mdp' => 'Mot de passe : ',
	'genre' => 'Genre : ',
	'homme' => 'Homme',
	'femme' => 'Femme',
	'autre' => 'Autre',
	'message' => 'Message : ', 
	'date' => 'Date de naissance : ',
	'condition' => 'Accepter les conditions : Cocher pour votre bien',
	'envoie' => 'Envoyer',
]);
