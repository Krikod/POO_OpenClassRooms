<?php

class Personnage
{
	private $_force; 
	private $_experience;
	private $_degats;
	private $_localisation;

// Déclaration des constantes en rapport avec la force
	const FORCE_PETITE = 20;
	const FORCE_MOYENNE = 50;
	const FORCE_GRANDE = 80;

// Variable static PRIVEE:
	private static $_texteADire = 'Je vais tous vous tuer !';

public function __construct($forceInitiale)
{
	// On assigne la valeur d'un attribut uniquement depuis son setter !
	$this->setForce($forceInitiale);
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

public function setForce($force)
{
	// On vérifie qu'on a bien l'une des CONSTANTES
	if (in_array($force, [self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE]))
	{
		$this->_force = $force;
	}
}
// "static" peut être placé avant visibilité "public" !!
	public static function parler()
	{
		echo self::$_texteADire;
	} 
}


/*
// EXERCICE
// Objectif de la classe: afficher le nombre de fois ou la classe a été instanciée

class Compteur
{

	private static $_compteur = 0;

	public function __construct ()
	{
		self::$_compteur++;
	}

	public static function getCompteur()
	{
		return self::$_compteur;
	}
}
*/

/*
*****************************************************************************************
// underscore pour chaque nom d'élément privé, majuscule au nom de classe: notation PEAR.

class Personnage
{
	// On déclare les attributs
	private $_force; 
	private $_experience;
	private $_degats;
	private $_localisation;

// On déclare les méthodes
// Dans la méthode, on accède à l'attribut _* à l'aide de la pseudo-variable $this pour le modifier.
	
// Dans le constructeur, les valeurs sont initialisées en appelant les mutateurs correspondant. 
public function __construct($force, $degats)
{
	echo 'Voici le constructeur !';
	$this->setForce($force);
	$this->setDegats($degats);
	$this->_experience = 1;
}

// On exige un objet Personnage en param
	public function frapper(Personnage $persoAFrapper)
	{
//$this est l'objet utilisé, le même que $perso

// Ajoute la valeur de la force du personnage qui frappe à l'attribut$_degatsdu personnage frappé. 
		$persoAFrapper->_degats += $this->_force;
	}

//Comme l'attribut _experience est privé, on ne peut changer sa valeur à l'extérieur de la classe qu'avec une méthode le permettant
	public function gagnerExperience()
	{
		// $this->_experience = $this->_experience + 1;
		// $this->_experience += 1;
		$this->_experience++;
	}


// LISTE DES MUTATEURS (SETTERS), chargés de modifier les attributs $_*
	public function setForce($force)
	{
		if (!is_int($force))
		{
			trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
			return;
		}

		if ($force > 100) 
		{
			trigger_error('La force d\'un personnage ne peut dépasser 100', E_USER_WARNING);
			return;
		}
		$this->_force = $force;
	}

	public function setExperience($experience)
	{
		if (!is_int($experience))
		{
			trigger_error('L\'expérience d\'un personnage doit être un nombre entier', E_USER_WARNING);
			return;
		}

		if ($experience > 100) 
		{
			trigger_error('L\'expérience d\'un personnage ne peut dépasser 100', E_USER_WARNING);
			return;
		}
		$this->_experience = $experience;
	}

	public function setDegats($degats)
	{
		if (!is_int($degats))
		{
			trigger_error('Le niveau de dégats d\'un personnage doit être un nombre entier', E_USER_WARNING);
			return;
		}
		$this->_degats = $degats;	}

//LISTE DES ASSESSEURS (GETTERS).
	public function degats()
	{
		return $this->_degats;
	}

	public function force()
	{
		return $this->_force;
	}

	public function experience()
	{
		return $this->_experience;
	}


// AUTRES FONCTIONS
	public function parler() 
	{
		echo 'Je suis un personnage';
	}

	public function deplacer() 
	{

	}
}

*/