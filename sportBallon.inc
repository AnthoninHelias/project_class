<?php
// ici l'extension a été override pour devenir .php
class sportBallon extends sport
{
    private $largeur;
    private $longeur;


    public function __construct(string $nomSport,int $nbJoueurs, int $largeur,int $longeur)
    {
        parent::__construct($nomSport,$nbJoueurs);
        $this->largeur = $largeur;
        $this->longeur = $longeur;
    }

    /**
     * @return int
     */
    public function getLargeur(): int
    {
        return $this->largeur;
    }

    /**
     * @return int
     */
    public function getLongeur(): int
    {
        return $this->longeur;
    }
    public function getDescription(): string
    {
        return 'Description : nom du sport :  '.$this->nomSport.'   Nombre de joueurs :  '.$this->nbJoueurs.'   Largeur :  '.$this->largeur.'  Longueur :  '.$this->longeur.'<br>';
    }


}