<?php
	class orders{
	    private $ref_cmd=null;
		private $Date_conf=null;
		private $montant_cmd=null;
		private $mode_paiement=null;
		private $etat=null;
		
		function __construct($ref_cmd,$Date_conf,$montant_cmd,$mode_paiement,$etat){
			$this->ref_cmd=$ref_cmd;
			$this->Date_conf=$Date_conf;
			$this->montant_cmd=$montant_cmd;
			$this->mode_paiement=$mode_paiement;
			$this->etat=$etat;
			
		}
        // function get(var p)
        // {
            
        //     return p;
        // }

		function getref(){
			return $this->ref_cmd;
		}
		function getdateconf(){
			return $this->Date_conf;
		}
		function getmontant(){
			return $this->montant_cmd;
		}
		function getmodep(){
			return $this->mode_paiement;
		}
		function getetat(){
			return $this->etat;
		}
		
		
		function setdateconf(string $Date_conf){ //type date???? nn fct
			$this->Date_conf=$Date_conf;
		}
		function setmontantcmd(float $montant_cmd){
			$this->montant_cmd=$montant_cmd;
		}
		function setmodepaiement(string $mode_paiement){
			$this->mode_paiement=$mode_paiement;
		}
		function setetat(string $etat){
			$this->etat=$etat;
		}
		function setref(string $ref_cmd){
			$this->ref_cmd=$ref_cmd;
		}
		
		
	}


?>