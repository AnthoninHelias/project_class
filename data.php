<?php

// Init les clubs
$club = array();
$club[1] = new Club(1, "ST Etienne", 777);
$club[2] = new Club(2, "Paris", 666);
$club[3] = new Club(3, "Bordeaux", 555);

// Les sports de ST Etienne
$sportBallon5 = new SportBallon("Basketball", 5, 35, 45);
$sport9 = new Sport("boxe", 1);
$sportRelais1 = new SportRelais("3 * 400", 1, 1200);
$sportRelais4 = new SportRelais("500m", 1, 100);
$sportRelais5 = new SportRelais("3 * 300", 1, 900);
$club[1]->AjouterSport($sportBallon5);
$club[1]->AjouterSport($sport9);
$club[1]->AjouterSport($sportRelais1);
$club[1]->AjouterSport($sportRelais4);
$club[1]->AjouterSport($sportRelais5);

// Les sports de Paris
$sport1 = new Sport("Karate", 1);
$sport2 = new Sport("boxe", 1);
$sportBallon1 = new SportBallon("Football", 11, 68, 105);
$sportBallon2 = new SportBallon("Handball", 7, 35, 65);
$sportRelais2 = new SportRelais("3 * 500", 1, 1500);
$club[2]->AjouterSport($sport1);
$club[2]->AjouterSport($sport2);
$club[2]->AjouterSport($sportBallon1);
$club[2]->AjouterSport($sportBallon2);
$club[2]->AjouterSport($sportRelais2);

// Les sports Bordeaux
$sport3 = new Sport("Cyclisme", 1);
$sportBallon3 = new SportBallon("Football", 11, 68, 105);
$sportBallon4 = new SportBallon("Rugby", 15, 65, 115);
$sportRelais3 = new SportRelais("100m", 1, 100);
$club[3]->AjouterSport($sport3);
$club[3]->AjouterSport($sportBallon3);
$club[3]->AjouterSport($sportBallon4);
$club[3]->AjouterSport($sportRelais3);