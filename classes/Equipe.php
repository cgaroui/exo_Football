<?php

class Equipe{
    
    private string $pays;
    private array $equipes;

//constructeur
    public function __construct(string $pays)
    {
        $this->pays = $pays;
        $this->equipes = [];
    }



    public function getEquipes()
    {
        return $this->equipes;
    }

    public function setEquipes($equipes)
    {
        $this->equipes = $equipes;

        return $this;
    }

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

}