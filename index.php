<?php

function chargerClasse($classe)
{
	require $classe . '.php';
}
include_once 'Personnage.php';

// On envoie une FORCE_MOYENNE en guise de force initiale
$perso = new Personnage(Personnage::FORCE_MOYENNE);

// Appel de la méthode static depuis un objet, mais même chose de faire (moins bien):
		// $perso = new Personnage(Personnage::FORCE_MOYENNE);
		// $perso->parler();
Personnage::parler();


/*
// EXERCICE

$test1 = new Compteur;
$test2 = new Compteur;
$test3 = new Compteur;
$test4 = new Compteur;


echo Compteur::getCompteur();

*/










/*

// include_once 'Personnage.php'; (selon WCS)
// require 'Personnage.php'; //dans OCR

function chargerClasse($classe)
{
	require $classe . '.php';
}
// On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.
spl_autoload_register('chargerClasse');

// On instancie (on crée une instance de) la classe Personnage
//on appelle la méthode de l'objet avec l'opérateur ->, qui sert généralement à atteindre un attribut.
// ==> « va chercher l'objet $perso, et invoque la méthode parler() sur cet objet ». 

$perso1 = new Personnage(60, 0); // force et dégats en param, comme le demande le __construct
$perso2 = new Personnage(100, 10);

$perso1->setForce(10);
$perso1->setExperience(2);

$perso2->setForce(90);
$perso2->setExperience(58);

$perso1->frapper($perso2);
$perso1->gagnerExperience();

$perso2->frapper($perso1);
$perso2->gagnerExperience();


echo 'Le personnage 1 a ', $perso1->force(), ' de force, tandis que le personage 2 a ', $perso2->force(), ' de force.<br>';
echo 'Le personnage 1 a ', $perso1->experience(), ' d\'experience, tandis que le personnage 2 a ', $perso2->experience(), ' d\'experience.<br>';
echo 'Le personnage 1 a ', $perso1->degats(), ' de degats, tandis que le personnage 2 a ', $perso2->degats(), ' de dégats.<br>';

*/
