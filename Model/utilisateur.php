<?php
	class utilisateur{
		private $Nom=null;
		private $Prenom=null;
		private $Cin=null;
		private $Daten=null;
		private $Type1=null;
		private $Email=null;
		private $Tel=null;
		private $Motpasse=null;

		function __construct($Nom, $Prenom, $Cin, $Daten,$Type1,$Email,$Tel,$Motpasse){
            $this->Nom=$Nom;
			$this->Prenom=$Prenom;
			$this->Cin=$Cin;
			$this->Daten=$Daten;
			$this->Type1=$Type1;
			$this->Email=$Email;
			$this->Tel=$Tel;
			$this->Motpasse=$Motpasse;
		}
        // function get(var p)
        // {
            
        //     return p;
        // }
		function getNom(){
			return $this->Nom;
		}
		function getPrenom(){
			return $this->Prenom;
		}
		function getCin(){
			return $this->Cin;	}
		function getDaten(){
			return $this->Daten;
		}
		function getType1(){
			return $this->Type1;
		}
		function getEmail(){
			return $this->Email;
		}
		function getTel(){
			return $this->Tel;
		}
		function getMotpasse(){
			return $this->Motpasse;
		}
		function setNom( $Nom){
			$this->Nom=$Nom;
		}
		function setPrenom(string $Prenom){
			$this->Prenom=$Prenom;
		}
		function setDaten(string $Daten){
			$this->Daten=$Daten;
		}
		function setType(string $Type1){
			$this->Type=$Type1;
		}
		function setEmail(string $Email){
			$this->Email=$Email;
		}
		function setTel(string $Tel){
			$this->Tel=$Tel;
		}
		function setMotpasse(string $Motpasse){
			$this->Motpasse=$Motpasse;
		}
		
	}


?>