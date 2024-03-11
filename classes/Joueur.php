<?php

class Joueur{

    private string $nom;
    private string $prenom;
    private DateTime $naissance;
    private string $nationalite;

    public function __construct(string $nom, string $prenom, string $naissance, string $nationalite)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->naissance = new datetime($naissance);
        $this->nationalite = $nationalite;


        
    }


    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

  
    public function getNaissance()
    {
        return $this->naissance;
    }

  
    public function setNaissance($naissance)
    {
        $this->naissance = $naissance;

        return $this;
    }


    public function getNationalite()
    {
        return $this->nationalite;
    }

    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }


    public function __toString()
    {
        return $this->nom." ".$this->prenom;
    }
}