<?php

class VoitureDiesel extends Voiture{

    private $pollution;

    public function rouler(int $kilometre)
    {
        $this->km = $this->km + $kilometre;
        $this->pollution = $this->pollution + $kilometre;
        echo 'J\'ai roulé '.$kilometre.' km et (kilometrage '.$this->km.'km)';
        echo 'J\'ai pollué '.$this->pollution;
    }

    public function setPollution(int $pollution):void
    {
        $this->pollution = $pollution;
    }

    public function getPollution():int
    {
        return $this->pollution;
    }
}