<?php


class Contenir{
    private DateTime $dateDebut;
    private Equipe $equipe;
    private Joueur $joueur;


//constructeur 
    public function __construct(string $dateDebut, Equipe $equipe, Joueur $joueur)
    {
        $this->dateDebut = new DateTime($dateDebut);
        $this->equipe = $equipe;
        $this->joueur = $joueur;

        $this->equipe->addCariere($this);
        $this->joueur->addCariere($this);
    }


//getters and setters 
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }


    public function getEquipe()
    {
        return $this->equipe;
    }

   
    public function setEquipe($equipe)
    {
        $this->equipe = $equipe;

        return $this;
    }

    public function getJoueur()
    {
        return $this->joueur;
    }

    
    public function setJoueur($joueur)
    {
        $this->joueur = $joueur;

        return $this;
    }

   
}