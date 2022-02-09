<?php

class sport
{
    private $nomSport;
    private $nbJoueurs;

    /**
     * @param $nomSport
     * @param $nbJoueurs
     */
    public function __construct(string $nomSport,int $nbJoueurs)
    {
        $this->nomSport = $nomSport;
        $this->nbJoueurs = $nbJoueurs;
    }
    public function getDescription():string
    {
        return 'Description : nom du sport :  '.$this->nomSport.'   Nombre de joueurs :  '.$this->nbJoueurs.'<br>';
    }
}