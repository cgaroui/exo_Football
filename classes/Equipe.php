<?php

class Equipe{
    
    private string $pays;
    private array $joueur;


//constructeur
    public function __construct(string $pays)
    {
        $this->pays = $pays;
       
    
    }


//getters and setters 
   

    public function getPays()
    {
        return $this->pays;
    }

   
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    public function __toString()
    {
        return $this->pays;
    }


    public function addContenir(Equipe $equipe){      //on remplie le tableau equipes initialement vide par les nom des equipes au fur et à mesure 
        $this->equipe[] = $equipe;

    }
}