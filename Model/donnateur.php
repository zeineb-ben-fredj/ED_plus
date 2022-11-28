<?php
	class donnateur{
		private $iddonnateur=null;
		private $nom=null;
		private $adresse=null;
		private $phone=null;
		private $email=null;
		private $montant=null;
		private $formation=null;

		
		
		function __construct($nom, $adresse, $phone, $email,$montant,$formation){
			
			$this->iddonnateur=$iddonnateur;
			$this->nom=$nom;
			$this->adresse=$adresse;
			$this->phone=$phone;
			$this->email=$email;
			$this->montant=$montant;
			$this->formation=$formation;
		}
		function getiddonnateur(){
			return $this->iddonnateur;
		}
		function getnom(){
			return $this->nom;
		}
	
		function getadresse(){
			return $this->adresse;
		}
		function getphone(){
			return $this->phone;
		}
		function getemail(){
			return $this->email;
		}
		
		function getmontant(){
			return $this->montant;
		}

		function getformation(){
			return $this->formation;
		}
		function setiddonnateur(string $iddonnateur){
			$this->iddonnateur=$iddonnateur;
		}
		function setnom(string $nom){
			$this->nom=$nom;
		}
	
		function setadresse(string $adresse){
			$this->adresse=$adresse;
		}
		function setphone(string $phone){
			$this->phone=$phone;
		}
		function setemail(string $email){
			$this->email=$email;
		}
		
		function setmontant(string $montant){
			$this->montant=$montant;
		}

		function setformation(string $formation){
			$this->formation=$formation;
		}
	}


?>