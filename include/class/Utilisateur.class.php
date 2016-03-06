<?php

class Utilisateur
{

	//Déclaration des attributs
	private $id_type_utilisateur;
	private $login;
	private $prenom;
	private $nom;
	private $password;
	private $email;
	private $date_de_naissance;


	/*
	 * GETER
	 */
	//Accesseurs login
	public function getIdTypeUtilisateur()
	{
		return $this->id_type_utilisateur;//retourne le login
	}

	public function getLogin()
	{
		return $this->login;//retourne le login
	}
	
	//Accesseurs prenom
	public function getPrenom()
	{
		return $this->prenom;//retourne le prénom
	}
	
	//Accesseurs nom
	public function getNom()
	{
		return $this->nom;//retourne le nom
	}
	
	//Accesseurs password
	public function getPassword()
	{
		return $this->password;//retourne le password
	}
	
	//Accesseurs email
	public function getEmail()
	{
		return $this->email;//retourne l'email
	}
	
	//Accesseurs date de naissance
	public function getDateNaissance()
	{
		return $this->date_de_naissance;//retourne le date_de_naissance
	}
	

	/*
	 * SETTER
	 */
	public function setIdTypeUtilisateur($id_type_utilisateur)
	{
		$this->id_type_utilisateur=$id_type_utilisateur;//écrit dans l'attribut login
	}

	public function setLogin($login)
	{
		$this->login=$login;//écrit dans l'attribut login
	}

	public function setNom($nom)
	{
		$this->nom=$nom;//écrit dans l'attribut prénom
	}

	public function setPrenom($prenom)
	{
		$this->prenom=$prenom;//écrit dans l'attribut nom
	}

	public function setPassword($password)
	{
		$this->password=$password;//écrit dans l'attribut password
	}

	public function setEmail($email)
	{
		$this->email=$email;//écrit dans l'attribut l'email
	}

	public function setDateNaissance($date_de_naissance)
	{
		$this->date_de_naissance=$date_de_naissance;//écrit dans l'attribut date_de_naissance
	}

}