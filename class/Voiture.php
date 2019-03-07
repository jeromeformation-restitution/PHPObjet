<?php

class Voiture{

    protected $marque;
    protected $moteur;
    protected $km;

    public function __construct(string $marque, string $moteur)
    {
        $this->marque = $marque;
        $this->moteur = $moteur;
        $this->km = 0;

    }

    public function rouler(int $kilometre)
    {
        if ($kilometre<0){
            die ('je ne peux pas rouler');
        }
        $this->km = $this->km + $kilometre;
    }

    public function setMarque(string $marque):void
    {
        $this->marque = $marque;
    }

    public function getMarque():string
    {
        return $this->marque;
    }

    public function setMoteur(string $moteur):void
    {
        $this->moteur = $moteur;
    }

    public function getMoteur():string
    {
        return $this->moteur;
    }

    public function setKm(int $kilometre):void
    {
        $this->km = $kilometre;
    }

    public function getKm():int
    {
        return $this->km;
    }


}