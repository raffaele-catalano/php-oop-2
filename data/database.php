<?php

$foodShop       = [];
$toysShop       = [];
$sanitaryShop   = [];

//FOOD
$crocchetteMaxiAgeing = new Food ('Crocchette Maxi Ageing 8+');
$crocchetteMaxiAgeing->setImage('assets/img/food-img/royalcanin_maxiageing.jpg');
$crocchetteMaxiAgeing->setBrand('Royal Canin');
$crocchetteMaxiAgeing->setTaste('Manzo');
$crocchetteMaxiAgeing->setWeight(15);
$crocchetteMaxiAgeing->setCategory('<i class="fa-solid fa-dog fa-lg"></i>');
$crocchetteMaxiAgeing->setPrice(83.99);
$crocchetteMaxiAgeing->setDescription('Crocchette Royal Canin Maxi Ageing 8+ per cani di taglia grande, con nutrienti selezionati per un sano invecchiamento e con complesso antiossidante');
$foodShop[] = $crocchetteMaxiAgeing;
/////////////////////////////////////////
$crocchetteMediumAgeing = new Food ('Crocchette Medium Ageing 10+');
$crocchetteMediumAgeing->setImage('assets/img/food-img/royalcanin_mediumageing.jpg');
$crocchetteMediumAgeing->setBrand('Royal Canin');
$crocchetteMediumAgeing->setTaste('Manzo');
$crocchetteMediumAgeing->setWeight(15);
$crocchetteMediumAgeing->setCategory('<i class="fa-solid fa-dog fa-lg"></i>');
$crocchetteMediumAgeing->setPrice(80.99);
$crocchetteMediumAgeing->setDescription('Crocchette olistiche Royal Canin Medium Ageing 10+ per cani di taglia media (11-25 kg), con complesso antiossidante per invecchiamento sano, con vitamina E e acidi grassi Omega 3.');
$foodShop[] = $crocchetteMediumAgeing;
/////////////////////////////////////////
$crocchetteOneAdult = new Food ('Crocchette One Adult');
$crocchetteOneAdult->setImage('assets/img/food-img/purina_one_adult.jpg');
$crocchetteOneAdult->setBrand('Purina');
$crocchetteOneAdult->setTaste('Salmone & Cereali');
$crocchetteOneAdult->setWeight(2.8);
$crocchetteOneAdult->setCategory('<i class="fa-solid fa-cat fa-lg"></i>');
$crocchetteOneAdult->setPrice(14.99);
$crocchetteOneAdult->setDescription('Crocchette per gatti adulti, ricetta con salmone e cereali integrali, ricca di sostanze vitali e bilanciata, con complesso di nutrienti che rafforzano le difese naturali, ricco di acidi grassi Omega.');
$foodShop[] = $crocchetteOneAdult;
/////////////////////////////////////////

//TOYS
$mouseCatnip = new Toys ('Topolino Trixie con Catnip');
$mouseCatnip->setImage('assets/img/toys-img/mouse_catnip.jpg');
$mouseCatnip->setBrand('Catify');
$mouseCatnip->setMaterial('Poliestere');
$mouseCatnip->setCategory('<i class="fa-solid fa-cat fa-lg"></i>');
$mouseCatnip->setDimensions('L12 cm');
$mouseCatnip->setPrice(1.5);
$mouseCatnip->setDescription('Topolino in peluche con catnip di Trixie, con coda lunga, per offrire al tuo gatto tante ore di divertimento. In peluche di poliestere.');
$toysShop[] = $mouseCatnip;
/////////////////////////////////////////
$arkLeo = new Toys ('Archetto Little Leo');
$arkLeo->setImage('assets/img/toys-img/litte_leo.jpg');
$arkLeo->setBrand('PeToys');
$arkLeo->setMaterial('Poliestere');
$arkLeo->setCategory('<i class="fa-solid fa-cat fa-lg"></i>');
$arkLeo->setDimensions('L57 x P59 x H33 cm');
$arkLeo->setPrice(9.49);
$arkLeo->setDescription('Archetto gioco per gatti Little Leo, divertente tappeto per gioco e riposo, con motivo leopardato, 4 giochi pendenti riempiti con catnip, richiudibile e salvaspazio.');
$toysShop[] = $arkLeo;
/////////////////////////////////////////
$kongPuppy = new Toys ('Puppy Goodie Bone');
$kongPuppy->setImage('assets/img/toys-img/KONG_puppy.jpg');
$kongPuppy->setBrand('Kong');
$kongPuppy->setMaterial('Gomma');
$kongPuppy->setCategory('<i class="fa-solid fa-dog fa-lg"></i>');
$kongPuppy->setDimensions('L13 x P3 x H4.8 cm');
$kongPuppy->setPrice(7.49);
$kongPuppy->setDescription('Osso da masticare KONG Puppy Goodie Bone per cuccioli e cani piccoli, da riempire di snack, per lo sviluppo dei denti e dei muscoli masticatori, in gomma delicata sui denti.');
$toysShop[] = $kongPuppy;
/////////////////////////////////////////

//SANITARY
$collareSeresto = new Sanitary('Collare per cani 8kg+');
$collareSeresto->setImage('assets/img/sanitary-img/collare_seresto.jpg');
$collareSeresto->setAction('Antiparassitario');
$collareSeresto->setDuration('8 mesi');
$collareSeresto->setBrand('Seresto');
$collareSeresto->setCategory('<i class="fa-solid fa-dog fa-lg"></i>');
$collareSeresto->setPrice(31.99);
$collareSeresto->setDescription('Collare antiparassitario per cani di taglia grande oltre gli 8 kg di peso corporeo, contro pulci e zecche, rilascia principi attivi.');
$sanitaryShop[] = $collareSeresto;
/////////////////////////////////////////
$sprayAntiparassitario = new Sanitary('Spray Igienico');
$sprayAntiparassitario->setImage('assets/img/sanitary-img/frontline_spray.jpg');
$sprayAntiparassitario->setAction('Antiparassitario');
$sprayAntiparassitario->setDuration('5 mesi');
$sprayAntiparassitario->setBrand('Frontline');
$sprayAntiparassitario->setCategory('<i class="fa-solid fa-cat fa-lg"></i>    <i class="fa-solid fa-dog fa-lg"></i>');
$sprayAntiparassitario->setPrice(39.99);
$sprayAntiparassitario->setDescription('Antiparassitario in spray per cani e gatti, per il trattamento delle infestazioni da zecche, pulci e pidocchi, quando l’infestazione è già in atto.');
$sanitaryShop[] = $sprayAntiparassitario;
/////////////////////////////////////////
$furminator = new Sanitary('FURminator');
$furminator->setImage('assets/img/sanitary-img/furminator.jpg');
$furminator->setAction('Cura del Pelo');
// $furminator->setDuration('n.a.');
$furminator->setBrand('deShedding');
$furminator->setCategory('<i class="fa-solid fa-cat fa-lg"></i>');
$furminator->setPrice(49.99);
$furminator->setDescription('FURminator è uno strumento per la cura del pelo del gatto, con pettine in acciaio inox per rimuovere il sottopelo, con impugnatura ergonomica, per pelo corto o lungo.');
$sanitaryShop[] = $furminator;