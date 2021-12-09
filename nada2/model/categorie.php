<?php
class categorie{
	
private $id;
private $libelle;
private $image;

public  function __construct($id,$libelle,$image)
{
	 $this->id=$id;
    $this->libelle=$libelle;
	$this->image=$image;
}

public  function getid()
{
	return $this->id;
}
public function getlibelle()
{
	return $this->libelle;
}

public function getimage()
{
	return $this->image;
}



}
class c{
	
	private $id;
	private $libelle;
	
	
	public  function __construct($id,$libelle)
	{
		 $this->id=$id;
		$this->libelle=$libelle;
	
	}
	
	public  function getid()
	{
		return $this->id;
	}
	public function getlibelle()
	{
		return $this->libelle;
	}
	
	
	
	}
	
	



?>