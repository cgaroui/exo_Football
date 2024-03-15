<?php

class Pays{
    private string $pays;
    private array $equipes;



    public function __construct(string $pays)
    {
        $this->pays = $pays;
        $this->equipes = [];

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

 

    public function getEquipe()
    {
        return $this->equipes;
    }

    public function setEquipe($equipe)
    {
        $this->equipes = $equipe;

        return $this;
    }


    public function addEquipe(Equipe $equipe)
    {
        $this->equipes[] = $equipe;
    }

}








