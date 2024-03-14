<h1>football Poo</h1>

<?php

spl_autoload_register(function($class_name) {
    require 'classes/'.$class_name . '.php';
});

$joueur1 = new Joueur (" Ronaldo","Cristiano","01-05-1980","Portugal");
$joueur2 = new Joueur (" Benzema","Karim","19-12-1987","France");
$joueur3 = new Joueur (" Neymar da Silva","Neymar","5-02-1992","Bresil");
$joueur3 = new Joueur (" Riyad","Mahrez","21-02-1991","Algerie"); 
$france = new Equipe("psg");
$france = new Equipe("marseille");
$france = new Equipe("racing");

echo $joueur2;
echo $france->afficherEquipe();



