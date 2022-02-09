<?php

class SportRelais extends sport
{
    private  $distance;


    public function __construct(string $nomSport,int $nbJoueurs,int $distance)
    {
        parent::__construct($nomSport,$nbJoueurs);
        $this->distance = $distance;
    }


    public function getDistance()
    {
        return $this->distance;
    }

    public function getDescription(): string
    {
        return 'Description : nom du sport :  '.$this->nomSport.'   Nombre de joueurs :  '.$this->nbJoueurs.'   Distance :  '.$this->distance.'<br>';
    }

}