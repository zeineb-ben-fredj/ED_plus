<?php
	class formation{
		private $idformation=null;
		private $nom=null;
		private $lesson=null;
		private $montant=null;
		private $photo=null;
		
		
		function __construct($nom, $lesson, $montant,$photo){
			$this->nom=$nom;
			$this->lesson=$lesson;
			$this->montant=$montant;
			$this->photo=$photo;
		}
		function getidformation(){
			return $this->idformation;
		}
		function getnom(){
			return $this->nom;
		}
		function getlesson(){
			return $this->lesson;
		}
		function getmontant(){
			return $this->montant;
		}
		function getphoto(){
			return $this->photo;
		}

		function setidformation(string $idformation){
			$this->idformation=$idformation;
		}
		function setnom(string $nom){
			$this->nom=$nom;
		}
	
		function setlesson(string $lesson){
			$this->lesson=$lesson;
		}
		
		function setmontant(string $montant){
			$this->montant=$montant;
		}
		function setphoto(string $photo){
			$this->photo=$photo;
		}
		
	}


?>