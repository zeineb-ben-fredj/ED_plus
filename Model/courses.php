<?php
	class courses{
		private $idcourse=null;
		private $subjects=null;
		private $numof_students=null;
		private $dateof_creation=null;
		private $descriptionsC=null;
		private $pictureC=null;
        
		
		function __construct($subjects,$numof_students,$dateof_creation,$descriptionsC, $pictureC){
            //$this->idcourse=$idcourse;
			$this->subjects=$subjects;
			$this->numof_students=$numof_students;
			$this->dateof_creation=$dateof_creation;
			$this->descriptionsC=$descriptionsC;
			$this->pictureC=$pictureC;
			
		}
        

		function getidcourse(){
			return $this->idcourse;
		}
		function getsubjects(){
			return $this->subjects;
		}
		function getnumof_students(){
			return $this->numof_students;
		}
		function getdateof_creation(){
			return $this->dateof_creation;
		}
		function getdescriptionsC(){
			return $this->descriptionsC;
		}
		function getpictureC(){
			return $this->pictureC;
		}
		
		
		function setsubjects(string $subjects){ 
			$this->subjects=$subjects;
		}
		function setnumof_students(int $numof_students){
			$this->numof_students=$numof_students;
		}
		function setdateof_creation(date $dateof_creation){
			$this->dateof_creation=$dateof_creation;
		}
		function setdescriptionsC(string $descriptionsC){ 
			$this->descriptionsC=$descriptionsC;
		}
		function setpictureC(string $pictureC){ 
			$this->pictureC=$pictureC;
		}
		
		
		
		
	}


?>