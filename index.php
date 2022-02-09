<?php
include 'ISport.inc';
include 'sport.php';
include 'sportRelais.php';
include 'sportBallon.inc';


echo "projet heritage et interface <br>";
$listSport=new Sport("Football", 11);
echo $listSport->getDescription();
$listSportRelais = new sportRelais("4*100",1,400);
echo $listSportRelais->getDescription();
$listSportBallon= new sportBallon("Handball",8,40,50);
echo $listSportBallon->getDescription();