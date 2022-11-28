<?php
	class orders{
	    private $ref_cmd=null;
		private $id_prod=null;
		private $id_client=null;
		private $qtt_prod=null;
		private $Date_conf=null;
		private $montant_cmd=null;
		private $mode_paiement=null;
		private $etat=null;
		
		function __construct($ref_cmd,$id_prod,$id_client,$qtt_prod,$Date_conf,$montant_cmd,$mode_paiement,$etat){
			$this->ref_cmd=$ref_cmd;
			$this->id_prod=$id_prod;
			$this->id_client=$id_client;
			$this->qtt_prod=$qtt_prod;
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
		function getidprod(){
			return $this->id_prod;
		}
		function getidclient(){
			return $this->id_client;
		}
		function getqttprod(){
			return $this->qtt_prod;
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
		
		function setidprod(string $id_prod){ //type date???? nn fct
			$this->id_prod=$id_prod;
		}
		function setidclient(string $id_client){ //type date???? nn fct
			$this->id_client=$id_client;
		}
		function setqttprod(string $qtt_prod){ //type date???? nn fct
			$this->qtt_prod=$qtt_prod;
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