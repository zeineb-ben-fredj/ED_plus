<?php
class produit{
	
private $id;
private $nom;
private $image;
private $prix;
private $id_cat;
private $date;
private $reference;
private $description;
private $note;

public  function __construct($id,$nom,$image,$prix,$id_cat,$date,$reference,$description,$note)
{
	 $this->id=$id;
    $this->nom=$nom;
    $this->image=$image;
    $this->prix=$prix;
    $this->id_cat=$id_cat;
    $this->date=$date;
    $this->reference=$reference;
    $this->description=$description;
    $this->note=$note;



}

 
function getid(){ 
   return $this->id;
}
function getnom(){
   return $this->nom;
}


function getimage() {
   return $this->image;
}

function getprix() {
   return $this->prix;
}


function getid_cat() {
   return $this->id_cat;
}


function getdate() {
   return $this->date;
}


function getreference() {
   return $this->reference;
}


function getdescription() {
   return $this->description;
}
function getnote() {
   return $this->note;
}




}
class p{
   private  $id ;
   private  $prix ;
   private $date;

public  function __construct($id,$prix,$£DATE)
{
   $this->id=$id;
   $this->prix=$prix;
   $this->date=$£DATE;

}
function getid(){
   return $this->id;
}

function getprix() {
   return $this->prix;
}


function getdate() {
   return $this->date;
}




}




?>