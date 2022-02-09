<?php
include 'sport.php';

echo "projet heritage et interface <br>";
$listSport=new Sport("Football", 11);
echo $listSport->getDescription();
