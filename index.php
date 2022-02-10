<?php
include 'ISport.inc';
include 'comparable.inc';
include 'sport.php';
include 'sportRelais.php';
include 'sportBallon.inc';
include 'club.php';
// ici l'extension sportBallon a été override pour devenir .php

echo "projet heritage et interface <br>";
/**$listSport=new Sport("Football", 11);
echo $listSport->getDescription();
$listSportRelais = new sportRelais("4*100",1,400);
echo $listSportRelais->getDescription();
$listSportBallon= new sportBallon("Handball",8,40,50);
echo $listSportBallon->getDescription();*/


$listSport[] = new Sport("Football", 11);
$listSport[] = new sportRelais("4*100m",1,400);
$listSport[] = new sportBallon("Handball",8,40,50);
$listSport[] = new sportBallon("Basket",70,70,5);
$listSport[] = new sportRelais("100m",1,100);
$listSport[] = new sportRelais("3*500m",1,1500);
$listSport[] = new Sport("Boxe", 2);
$listSport[] = new Sport("Karate", 2);
$listSport[] = new Sport("Judo", 2);
$listSport[] = new Sport("LOL", 10);
$listSport[] = new Sport("Fortnite", 100);
$listSport[] = new sportBallon("Football americain",12,100,50);

foreach($listSport as $keyListSport => $valueListSport)
{
    echo $valueListSport->getNomSport().'  '.$valueListSport->getDescription().'<br>';
}
$listClub[]=new club(455,'St_Etienne',777);
$listClub[]=new club(789,'PSG',776);
$listClub[]=new club(666,'OM',666);
$listClub[]=new club(5,'Menton',500);
$listClub[]=new club(1,'Carentan',1500);
$listclub[]=new Club(2, 'Pointou-Charante', 542);
$listclub[]=new Club(3, 'Perpignant', 500);

$listclub[1]->AjouterSports(new Sport( "Football", 11));

$listclub[2]->AjouterSports(new SportRelais( "DiDaDou 100m", 1, 100));
$listclub[2]->AjouterSports(new SportRelais( "DiDaDou 300m", 1, 300));

$listclub[3]->AjouterSports(new SportBallon( "Handball", 8, 20,10));
$listclub[3]->AjouterSports(new SportBallon( "Basket", 6, 20, 30));
$listclub[3]->AjouterSports(new SportRelais("Tire a l'arc", 3,150));

foreach($listClub as $keyListSport => $valueListClub)
{
    echo $valueListSport->getNomSport().'  '.$valueListSport->getDescription().'<br>';
}