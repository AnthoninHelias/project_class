<?php
include 'sport.php';
include 'SportRelais.php';

echo "projet heritage et interface <br>";
$listSport=new Sport("Football", 11);
echo $listSport->getDescription();
$listSportRelais = new SportRelais("4*100",1,400);
echo $listSportRelais->getDescription();