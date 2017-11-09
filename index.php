<?php

include_once 'Personnage.php';

// On instancie (on crée une instance de) la classe Personnage
//on appelle la méthode de l'objet avec l'opérateur ->, qui sert généralement à atteindre un attribut.
// ==> « va chercher l'objet $perso, et invoque la méthode parler() sur cet objet ». 

$perso1 = new Personnage;
$perso2 = new Personnage;

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

