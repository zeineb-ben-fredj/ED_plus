<?php
	class question{
		private $Id_Question=null;
		private $Questions=null;
		private $Reponse_Correcte=null;
		private $Reponse_Fausse=null;
		private $idtable=null;
		
       

		
		function __construct($Questions,$Reponse_Correcte,$Reponse_Fausse,$idtable){
            //$this->Id_Question=$Id_Question;
			$this->Questions=$Questions;
			$this->Reponse_Correcte=$Reponse_Correcte;
			$this->Reponse_Fausse=$Reponse_Fausse;
			$this->idtable=$idtable;
			
			
		}
        

		function getId_Question(){
			return $this->Id_Question;
		}
		function getQuestions(){
			return $this->Questions;
		}
		function getReponse_Correcte(){
			return $this->Reponse_Correcte;
		}
		function getReponse_Fausse(){
			return $this->Reponse_Fausse;
		}
		function getidtable(){
			return $this->idtable;
		}
		
		
		
		function setQuestions(string $Questions){ 
			$this->Questions=$Questions;
		}
		function setReponse_Correcte(string $Reponse_Correcte){
			$this->Reponse_Correcte=$Reponse_Correcte;
		}
		function setReponse_Fausse(string $Reponse_Fausse){
			$this->Reponse_Fausse=$Reponse_Fausse;
		}
		function setidtable(int $idtable){ 
			$this->idtable=$idtable;
		}
		
		
		
		
	}


?>