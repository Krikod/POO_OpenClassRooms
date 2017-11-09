<?php

include_once 'Personnage.php';

// On instancie (on crée une instance de) la classe Personnage

$perso = new Personnage;
//on appelle la méthode de l'objet avec l'opérateur ->, qui sert généralement à atteindre un attribut.
// ==> « va chercher l'objet $perso, et invoque la méthode parler() sur cet objet ». 
$perso->parler();