<?php


$club[1]=new Club(1,"ST Etienne",777);
$club[2]=new Club(2,"Paris",666);
$club[3]=new Club(3,"Bordeaux",555);


//Sport du ST Etienne
$sb=new Sport("Football",11);
$sportRelais1=new SportRelais("500 m",500,4);
$sportRelais2=new SportRelais("4x400 m haie",400,4);
$sportRelais3=new SportRelais("3x500",400,3);
$sportRelais4=new SportRelais("3x400",400,3);
$sportRelais5=new SportRelais("500 m haie",500,1);
$sport4=new Sport("Boxe",1);
$sport5=new Sport("Karate",1);
$sportBallon9=new SportBallon("FootBall",11,68,105);

$club[1]->AjouterSports($sportBallon9);
$club[1]->AjouterSports($sportRelais1);
$club[1]->AjouterSports($sportRelais2);
$club[1]->AjouterSports($sportRelais3);
$club[1]->AjouterSports($sportRelais4);
$club[1]->AjouterSports($sportRelais5);
$club[1]->AjouterSports($sport4);
$club[1]->AjouterSports($sport5);
$club[1]->AjouterSports($sb);

//Sport de Paris
$sport1=new Sport("Boxe",1);
$sport2=new Sport("karate",1);
$sportBallon1=new SportBallon("FootBall",11,68,105);
$sportBallon2=new SportBallon("HandBall",7,35,65);
$sportBallon7=new SportBallon("HandiBall",7,35,65);
$sportRelais6=new SportRelais("4x400 m",400,4);
$club[2]->AjouterSports($sport1);
$club[2]->AjouterSports($sport2);
$club[2]->AjouterSports($sportBallon1);
$club[2]->AjouterSports($sportBallon2);
$club[2]->AjouterSports($sportBallon7);
$club[2]->AjouterSports($sportRelais6);

//Sport de Perpignant
$sport3=new Sport("Muay thai",1);
$sport4=new Sport("Catch",1);
$sport5=new Sport("League of legends",5);
$sportBallon3=new SportBallon("FootBall",11,68,105);
$sportBallon4=new SportBallon("football americain",53,110,49);
$sportRelais6=new SportRelais("500 m",500,1);

$club[3]->AjouterSports($sport3);
$club[3]->AjouterSports($sport4);
$club[3]->AjouterSports($sport5);
$club[3]->AjouterSports($sportBallon3);
$club[3]->AjouterSports($sportBallon4);
$club[3]->AjouterSports($sportRelais6);

