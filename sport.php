<?php

class sport implements ISport
{
    protected $nomSport;
    protected $nbJoueurs;

    /**
     * @param $nomSport
     * @param $nbJoueurs
     */
    public function __construct(string $nomSport,int $nbJoueurs)
    {
        $this->nomSport = $nomSport;
        $this->nbJoueurs = $nbJoueurs;
    }

    /**
     * @return string
     */
    public function getNomSport(): string
    {
        return $this->nomSport;
    }

    public function getDescription():string
    {
        return 'Description : nom du sport :  '.$this->nomSport.'   Nombre de joueurs :  '.$this->nbJoueurs.'<br>';
    }
}