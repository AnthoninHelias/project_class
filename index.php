<?php
include 'sport.php';
include 'sportRelais.php';

echo "projet heritage et interface <br>";
$listSport=new Sport("Football", 11);
echo $listSport->getDescription();
$listSportRelais = new sportRelais("4*100",1,400);
echo $listSportRelais->getDescription();