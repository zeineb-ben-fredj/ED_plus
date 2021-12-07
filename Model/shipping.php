<?php
	class shipping{
		private $id_shipping=null;
		private $ref_cmd=null;
		private $Date_livr=null;
		private $Adr_livr=null;
		function __construct($id_shipping,$ref_cmd,$Date_livr,$Adr_livr){
            $this->id_shipping=$id_shipping;
			$this->ref_cmd=$ref_cmd;
			$this->Date_livr=$Date_livr;
			$this->Adr_livr=$Adr_livr;
		}
        // function get(var p)
        // {
            
        //     return p;
        // }

		 function getidshipping(){
		 	return $this->id_shipping;
		}
		function getrefcmd(){
			return $this->ref_cmd;
		}
		function getdatelivr(){
			return $this->Date_livr;
		}
		function getadrlivr(){
			return $this->Adr_livr;
		}
	
		function setrefcmd(int $ref_cmd){ //type date???? nn fct
			$this->ref_cmd=$ref_cmd;
		}
		function setdatelivr(string $Date_livr){
			$this->Date_livr=$Date_livr;
		}
		function setadrlivr(string $Adr_livr){
			$this->Adr_livr=$Adr_livr;
		}
		
		function setidshipping(string $id_shipping){
			$this->id_shipping=$id_shipping;
		}
		
		
	}


?>