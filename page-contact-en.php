<?php

include('include/twig.php');
$twig = init_twig();

echo $twig->render('modele5-Contact.twig', [
	'titre' => 'Contact',
	'lang' => 'en',
	'nom' => 'Name:',
    'email' => 'Email:',
    'mdp' => 'Password:',
    'genre' => 'Gender:',
    'homme' => 'Male',
    'femme' => 'Female',
    'autre' => 'Other',
    'message' => 'Message:',
    'date' => 'Date of Birth:',
    'condition' => 'Accept Terms: Check for your own good',
    'envoie' => 'Send',
]);
