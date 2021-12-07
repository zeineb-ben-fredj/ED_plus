<?php
	class files{
		private $idfichier=null;
		private $nomfichier=null;
		private $typefichier=null;
	    private $dateof_publication=null;
		private $lesson_level=null;
		private $descriptionfichier=null;
		private $uploadfichier=null;
		private $filepic=null;
		private $id_cc=null;
	
		function __construct($nomfichier,$typefichier,$dateof_publication,$lesson_level,$descriptionfichier, $uploadfichier, $filepic, $id_cc){
          //  $this->idfichier=$idfichier;
		    $this->nomfichier=$nomfichier;
			$this->typefichier=$typefichier;
			$this->dateof_publication=$dateof_publication;
			$this->lesson_level=$lesson_level;
			$this->descriptionfichier=$descriptionfichier;
			$this->uploadfichier=$uploadfichier;
			$this->filepic=$filepic;
			$this->id_cc=$id_cc;
		}
        

		function getidfichier(){
			return $this->idfichier;
		}
		function getnomfichier(){
			return $this->nomfichier;
		}
		function gettypefichier(){
			return $this->typefichier;
		}
		function getdateof_publication(){
			return $this->dateof_publication;
		}
		function getlesson_level(){
			return $this->lesson_level;
		}
		function getdescriptionfichier(){
			return $this->descriptionfichier;
		}
		function getuploadfichier(){
			return $this->uploadfichier;
		}
		function getfilepic(){
			return $this->filepic;
		}
		 function getid_cc(){
		 	return $this->id_cc;
		}

		function setnomfichier(string $nomfichier){ 
			$this->nomfichier=$nomfichier;
		}
		
		function settypefichier(string $typefichier){ 
			$this->typefichier=$typefichier;
		}
		function setdateof_publication(date $dateof_publication){
			$this->dateof_publication=$dateof_publication;
		}
		function setlesson_level(string $lesson_level){
			$this->lesson_level=$lesson_level;
		}
		function setdescriptionfichier(string $descriptionfichier){ 
			$this->descriptionfichier=$descriptionfichier;
		}
		function setuploadfichier(string $uploadfichier){ 
			$this->uploadfichier=$uploadfichier;
		}
		function setfilepic(string $filepic){ 
			$this->filepic=$filepic;
		}
		
		 function setid_cc(int $id_cc){ 
		 	$this->id_cc=$id_cc;
		 }
		
	}


?>