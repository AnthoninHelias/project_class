<?php

class club implements comparable
{

    private $idClub;
    private $nomClub;
    private $nbPoints;
    private $LesSports;
    /**
     * @param $idClub
     * @param $nomClub
     * @param $nbPoints
     */
    public function __construct(int $idClub,string $nomClub,int $nbPoints)
    {
        $this->idClub = $idClub;
        $this->nomClub = $nomClub;
        $this->nbPoints = $nbPoints;
    }

    /**
     * @return mixed
     */
    public function getLesSports():array
    {
        return $this->LesSports;
    }

    public function AjouterSport(sport $sport)
    {
        $this->LesSports=$sport;
    }

    /**
     * @return int
     */
    public function getIdClub(): int
    {
        return $this->idClub;
    }

    /**
     * @return string
     */
    public function getNomClub(): string
    {
        return $this->nomClub;
    }

    /**
     * @return int
     */
    public function getNbPoints(): int
    {
        return $this->nbPoints;
    }


    public function compareTo(club $club)
    {
        // TODO: Implement compareTo() method.
    }
}