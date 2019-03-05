<?php

class Produit{
	/**
	*
	*/
	private $nom;
	private $description;
	private $prix;

	public function affichageduNom():string
	{
		return $this->nom;
	}
	public function changementduNom(string $newNom):void
	{
		$this->nom = $newNom;
	}

	public function getDescription():string
	{
		return $this->description;
	}
	public function setDescription(string $newDescription):void
	{
		$this->description = $newDescription;
	}

		public function getPrix():float
	{
		return $this->prix;
	}
	public function setPrix(float $newPrix):void
	{
		if($newPrix < 0){
			die('PAS BIEN');
		}
		$this->prix = $newPrix;
	}
	
}


?>