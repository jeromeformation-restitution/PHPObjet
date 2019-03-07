<?php

class VoitureElec extends Voiture{

    private $energie;


    public function setEnergie(int $energie):void
    {
        if($energie<0){
            $this->energie=0;
        }elseif($energie>100){
           $this->energie=100;
        }
        else{
             $this->energie = $energie;
        }
    }

    public function getEnergie():int
    {
        return $this->energie;
       
    }

    public function rouler(int $kilometre)
    {
        parent::rouler($kilometre);
        $this->setEnergie($this->energie-$kilometre);
        if($this->energie<$kilometre){
            echo 'je ne peux plus rouler';
        }else{
            echo 'J\'ai roulé '.$kilometre.' km et (kilometrage '.$this->km.'km)';
            echo 'J\'ai gardé '.$this->energie;
        }
       
        
    }
    public function __construct(string $marque, string $moteur)
    {
        parent::__construct($marque,$moteur);
    
        $this->setEnergie(100);
    }
    
    public function recharger(int $recharge = 100):void
    {
        $this->setEnergie($this->energie + $recharge);
    }
}