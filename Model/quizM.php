<?php
	class quiz{
		private $idquiz=null;
		private $quiz_nom=null;
		private $date_de_creation=null;
		private $descriptions=null;
		private $images=null;
		
       	

		
		function __construct($quiz_nom,$date_de_creation,$descriptions,$images){
            //$this->idquiz=$idquiz;
			$this->quiz_nom=$quiz_nom;
			$this->date_de_creation=$date_de_creation;
			$this->descriptions=$descriptions;
			$this->images=$images;
			
			
		}
        

		function getidquiz(){
			return $this->idquiz;
		}
		function getquiz_nom(){
			return $this->quiz_nom;
		}
		function getdate_de_creation(){
			return $this->date_de_creation;
		}
		function getdescriptions(){
			return $this->descriptions;
		}
		function getimages(){
			return $this->images;
		}
		
		
		
		function setquiz_nom(int $quiz_nom){ 
			$this->quiz_nom=$quiz_nom;
		}
		function setdate_de_creation(date $date_de_creation){
			$this->date_de_creation=$date_de_creation;
		}
		function setdescriptions(string $descriptions){
			$this->descriptions=$descriptions;
		}
		function setimages(string $images){ 
			$this->images=$images;
		}
		
		
		
		
	}


?>