<?php
// underscore pour chaque nom d'élément privé, majuscule au nom de classe: notation PEAR.

class Personnage
{
	// On déclare les attributs

	private $_force; 
	private $_localisation;
	private $_experience;
	private $_degats;

	// On déclare les méthodes

	public function parler() {
		echo 'Je suis un personnage';
	}

	public function deplacer() 
	{

	}

	public function frapper()
	{

	}

	public function gagnerExperience()
	{

	}
}