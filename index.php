<h1>football Poo</h1>

<?php

spl_autoload_register(function($class_name) {
    require 'classes/'.$class_name . '.php';
});


$france = new pays("France");
$portugal = new pays ("Portugal");
$argentine = new pays ("Argentine");
$bresil = new pays ("Brésil");
$espagne = new pays ("Espagne");


$joueur1 = new Joueur (" Ronaldo","Cristiano","01-05-1980",$portugal);
$joueur2 = new Joueur (" Benzema","Karim","19-12-1987",$france);
$joueur3 = new Joueur (" Neymar da Silva","Neymar","5-02-1992",$bresil);
$joueur4 = new Joueur ('Lionel','Messi', '1987-06-24', $argentine);



$france = new Equipe("psg");
$france = new Equipe("marseille");
$france = new Equipe("racing club stras");


$equipe1 = new Equipe('PSG', '1970', $france);
$equipe = new Equipe ('Racing Club Stras','1897', $france);




$cariere1 = new Contenir ($psg, '10-01-2017', $joueur3);
$cariere2 = new Contenir($psg, '10-01-2021', $lionelMessi);

echo $joueur2;
echo $france->afficherEquipe();



